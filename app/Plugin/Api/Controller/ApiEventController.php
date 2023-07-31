<?php

App::uses('EventsController','Event.Controller');
App::uses('EventAppController','Event.Controller');
/**
 * Event Controller
 *
 */
class ApiEventController extends EventsController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Event.Event');
        $this->loadModel('Event.EventRsvp');
    }

    public function browse($type = null,$param = null,$isRedirect = false) {
        $param = '';
        if (!isset($this->request->params['type']))
            $type = 'search';
        else
            $type = $this->request->params['type'];

        if ($type == 'myupcomming')
            $type = 'my';
        if ($type == 'friendattend')
            $type = 'friends';

        if ($type == 'search') {
            if (isset($this->request->data['keyword'])) {
                $param = $this->request->data['keyword'];
            }
        }
        if (!empty($this->request->params['category_id'])) {
            $type = 'category';
            $param = $this->request->params['category_id'];
        }
        parent::browse($type,$param,false);
    }

    // GET event activity
    public function eventActivity() {
        $id = $this->request->params['event_id'];
        $page = $this->request->query('page') ? $this->request->query('page') : 1;
        //parent::view($id,false);
        $uid = $this->Auth->user('id');
        $event = $this->Event->findById($id);
        $this->_checkExistence($event);
        $role_id = $this->_getUserRoleId();
        $this->_checkPermission(array('aco' => 'event_view'));
        if ($uid) {
            $my_rsvp = Cache::read('eventrsvp.myrsvp.' . $uid . '.event.' . $id, 'event');
            if (empty($my_rsvp)) {
                $my_rsvp = $this->EventRsvp->getMyRsvp($uid, $id);
                Cache::write('eventrsvp.myrsvp.' . $uid . '.event.' . $id, $my_rsvp, 'event');
            }
        }
        if (empty($my_rsvp) && $event['Event']['type'] == PRIVACY_PRIVATE && $role_id != ROLE_ADMIN) {
                $this->throwErrorCodeException('private_event');
                throw new ApiBadRequestException(__d('api', 'This is private event . You do not have permission to view'));
        }
        MooCore::getInstance()->setSubject($event);
        
        $this->loadModel('Activity');
        $activities = $this->Activity->getActivities("Event_Event", $id, null, $page);
        if (!empty($uid)) {
            $this->loadModel('Like');
            $activity_likes = $this->Like->getActivityLikes($activities, $uid);
            $this->set('activity_likes', $activity_likes);
        }
        $this->set('activities', $activities);
        $data['activities'] = $activities;

        if (empty($data['activities'])) :
            throw new ApiNotFoundException(__d('api', 'There are no new feeds to view at this time.'));
        endif;
    }

    // GET event rsvp
    public function rsvp() {
        $cuser = $this->_getUser();
        $uid = $this->Auth->user('id');
        $id = $this->request->params['event_id'];
        $type = $this->request->params['type'];
        if ($type == 'wait')
            $rsvp_type = 0;
        if ($type == 'attend')
            $rsvp_type = 1;
        if ($type == 'maybe')
            $rsvp_type = 3;
        if ($type == 'no')
            $rsvp_type = 2;
        $event = $this->Event->findById($id);
        if (empty($event)) {
            throw new ApiNotFoundException(__d('api', 'Event not found'));
        }
        $role_id = $this->_getUserRoleId();
        $this->_checkPermission(array('aco' => 'event_view'));
        $this->_checkPermission(array('user_block' => $event['Event']['user_id']));

        $my_rsvp = Cache::read('eventrsvp.myrsvp.' . $uid . '.event.' . $id, 'event');
        if (empty($my_rsvp)) {
            $my_rsvp = $this->EventRsvp->getMyRsvp($uid, $id);
            Cache::write('eventrsvp.myrsvp.' . $uid . '.event.' . $id, $my_rsvp, 'event');
        }

        if (empty($my_rsvp) && $event['Event']['type'] == PRIVACY_PRIVATE && $role_id != ROLE_ADMIN && ( $cuser['id'] != $event['User']['id'] )) {
            $this->throwErrorCodeException('private_event');
            throw new ApiBadRequestException(__d('api', 'This is private event . You do not have permission to view'));
        }
        parent::showRsvp($id,$rsvp_type,false);
    }

    // GET event detail by id
    public function view($id =null,$isRedirect = false) {
        $id = $this->request->params['event_id'];
        $respond = parent::view($id,false);
        if($respond) {
            $this->_throwException($respond);
        }
    }

    // SEnd invite to attend event .
    public function sendInvite($isRedirect = false) {
        $cuser = $this->_getUser();
        $uid = $this->Auth->user('id');
        $id = $this->request->data['event_id'];
        $event = $this->Event->findById($id);
        if (empty($event)) {
            throw new ApiNotFoundException(__d('api', 'Event not found'));
        }
        $role_id = $this->_getUserRoleId();
        $this->_checkPermission(array('aco' => 'event_view'));
        $this->_checkPermission(array('user_block' => $event['Event']['user_id']));
        $my_rsvp = Cache::read('eventrsvp.myrsvp.' . $uid . '.event.' . $id, 'event');
        if (empty($my_rsvp)) {
            $my_rsvp = $this->EventRsvp->getMyRsvp($uid, $id);
            Cache::write('eventrsvp.myrsvp.' . $uid . '.event.' . $id, $my_rsvp, 'event');
        }

        if (empty($my_rsvp) && $event['Event']['type'] == PRIVACY_PRIVATE && $role_id != ROLE_ADMIN && ( $cuser['id'] != $event['User']['id'] )) {
            $this->throwErrorCodeException('private_event');
            throw new ApiBadRequestException(__d('api', 'This is private event . You do not have permission to view'));
        }
        $respond =  parent::sendInvite(false);
         if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                    'message' => __('Your invitations have been sent.'),
                    '_serialize' => array('message'),
            ));
        }
    }

    // SEnd rsvp
    public function sendRSVP() {

        $uid = $this->Auth->user('id');
        $this->request->data['user_id'] = $uid;
        $id = $this->request->data['event_id'];
        $event = $this->Event->findById($id);
        if (empty($event)) {
            throw new ApiNotFoundException(__d('api', 'Event not found'));
        }
        $this->_checkPermission(array('user_block' => $event['Event']['user_id']));
        if (empty($this->request->data['rsvp']) && !isset($this->request->data['rsvp'])) {
            throw new ApiBadRequestException(__d('api', 'Please add your RSVP'));
        }
        $respond = parent::do_rsvp(false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->autoRender = true;
            $this->set(array(
                    'message' => __d('api', 'success'),
                    '_serialize' => array('message'),
            ));
        }
    }

    // create and edit event
    public function save($isReturn = true) {

        $this->request->data['type'] = isset($this->request->data['privacy']) ? $this->request->data['privacy'] : 1;
//        if (isset($_FILES['qqfile'])) {
//            $upload = $this->_uploadThumbnail();
//            $this->request->data['photo'] = $upload['file'];
//        }
        if (!isset($this->request->data['photo'])) {
            $this->request->data['photo'] = '';
        }
        if (!isset($this->request->data['title']))
            throw new ApiBadRequestException(__d('api', 'Event title is missing.'));
        if (!isset($this->request->data['description']))
            throw new ApiBadRequestException(__d('api', 'Event description is missing.'));
        if (!isset($this->request->data['category_id']))
            throw new ApiBadRequestException(__d('api', 'Event category is missing.'));
        if (!isset($this->request->data['from']))
            throw new ApiBadRequestException(__d('api', 'Event date start is missing.'));
        if (!isset($this->request->data['to']))
            throw new ApiBadRequestException(__d('api', 'Event date end is missing.'));
        
        $id = parent::save(true);
        if($id) {
           $this->autoRender = true;
           $this->set(array(
                'message' => __d('api', 'success'),
                'id' => $id,
                '_serialize' => array('message', 'id'),
            ));
       }
    }

    // Delete event
    public function delete() {
        $id = $this->request->params['event_id'];
        parent::do_delete($id,false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __('Event has been deleted'),
            '_serialize' => array('message'),
        ));
    }
    public function getEventProfile() {
        $this->loadModel('User');
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_event($id,false);
    }

}
