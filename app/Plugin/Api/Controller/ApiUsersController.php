<?php

//App::uses('ApiAppController', 'Api.Controller');
App::uses('UsersController', 'Controller');

/**
 * Users Controller
 *
 */
class ApiUsersController extends UsersController {

    public $publicAction = array('api_users.getRegister', 'api_users.postRegister', 'api_users.getForgot', 'api_users.postForgot');
    
    public function beforeFilter() {
        parent::beforeFilter();
        if (!$this->isPublicAction()) {
            $this->OAuth2 = $this->Components->load('OAuth2');
            $this->OAuth2->verifyResourceRequest(array('token'));
        } else {
            $this->Auth->allow();
        }
        $this->loadModel('User');
    }
    
    public function isPublicAction($actions = array()) {
        $default = $this->publicAction;
        $actions = array_merge($default, $actions);
        $cAction = $this->request->params['action'];
        $cController = $this->params['controller'];

        if (in_array("$cController.$cAction", $actions)) {
            return true;
        }
        return false;
    }

    public function browse($type = null, $param = null) {
        if (!isset($this->request->params['type']))
            $type = 'search';
        else
            $type = $this->request->params['type'];

        parent::ajax_browse($type, $param, false);
    }

    public function user($user_id) {
        parent::view($user_id,false);
    }

    public function getMenuProfile() {
        parent::view($this->request->params['id'],false);
    }
    public function me() {
        $this->User->unbindModel(array('belongsTo' => array('Role')));
        $data = $this->User->findById($this->OAuth2->getOwnerResourceRequest());
        $data = $this->_filterData($data, array('password', 'role_id', 'created', 'active', 'confirmed', 'code',
            'notification_email', 'ip_address', 'privacy', 'username', 'featured', 'hide_online',
            'approved', 'is_social', 'moo_title', 'moo_plugin', 'moo_url'));
        $me = $data["User"];

        $event = new CakeEvent('Plugin.Controller.UsersApi.me', $this, array('me' => $me));
        $this->getEventManager()->dispatch($event);
        $extra = array();
        if ($event->result && is_array($event->result)) {
            $extra = $event->result;
        }

        if (empty($me)) {
            throw new ApiNotFoundException(__d('api', 'User does not exist.'));
        }
        $this->set('extra', $extra);
        $this->set('me', $me);
    }

    // --- GET /user/{user-id}/activities
    public function getActivities() {
        $type = 'profile';
        $page = $this->request->query('page') ? $this->request->query('page') : 1;
        $id = $this->request->params['id'];
        if (is_numeric($id)) :
            $user = $this->User->findById($id);
            if (empty($user)) {
                throw new ApiNotFoundException(__d('api', 'User does not exist.'));
            }
        endif;
        if (!$user['User']['active']) :
            throw new ApiBadRequestException(__d('api', "The user\'s account you were trying to view has been disabled"));
        endif;
        $canView = $this->_canViewProfile($user["User"]);
        if (!$canView) :
            if ($user['User']['privacy'] == 2):
                throw new ApiBadRequestException(__d('api', "The user\'s account you were trying to view only shares some information with friends ."));
            else :
                throw new ApiBadRequestException(__d('api', "The user\'s account you were trying to view is privite. "));
            endif;
        endif;

        $uid = $this->Auth->user('id');
        $param = $id;
        $data = array();

        $check_post_status = true;
        $subject = MooCore::getInstance()->getSubject();
        list($plugin, $name) = mooPluginSplit($type);
        if (!empty($plugin)) {
            $helper = MooCore::getInstance()->getHelper($plugin . '_' . $plugin);
            $check_post_status = $helper->checkPostStatus($subject, $uid);
        }
        $this->set('check_post_status', $check_post_status);

        $activity_feed = $type;
        $this->loadModel('Activity');
        $activities = $this->Activity->getActivities($activity_feed, $param, $uid, $page);
        if (!empty($uid)) {
            $this->loadModel('Like');
            $activity_likes = $this->Like->getActivityLikes($activities, $uid);
            $this->set('activity_likes', $activity_likes);
        }
        $this->set('activities', $activities);
        $data['activities'] = $activities;


        if (!empty($data['activities'])) :
            $this->set('datas', $data);
        else:
            throw new ApiNotFoundException(__d('api', 'There are no new feeds to view at this time.'));
        endif;
    }

