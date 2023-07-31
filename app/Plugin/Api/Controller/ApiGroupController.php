<?php

App::uses('GroupsController','Group.Controller');
App::uses('GroupAppController','Group.Controller');
/**
 * Group Controller
 *
 */
class ApiGroupController extends GroupsController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public $scaffold;

    public function beforeFilter() {
        parent::beforeFilter();
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        $this->loadModel('Group.Group');
        $this->loadModel('Group.GroupUser');
    }

    public function browse($type = null,$param = null,$isRedirect = false) {

        $param = '';
        if (!isset($this->request->params['type']))
            $type = 'search';
        else
            $type = $this->request->params['type'];
        if ($type == 'filter') {
            $type = 'search';
             $param = $this->request->data['keyword'];
        }
        if (!empty($this->request->params['category_id'])) {
            $type = 'category';
            $param = $this->request->params['category_id'];
        }

        
        if ($type == 'popular' || $type == 'featured' || $type == 'join' ) {
            if($type == 'popular')  $groups = $this->Group->getPopularGroups(null, Configure::read('core.popular_interval'));
            if($type == 'featured') {
                $this->_checkPermission();
                $groups = $this->Group->find('all', array('conditions' => array('Group.featured' => 1)));
            }
            if($type == 'join') {
                $uid = $this->Auth->user('id');
                $this->_checkPermission();
                $groups = $this->GroupUser->getJoinedGroups($uid, null);
            }
            $this->set('groups', $groups);
        }
        else {
            parent::browse($type,$param,false);
        }
    }

    public function view($id = null,$group_name = null,$invite_checksum = null ) {
        $id = $this->request->params['group_id'];
        parent::view($id);
    }

    // GET group member of group
    public function groupMember() {
        $id = $this->request->params['group_id'];
        $respond = parent::members($id,false);
        if($respond) {
            $this->_throwException($respond);
        }
    }

    // GET group admin of a group
    public function groupAdmin() {
        $id = $this->request->params['group_id'];
        $uid = $this->Auth->user('id');
        $group = $this->Group->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $this->_checkPermission(array('aco' => 'group_view'));
        $this->_checkPermission(array('user_block' => $group['Group']['user_id']));


        $is_member = $this->GroupUser->isMember($uid, $group['Group']['id']);

        if (!(empty($is_member) && !empty($group) && $group['Group']['type'] == PRIVACY_PRIVATE)) {
            $group_members = $this->GroupUser->getUsers($id, GROUP_USER_ADMIN, null, null);
        } else {
            $this->throwErrorCodeException('private_group');
            throw new ApiBadRequestException(__d('api', 'This is private group. Only group members can view'));
        }
        if (empty($group_members)) {
            throw new ApiNotFoundException(__d('api', 'Group admin not found'));
        }
        $this->set('group_members', $group_members);
    }

    // GET group activity
    public function groupActivity() {
        $id = $this->request->params['group_id'];
        $page = $this->request->query('page') ? $this->request->query('page') : 1;
        //parent::view($id,false);
        $uid = $this->Auth->user('id');
        $group = $this->Group->findById($id);
        $this->_checkExistence($group);
        $this->_checkPermission(array('aco' => 'group_view'));
        $is_member = $this->GroupUser->isMember($uid, $group['Group']['id']);
        
        MooCore::getInstance()->setSubject($group);
        $this->set('is_member', $is_member);
        if ($group['Group']['type'] == PRIVACY_PRIVATE) {
            $cuser = $this->_getUser();
            if (!$cuser['Role']['is_admin'] && !$is_member)
                throw new ApiBadRequestException(__d('api', 'This is private group. Only group members can view'));
            }
        
        $this->loadModel('Activity');
        $activities = $this->Activity->getActivities("Group_Group", $id, null, $page);
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

    // Leave a group
    public function leaveGroup() {
        $id = $this->request->params['group_id'];
        $group = $this->Group->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $respond = parent::do_leave($id,false);
         if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->set(array(
                    'message' => __('You have successfully left this group'),
                    '_serialize' => array('message', 'id'),
            ));
        }
    }

    // Feature a group
    public function featureGroup() {
        $id = $this->request->params['group_id'];
        $group = $this->Group->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $this->_checkPermission(array('admin' => $group['Group']['user_id']));
        if ($group['Group']['featured'] == 1) {
            throw new ApiBadRequestException(__d('api','Group featured already.'));
        }        
        $respond = parent::do_feature($id,false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->set(array(
                'message' => __('Group has been featured'),
                'id' => $this->Group->id,
                '_serialize' => array('message', 'id'),
            ));
        }
    }

    // Unfeature a group
    public function unfeatureGroup() {
        $id = $this->request->params['group_id'];
        $group = $this->Group->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $this->_checkPermission(array('admin' => $group['Group']['user_id']));
        $cuser = $this->_getUser();
        if (!$cuser['Role']['is_admin']) {
            throw new ApiBadRequestException(__('Only admin can unfeature group.'));
        }
        if ($group['Group']['type'] == PRIVACY_PRIVATE) {
            $this->throwErrorCodeException('private_group');
            throw new ApiBadRequestException(__('You are not allowed unfeature private group.'));
        }
        if ($group['Group']['featured'] == 0) {
            throw new ApiBadRequestException(__d('api','Group unfeatured already.'));
        }
        parent::do_unfeature($id,false);
        $this->set(array(
            'message' => __('Group has been unfeatured'),
            'id' => $this->Group->id,
            '_serialize' => array('message', 'id'),
        ));
    }

    // Sent join request to a group
    public function joinRequest() {
        $id = $this->request->params['group_id'];
        $group = $this->Group->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $this->_checkPermission(array('user_block' => $group['Group']['user_id']));
        $respond = parent::do_request($id,false);
        if($respond) {
            $this->_throwException($respond);
        }
        else {
            $this->set(array(
                    'message' => __('Your join request has been sent'),
                    'id' => $id,
                    '_serialize' => array('message', 'id'),
            ));
        }
    }

    // View all join request from a group
    public function viewJoinRequest() {
        $id = $this->request->params['group_id'];
        $group = $this->Group->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $this->_checkPermission(array('user_block' => $group['Group']['user_id']));
        parent::ajax_requests($id);
    }

    // Accept join request from user
    public function acceptRequest() {
        $id = $this->request->params['request_id'];
        $group = $this->GroupUser->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group request not found'));
        }
        $this->request->data['id'] = $id;
        $this->request->data['status'] = GROUP_USER_MEMBER;
        $group_user = parent::ajax_respond(false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __d('api', $group_user['User']['name'] . ' is now a member of this group'),
            '_serialize' => array('message'),
        ));
    }

    // Delete join request
    public function deleteRequest() {
        $id = $this->request->params['request_id'];
        $group = $this->GroupUser->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group request not found'));
        }
        $this->request->data['id'] = $id;
        parent::ajax_respond(false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __('You have deleted the request. The sender will not be notified'),
            '_serialize' => array('message'),
        ));
    }

    // SEnd invite to join a group .
    public function sendInvite() {
        $uid = $this->Auth->user('id');
        $id = $this->request->data['group_id'];
        $group = $this->GroupUser->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $is_member = $this->GroupUser->isMember($uid, $group['Group']['id']);

        if ((empty($is_member) && empty($group) && $group['Group']['type'] == PRIVACY_PRIVATE)) {
            $this->throwErrorCodeException('private_group');
            throw new ApiBadRequestException(__d('api', 'This is private group. Only group members can view'));
        }
        $my_status = $this->GroupUser->getMyStatus($uid, $id);
        if (empty($my_status)) {
            throw new ApiNotFoundException(__d('api', 'You not in this group.'));
        }
        $respond = parent::ajax_sendInvite(false);
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

    public function notifyOn() {
        $uid = $this->Auth->user('id');
        $id = $this->request->params['group_id'];
        $group = $this->GroupUser->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }
        $is_member = $this->GroupUser->isMember($uid, $group['Group']['id']);

        if ((empty($is_member) && empty($group) && $group['Group']['type'] == PRIVACY_PRIVATE)) {
            $this->throwErrorCodeException('private_group');
            throw new ApiBadRequestException(__d('api', 'This is private group. Only group members can view'));
        }
        $this->loadModel('Group.GroupNotificationSetting');
        $check = $this->GroupNotificationSetting->getStatus($id, $uid);
        if ($check == 1) {
            throw new ApiBadRequestException(__d('api', 'Group notification on already'));
        }
        parent::stop_notification($id,false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __('Turn on notification successfull'),
            '_serialize' => array('message'),
        ));
    }

    public function notifyOff() {
        $uid = $this->Auth->user('id');
        $id = $this->request->params['group_id'];
        $group = $this->GroupUser->findById($id);
        if (empty($group)) {
            throw new ApiNotFoundException(__d('api', 'Group not found'));
        }

        $is_member = $this->GroupUser->isMember($uid, $group['Group']['id']);
        if ((empty($is_member) && empty($group) && $group['Group']['type'] == PRIVACY_PRIVATE)) {
            $this->throwErrorCodeException('private_group');
            throw new ApiBadRequestException(__d('api', 'This is private group. Only group members can view'));
        }

        $this->loadModel('Group.GroupNotificationSetting');
        $check = $this->GroupNotificationSetting->getStatus($id, $uid);
        if ($check == 0) {
            throw new ApiBadRequestException(__d('api', 'Group notification off already'));
        }
        parent::stop_notification($id,false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __('Turn off notification successfull'),
            '_serialize' => array('message'),
        ));
    }

    public function save($isReturn=true) {

        if (!isset($this->request->data['name']) || !isset($this->request->data['description']) || !isset($this->request->data['category_id'])) {
            if (!isset($this->request->data['name']))
                throw new ApiBadRequestException(__d('api', 'Group name is missing.'));
            if (!isset($this->request->data['description']))
                throw new ApiBadRequestException(__d('api', 'Group description is missing.'));
            if (!isset($this->request->data['category_id']))
                throw new ApiBadRequestException(__d('api', 'Group category is missing.'));
        }
//        if (isset($_FILES['qqfile'])) {
//            $upload = $this->_uploadThumbnail();
//            $this->request->data['photo'] = $upload['file'];
//        }
        if (!isset($this->request->data['photo'])) {
            $this->request->data['photo'] = '';
        }
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

    public function delete() {
        $id = $this->request->params['group_id'];
        parent::do_delete($id,false);
        $this->autoRender = true;
        $this->set(array(
            'message' => __('Group has been deleted'),
            '_serialize' => array('message'),
        ));
    }

    public function myGroupsList()
    {
        $uid = $this->Auth->user('id');
        $groupHelper = MooCore::getInstance()->getHelper('Group_Group');
        $group_data = $this->GroupUser->getJoinedGroups($uid, 500);
        $groups = array();
        if($group_data != null)
        {
            foreach($group_data as $group)
            {
                $group['Group']['photo'] = $groupHelper->getImage($group, array('prefix' => '150_square'));
                $groups[] = $group['Group'];
            }
        }
        $this->set(array(
            'message' => 'success',
            'groups' => $groups,
            '_serialize' => array('message', 'groups'),
        ));
    }
    public function getGroupProfile() {
        $this->loadModel('User');
        $id = $this->request->params['id'];
        $user = $this->User->findById( $id );
        $this->_checkExistence($user);
        $this->_checkPermission(array('user_block' => $user['User']['id']));
        parent::profile_user_group($id,false);
    }
}
