<?php

App::uses('ApiAppController', 'Api.Controller');

/**
 * Share Controller
 *
 */
App::uses('ShareController','Controller');
class ApiShareController extends ShareController {
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->autoRender = true;
        $this->OAuth2 = $this->Components->load('OAuth2');
        $this->OAuth2->verifyResourceRequest(array('token'));
        
        $this->loadModel("Activity");
    }

    public function beforeShare($share) {
        $uid = $this->Auth->user('id');
        $activity = array();
        $object_id = isset($share['object_id']) ? $share['object_id'] : null;
        $param = isset($share['param']) ? $share['param'] : null;
        switch ($param) {
            case 'Blog_Blog':
                $type = "blog_item_detail_share";
                break;
            case 'Photo_Album':
                $type = "album_item_detail_share";
                break;
            case 'Photo_Photo':
                $type = "photo_item_detail_share";
                break;
            case 'Video_Video':
                $type = "video_item_detail_share";
                break;
            case 'Topic_Topic':
                $type = "topic_item_detail_share";
                break;
            case 'Group_Group':
                $type = "group_item_detail_share";
                break;
            case 'Event_Event':
                $type = "event_item_detail_share";
                break;
            default:
                if ($param != "Activity") {
                    throw new ApiBadRequestException(__d('api', 'Param not correct. Please check again'));
                }
                break;
        }

        $plugin = '';
        $object = null;
        //$social_link_share = FULL_BASE_URL . $this->request->webroot;
        if (!empty($param)) {
            list($plugin, $name) = mooPluginSplit($param);

            if (!empty($object_id)) {
                $object = MooCore::getInstance()->getItemByType($param, $object_id);
                if (empty($object)) {
                    throw new ApiNotFoundException(__('Items not found'));
                }


                $this->loadModel('Friend');
                $text = strtolower($plugin) . '_view';
                $this->_checkPermission(array('aco' => $text));
                $areFriends = $this->Friend->areFriends($uid, $object[$name]['id']);
                if (isset($object[$name]['privacy']))
                    $this->_checkPrivacy($object[$name]['privacy'], $object[$name]['id'], $areFriends);

                if ($plugin == 'Group') {
                    if ($object[$name]['moo_privacy'] == PRIVACY_PRIVATE || $object[$name]['moo_privacy'] == PRIVACY_RESTRICTED) {
                        $this->throwErrorCodeException('privacy_setting');
                        throw new ApiBadRequestException(__d('api', 'Can not share this group'));
                    }
                }
                if ($plugin == 'Event') {
                    if ($object[$name]['type'] == PRIVACY_PRIVATE) {
                        $this->throwErrorCodeException('private_item');
                        throw new ApiBadRequestException(__d('api', 'Can not share this event'));
                    }
                }
                if ($plugin == 'Photo') {
                    if (!empty($object['Album']['moo_privacy']) && $object['Album']['moo_privacy'] == PRIVACY_ME) {
                        throw new ApiBadRequestException(__d('api', 'Can not share this items'));
                    }
                }
                if ($plugin == 'Video' || $plugin == 'Topic') {
                    $this->loadModel('Group.GroupUser');
                    if ($object[$name]['group_id']) {
                        $is_member = $this->GroupUser->isMember($uid, $object[$name]['group_id']);
                        $cuser = $this->_getUser();
                        if (!$cuser['Role']['is_admin'] && !$is_member) {
                            $this->throwErrorCodeException('not_group_member');
                            throw new ApiBadRequestException(__d('api', 'This item is in a group. Only group members can share'));
                        }
                    }
                    if ($plugin == 'Topic') {
                        if ($object[$name]['locked']) {
                            $this->throwErrorCodeException('topic_is_blocked');
                            throw new ApiBadRequestException(__('This topic has been locked'));
                        }
                    }
                }
                if ($plugin == 'Photo' && $object[$name]['type'] == 'Group_Group') {
                    $this->loadModel('Group.GroupUser');
                    if ($object[$name]['target_id']) {
                        $is_member = $this->GroupUser->isMember($uid, $object[$name]['target_id']);
                        $cuser = $this->_getUser();
                        if (!$cuser['Role']['is_admin'] && !$is_member) {
                            $this->throwErrorCodeException('not_group_member');
                            throw new ApiBadRequestException(__('This a group photo. Only group members can share'));
                        }
                    }
                }
            }

//            if (!empty($plugin)) {
//                $social_link_share = FULL_BASE_URL . $object[key($object)]['moo_href'];
//            }
        }

        if ($param == "Activity") {
            $this->loadModel('Activity');
            $activity = $this->Activity->findById($object_id);
            //echo '<pre>';print_r($object);die;
            if (empty($activity)) {
                throw new ApiNotFoundException(__('Items not found'));
            }
            if ($activity['Activity']['privacy'] == PRIVACY_ME) {
                $this->throwErrorCodeException('private_item');
                throw new ApiBadRequestException(__d('api', 'This is private item. Can not share'));
            }
            if (empty($activity['Activity']['share']) && $activity['Activity']['share']) {
                throw new ApiBadRequestException(__d('api', 'Can not share this item'));
            }
            $type = $activity['Activity']['action'] . '_share';
        }

        $shareArray = array(
            'activity' => $activity,
            'param' => $param,
            'plugin' => $plugin,
            'type' => $type,
            'object' => $object,
            'object_id' => $object_id,
        );
        //$this->set(compact('activity', 'cuid', 'param', 'plugin', 'type', 'object', 'object_id', 'social_link_share'));
        return $shareArray;
    }

    public function wall() {
        //validate
        $data = $this->request->data;
        $share_type = array("#me", "#email", "#friend", "#group", "#msg");
        if (empty($data['share_type']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Share type is REQUIRED'));
        }
        else if(!in_array($data['share_type'], $share_type))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Share type cound not be found'));
        }
        else if(empty($data['action']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Action is REQUIRED'));
        }
        else if(empty($data['object_id']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Object_id is REQUIRED'));
        }
        /*else if(($activity = $this->Activity->findById($data['object_id'])) == null)
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : Object is cound not be found'));
        }*/
        else if($data['share_type'] == "#friend" && empty($data['friendSuggestion']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : friendSuggestion is REQUIRED'));
        }
        else if($data['share_type'] == "#group" && empty($data['groupSuggestion']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : groupSuggestion is REQUIRED'));
        }
        else if($data['share_type'] == "#email" && empty($data['email']))
        {
            throw new ApiNotFoundException(__d('api', 'Missing parameter : email is REQUIRED'));
        }
        
        //pass
        $result = $this->do_share();
        $result = json_decode($result);
        if($result["success"] === true)
        {
            $this->set(array(
                'message' => 'success',
                'data' => $result["msg"],
                '_serialize' => array('message', 'data'),
            ));
        }
        else
        {
            $this->set(array(
                'message' => 'error',
                'data' => $result["msg"],
                '_serialize' => array('message', 'data'),
            ));
        }
    }
}