    // --- GET /user/{user-id}/friends
    public function getFriends() {
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_friends($id,false);
    }
    public function getBlockMember() {
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_blocks($id,false);
    }
    // --- GET /user/{user-id}/likes
    public function getLikes($id) {
        $this->set(array(
            'data' => 'GET /user/{user-id}/likes',
            '_serialize' => array('data')
        ));
    }

    // --- GET /user/{user-id}/notifications
    public function getNotifications($id) {
        $this->set(array(
            'data' => 'GET /user/{user-id}/notifications',
            '_serialize' => array('data')
        ));
    }

    // --- GET /user/{user-id}/photos
    public function getPhotos($id) {
        $this->set(array(
            'data' => 'GET /user/{user-id}/photos',
            '_serialize' => array('data')
        ));
    }

    // --- GET /user/{user-id}/photos/uploaded
    public function getPhotosUploaded($id) {
        $this->set(array(
            'data' => 'GET /user/{user-id}/photos/uploaded',
            '_serialize' => array('data')
        ));
    }

    // --- Get /usr/register
    public function getRegister() {
        //$a = time();
        //var_dump(md5(Configure::read('Api.api_secret_key') . $a));

        $this->set(array(
            'key' => strval(time()),
            'require_gender' => Configure::read('core.require_gender') ? true : false,
            'show_gender_signup' => Configure::read('core.show_gender_signup') ? true : false,
            'enable_unspecified_gender' => Configure::read('core.enable_unspecified_gender') ? true : false,
            'birthday_require' => Configure::read('core.require_birthday') ? true : false,
            'show_birthday_signup' => Configure::read('core.show_birthday_signup') ? true : false,
            'disable_registration' => Configure::read('core.disable_registration') ? true : false,
            '_serialize' => array('key', 'require_gender', 'show_gender_signup', 'enable_unspecified_gender', 'birthday_require', 'show_birthday_signup', 'disable_registration')
        ));
    }

    // --- POST /user/register
    public function postRegister() {
        if (empty($this->request->data['key'])) {
            throw new ApiBadRequestException(__("Key is not empty!"));
        } elseif (!$this->isValidTimeStamp($this->request->data['key'])) {
            throw new ApiBadRequestException(__("Key is invalid!"));
        } elseif ((time() - (int) $this->request->data['key']) > 60) {
            throw new ApiUnauthorizedException(__("Key is expired!"));
        }
        if (!empty($this->request->data['security_token']) && md5(Configure::read('Api.api_secret_key') . $this->request->data['key']) == $this->request->data['security_token']) {

            if (Configure::read('core.disable_registration')) {
                throw new ForbiddenException(__('The admin has disabled registration on this site'));
            }
            if (Configure::read('core.enable_registration_code') && $this->request->data['registration_code'] != Configure::read('core.registration_code')) {
                throw new ApiBadRequestException(__('Invalid registration code'));
            }
            $data['role_id'] = ROLE_MEMBER;
            $clientIP = getenv('HTTP_X_FORWARDED_FOR') ? getenv('HTTP_X_FORWARDED_FOR') : $_SERVER['REMOTE_ADDR'];
            $data['ip_address'] = $clientIP;

            $data['confirmed'] = (Configure::read('core.email_validation')) ? 0 : 1;
            $data['last_login'] = date("Y-m-d H:i:s");
            $data['privacy'] = Configure::read('core.profile_privacy');
            $data['featured'] = 0;
            $data['username'] = '';
            $data['profile_type_id'] = 0;

            if (isset($this->request->data['name'])) {
                $data['name'] = $this->request->data['name'];
            }
            $data['gender'] = 'Unknown';
            if (isset($this->request->data['email'])) {
                $data['email'] = $this->request->data['email'];
                $data['code'] = md5($data['email'] . microtime());
            }
            if (isset($this->request->data['password'])) {
                $data['password'] = $this->request->data['password'];
            } else {
                throw new ApiBadRequestException(__('Password must have at least 6 characters'));
            }
            if (isset($this->request->data['password2'])) {
                $data['password2'] = $this->request->data['password2'];
            } else {
                $data['password2'] = "empty";
            }
            // Fix bug Passwords do not match
            if ($data['password'] != $data['password2']) {
                throw new ApiBadRequestException(__('Passwords do not match'));
            }
            if (isset($this->request->data['gender'])) {
                $data['gender'] = $this->request->data['gender'];
            }

            if (isset($this->request->data['birthday'])) {
                $data['birthday'] = $this->request->data['birthday'];
            }

            if (!Configure::read('core.approve_users')) {
                $data['approved'] = 1;
            }
            $this->User->set($data);
            if (isset($this->User->validate['birthday']))
                unset($this->User->validate['birthday']);

            if (isset($this->User->validate['gender']))
                unset($this->User->validate['gender']);

            if (!$this->User->validates()) {
                $errors = $this->User->invalidFields();
                throw new ApiBadRequestException(current(current($errors)));
            } else {
                if ($this->User->save()) {
                    $this->getEventManager()->dispatch(new CakeEvent('UserController.doSaveUser', $this, array('data' => $data)));
                } else {
                    throw new ApiBadRequestException(__('Something went wrong. Please contact the administrators'));
                }
            }
            $this->set(array(
                'message' => 'Done',
                'approve_users' => Configure::read('core.approve_users'),
                '_serialize' => array('date', 'approve_users')
            ));
        } else {
            throw new ApiBadRequestException(__("Security token is invalid"));
        }
    }

    // --- Get /user/password
    public function changePassword() {
        $respond = parent::password(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'message' => __('Your password has been changed'),
                '_serialize' => array('message'),
            ));
        }
    }
    // --- Get /user/edit
    public function editProfile() {
        $this->request->data['birthday']['year'] = (isset($this->request->data['year'])) ?  $this->request->data['year'] : '';
        $this->request->data['birthday']['month'] = (isset($this->request->data['month'])) ?  $this->request->data['month'] : '';
        $this->request->data['birthday']['day'] = (isset($this->request->data['day'])) ?  $this->request->data['day'] : '';
        $respond = parent::ajax_save_profile(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                'message' => __('Your changes have been saved'),
                '_serialize' => array('message'),
            ));
        }
    }
    // --- Get /usr/forgot
    public function getForgot() {
        $this->set(array(
            'key' => strval(time()),
            '_serialize' => array('key')
        ));
    }

    // --- POST /user/forgot
    public function postForgot() {
        CakeLog::write('debug', print_r($_SERVER, true));
        if (empty($this->request->data['key'])) {
            throw new ApiBadRequestException(__("Key is not empty!"));
        } elseif (!$this->isValidTimeStamp($this->request->data['key'])) {
            throw new ApiBadRequestException(__("Key is invalid!"));
        } elseif ((time() - (int) $this->request->data['key']) > 60) {
            throw new ApiUnauthorizedException(__("Key is expired!"));
        }
        //if (!empty($this->request->data['security_token']) && md5(Configure::read('Api.api_secret_key') . $this->request->data['key']) == $this->request->data['security_token']) {
        $this->loadModel('User');
        $user = $this->User->findByEmail($this->request->data['email']);

        if (!empty($user)) {
            $this->loadModel('PasswordRequest');
            $code = md5(Configure::read('Security.salt') . time());

            if ($this->PasswordRequest->save(array('user_id' => $user['User']['id'], 'code' => $code))) {
                $ssl_mode = Configure::read('core.ssl_mode');
                $http = (!empty($ssl_mode)) ? 'https' : 'http';
                $this->MooMail->send($this->request->data['email'], 'reset_password', array(
                    'recipient_title' => $user['User']['name'],
                    'recipient_link' => $http . '://' . $_SERVER['SERVER_NAME'] . $user['User']['moo_href'],
                    'reset_link' => $http . '://' . $_SERVER['SERVER_NAME'] . $this->request->base . '/users/resetpass/' . $code,
                        )
                );
            }
            $this->set(array(
                'message' => 'Done',
                '_serialize' => array('message')
            ));
        } else {
            throw new ApiBadRequestException(__("Email does not exist"));
        }
        /* } else {
          throw new ApiBadRequestException(__("Security token is invalid"));
          } */
    }

    private function isValidTimeStamp($timestamp) {
        return ((string) (int) $timestamp === $timestamp) && ($timestamp <= PHP_INT_MAX) && ($timestamp >= ~PHP_INT_MAX);
    }

}
