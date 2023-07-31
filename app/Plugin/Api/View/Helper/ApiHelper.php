<?php

/*
 * Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */

App::uses('Helper', 'View');

class ApiHelper extends Helper implements CakeEventListener {

    protected $_eventManager = null;

    public function getEventManager() {
        if (empty($this->_eventManager)) {
            $this->_eventManager = new CakeEventManager();
            $this->_eventManager->attach($this);
        }
        return $this->_eventManager;
    }

    public function implementedEvents() {
        return array();
    }

    public $helpers = array(
        'Html' => array('className' => 'MooHtml'),
        'Text',
        'Form' => array('className' => 'MooForm'),
        'Session',
        'Time' => array('className' => 'AppTime'),
        'Moo',
        'Menu.Menu',
        'MooGMap',
        'Text' => array('className' => 'MooText'),
        'MooPeople',
        'MooTranslate',
        'MooPhoto',
        'MooTime',
        'MooActivity',
        'MooPopup',
        'MooRequirejs',
        'Minify.Minify',
        'Storage.Storage',
        'Event.Event',
        'Photo.Photo',
        'Topic.Topic',
        'Blog.Blog',
        'Video.Video',
        'Group.Group'
    );
    public $actorHtml = array();

    public function renderAFeed($data, $likesExt = array() , $is_member = null ) {
        $utz = (!is_numeric(Configure::read('core.timezone')) ) ? Configure::read('core.timezone') : 'UTC';
        $uid = AuthComponent::user('id');
        $item_type = $data['Activity']['item_type'];
        $check_privacy_type = true;
        if ($data['Activity']['plugin']) {
            $options = array('plugin' => $data['Activity']['plugin']);
        } else {
            $options = array();
        }

        if ($item_type) {
            list($plugin, $name) = mooPluginSplit($item_type);
            $object = MooCore::getInstance()->getItemByType($item_type, $data['Activity']['item_id']);
        } else {
            $plugin = '';
            $name = '';
            $object = null;
        }
        if (strtolower($data['Activity']['type']) != 'user') {
            $target = MooCore::getInstance()->getItemByType($data['Activity']['type'], $data['Activity']['target_id']);
            list($plugin_target, $name_target) = mooPluginSplit($data['Activity']['type']);
            $show_subject = MooCore::getInstance()->checkShowSubjectActivity($target);
            if ($show_subject) {
                $plugin_helper = MooCore::getInstance()->getHelper($plugin_target . '_' . $plugin_target);
                if (method_exists($plugin_helper, 'checkPrivacyFeedHome')) {
                    $check_privacy_type = $plugin_helper->checkPrivacyFeedHome($target);
                }
            }
        }

        $items = array();
        $activityId = $data['Activity']['id'];
        $tagUser = $title = $target = $type = $objecttType = '';

        $actorHtml = isset($data['User']['moo_href']) ? $this->Html->link($data['User']['name'], FULL_BASE_URL . $data['User']['moo_href']) : FULL_BASE_URL;
        switch ($data['Activity']['item_type']) {
            case 'user' :
                $title = '';
                if ($data['Activity']['action'] == 'friend_add') :
                    $type = 'add';
                    $objecttType = 'User';

                    $ids = explode(',', $data['Activity']['items']);
                    $userModel = MooCore::getInstance()->getModel('User');
                    $userModel->cacheQueries = false;
                    $users = $userModel->find('all', array('conditions' => array('User.id' => $ids)));

//get status of feed
                    $friend_add1 = '%s';
                    $friend_add2 = __('%s and %s');
                    $friend_add3 = __('%s and %s');
                    $friend_add = '';
                    $friend_addHtml = '';

                    switch (count($users)) {
                        case 1:
                            $friend_add = sprintf($friend_add1, h($users[0]['User']['name']));
                            $friend_addHtml = sprintf($friend_add1, $this->Html->link(h($users[0]['User']['name']), FULL_BASE_URL . $users[0]['User']['moo_href']));
                            break;
                        case 2:
                            $friend_add = sprintf($friend_add2, h($users[0]['User']['name']), h($users[1]['User']['name']));
                            $friend_addHtml = sprintf($friend_add2, $this->Html->link(h($users[0]['User']['name']), FULL_BASE_URL . $users[0]['User']['moo_href']), $this->Html->link(h($users[1]['User']['name']), FULL_BASE_URL . $users[1]['User']['moo_href']));
                            break;
                        case 3:
                        default :
                            $friend_add = sprintf($friend_add3, $this->Html->link(h($users[0]['User']['name']), FULL_BASE_URL . $users[0]['User']['moo_href']), abs(count($users) - 1) . ' ' . __('others'));
                            break;
                    }

                    $title = $data['User']['name'] . ' ' . __('is now friends with') . ' ' . $friend_add;
                    $titleHtml = $actorHtml . ' ' . __('is now friends with') . ' ' . $friend_addHtml;

//get Friend List display at feed
                    $userArrays = array();
                    foreach ($users as $user):
                        if (!empty($user)):

                            if (!empty($uid)):
                                $userStatus = '';
                                if ($this->MooPeople->sentFriendRequest($user['User']['id'])):
                                    $userStatus = __('Cancel Request');
                                elseif ($this->MooPeople->respondFriendRequest($user['User']['id'])):
                                    $userStatus = __('Respond to Friend Request');
                                elseif ($this->MooPeople->isFriend($user['User']['id'])):
                                    $userStatus = __('Remove');
                                elseif ($user['User']['id'] != $uid):
                                    $userStatus = __('Add');
                                endif;
                            endif;
                            $userArrays[] = array(
                                'url' => $user['User']['moo_href'],
                                'type' => $user['User']['moo_type'],
                                'id' => $user['User']['id'],
                                'image' => array(
                                    '50_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '50_square'), array(), true),
                                    '100_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '100_square'), array(), true),
                                    '200_square' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '200_square'), array(), true),
                                    '600' => $this->Moo->getItemPhoto(array('User' => $user['User']), array('prefix' => '600'), array(), true),
                                    "type" => "Link",
                                    "mediaType" => "image/jpeg",
                                ),
                                'name' => $user['User']['name'],
                                'friendCount' => __n('%s friend', '%s friends', $user['User']['friend_count'], $user['User']['friend_count']),
                                'photoCount' => __n('%s photo', '%s photos', $user['User']['photo_count'], $user['User']['photo_count']),
                                'status' => $userStatus,
                            );

                        endif;
                    endforeach;


                endif;


//respond data
                $items = array(
                    'userList' => $userArrays,
                );
                break;
        }

        if (isset($data['ActivityComment'])) :
            $commentCount = count($data['ActivityComment']);
        endif;
        if (isset($data['PhotoComment'])) :
            $commentCount = count($data['PhotoComment']);
        endif;
        if (isset($data['ItemComment'])) :
            $commentCount = count($data['ItemComment']);
        endif;




        $cuser = MooCore::getInstance()->getViewer();
        $hideLikeAndComment = false;
        if ($data['Activity']['params'] != 'no-comments') {
            if ((!($data['Activity']['item_type'] == 'Topic_Topic' && isset($object['Topic']) && $object['Topic']['locked']) ) || (!empty($cuser) && $cuser['Role']['is_admin'])) {
                if (!isset($is_member) || $is_member || $cuser['Role']['is_admin']) {
                    if ($check_privacy_type && ((isset($groupTypeItem) && $groupTypeItem['is_member']) || (!isset($groupTypeItem)) )) {
                        $hideLikeAndComment = false;
                    } else {
                        $hideLikeAndComment = true;
                    }
                } else {
                    $hideLikeAndComment = true;
                }
            } else {
                $hideLikeAndComment = true;
            }
        } else {
            $hideLikeAndComment = true;
        }

        

        $feed['items'] = array(
            'action' => $data['Activity']['action'],
            'id' => $data['Activity']['id'],
            'modified' => $data['Activity']['modified'],
            'published' => $data['Activity']['created'],
            'modifiedTranslated' => $this->Moo->getTime($data['Activity']['modified'], Configure::read('core.date_format'), $utz),
            'publishedTranslated' => $this->Moo->getTime($data['Activity']['created'], Configure::read('core.date_format'), $utz),
            'hideLikeAndComment' => $hideLikeAndComment,
            'share' => $data['Activity']['privacy'] == PRIVACY_ME ? false : $data['Activity']['share'],
            'privacy' => $data['Activity']['privacy'],
            'likeCount' => ($data['Activity']['params'] == 'item' && isset($object[$name]['like_count'])) ? $object[$name]['like_count'] : $data['Activity']['like_count'],
            'dislikeCount' => ($data['Activity']['params'] == 'item' && isset($object[$name]['dislike_count'])) ? $object[$name]['dislike_count'] : $data['Activity']['dislike_count'],
            'commentCount' => $commentCount,
            'actor' => $this->getUser($data['User']),
            'title' => $title,
            'titleHtml' => isset($titleHtml) ? $titleHtml : '',
            'type' => $type,
            'objects' => $items,
            'target' => $target,
        );
        $actionStr = $data['Activity']['action'] . "-end";
        if (strpos($actionStr, "_share-end") !== false && strpos($actionStr, "item_detail_share-end") === false) {
            $feed['items'] = array_merge($feed['items'], $this->exportActivityShare($data, $actorHtml));
        } else {
            $event = new CakeEvent("ApiHelper.renderAFeed." . $data['Activity']['action'], $this, array(
                'data' => $data,
                'actorHtml' => $actorHtml,
                'fullbaseUrl' => FULL_BASE_URL,
            ));
            $this->getEventManager()->dispatch($event);
            $result = $event->result['result'];
            if (!$result) {
                CakeLog::write('Api', 'Can not get an activity from calling event ' . "ApiHelper.renderAFeed." . $data['Activity']['action']);
            } else {
                $feed['items'] = array_merge($feed['items'], $result);
            }
        }

        list($tagUser, $content, $contentHtml) = $this->getContentAndTagUser($data);
        $feed['items']['objects'] = array_merge($feed['items']['objects'], array(
            'content' => $content,
            'contentHtml' => $contentHtml,
            'tagUser' => $tagUser,
        ));

//if(!empty($data['Activity']['item_type'])){
//$feed['items']['objects']['type']=$data['Activity']['item_type'];
//}
        $feed['items']['isViewerLiked'] = $feed['items']['isViewerDisliked'] = false;

        if ($data['Activity']['params'] == 'item' && (isset($object[$name]['like_count']))) {

            if (!empty($uid) && !empty($data['Likes'][$uid])) {
                $feed['items']['isViewerLiked'] = true;
            }

            if (!empty($uid) && isset($data['Likes'][$uid]) && $data['Likes'][$uid] == 0) {
                $feed['items']['isViewerDisliked'] = true;
            }
        } else {

            if (!empty($uid) && !empty($likesExt['activity_likes'][$data['Activity']['id']])) {
                $feed['items']['isViewerLiked'] = true;
            }

            if (!empty($uid) && isset($likesExt['activity_likes'][$data['Activity']['id']]) && $likesExt['activity_likes'][$data['Activity']['id']] == 0) {
                $feed['items']['isViewerDisliked'] = true;
            }
        }
        $feed['items']['isHideDislike']= Configure::read('core.hide_dislike') ? true : false ;
        if (isset($data['PhotoComment'][0])) {
            $feed['items']['comment'] = array(
                'id' => $data['PhotoComment'][0]['Comment']['id'],
                'target_id' => $data['PhotoComment'][0]['Comment']['target_id'],
                'type' => $data['PhotoComment'][0]['Comment']['type'],
                'message' => nl2br($this->Moo->parseSmilies($data['PhotoComment'][0]['Comment']['message'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false),array('no_replace_ssl' => 1)))),
                'created' => $data['PhotoComment'][0]['Comment']['created'],
                'createdTranslated' => $this->Moo->getTime($data['PhotoComment'][0]['Comment']['created'], Configure::read('core.date_format'), $utz),
            );
            if (!empty($data['PhotoComment'][0]['Comment']['thumbnail'])) {
                $feed['items']['comment']['thumbnail'] = $this->Moo->getImageUrl(array($data['PhotoComment'][0]['Comment']), array('prefix' => '200'));
            }

            $feed['items']['comment']['user'] = $this->getUser($data['PhotoComment'][0]['User']);
        }

        if (isset($data['ActivityComment'][0])) {
            $feed['items']['comment'] = array(
                'id' => $data['ActivityComment'][0]['id'],
                'target_id' => $data['ActivityComment'][0]['activity_id'],
                'type' => 'Activity',
                'message' => nl2br($this->Moo->parseSmilies($data['ActivityComment'][0]['comment'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false),array('no_replace_ssl' => 1)))),
                'created' => $data['ActivityComment'][0]['created'],
                'createdTranslated' => $this->Moo->getTime($data['ActivityComment'][0]['created'], Configure::read('core.date_format'), $utz),
            );
            if (!empty($data['ActivityComment'][0]['thumbnail'])) {
                $feed['items']['comment']['thumbnail'] = $this->Moo->getImageUrl(array('ActivityComment' => $data['ActivityComment'][0]), array('prefix' => '200'));
            }

            $feed['items']['comment']['user'] = $this->getUser($data['ActivityComment'][0]['User']);
        }

        if (isset($data['ItemComment'][0])) {
            $feed['items']['comment'] = array(
                'id' => $data['ItemComment'][0]['Comment']['id'],
                'target_id' => $data['ItemComment'][0]['Comment']['target_id'],
                'type' => $data['ItemComment'][0]['Comment']['type'],
                'message' => nl2br($this->Moo->parseSmilies($data['ItemComment'][0]['Comment']['message'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false),array('no_replace_ssl' => 1)))),
                'created' => $data['ItemComment'][0]['Comment']['created'],
                'createdTranslated' => $this->Moo->getTime($data['ItemComment'][0]['Comment']['created'], Configure::read('core.date_format'), $utz),
            );
            if (!empty($data['ActivityComment'][0]['thumbnail'])) {
                $feed['items']['comment']['thumbnail'] = $this->Moo->getImageUrl(array('ActivityComment' => $data['ActivityComment'][0]), array('prefix' => '200'));
            }

            $feed['items']['comment']['user'] = $this->getUser($data['ItemComment'][0]['User']);
        }
        return $feed;
    }

    function convertToObject($type, $data, $that) {
        switch ($type) {
            case 'user':
            case 'blog':
            case 'album':
            case 'photo':
            case 'video':
            case 'topic':
            case 'group':
            case 'event':
                return array(
                    'url' => FULL_BASE_URL . $that->Html->url(array(
                        'plugin' => false,
                        'controller' => 'events',
                        'action' => 'view',
                        $data['Event']['id'],
                        seoUrl($data['Event']['title']),
                    )),
                    'title' => h($data['Event']['moo_title']),
                    'private' => $data['Event']['type'],
                    'privateTranslated' => ($data['Event']['type'] == PRIVACY_PUBLIC) ? __('Public') : __('Private'),
                    'id' => $data['Event']['id'],
                    'image' => $that->Event->getImage($data, array()),
                    'from' => $data['Event']['from'],
                    'from_time' => $data['Event']['from_time'],
                    'to' => $data['Event']['to'],
                    'to_time' => $data['Event']['to_time'],
                    'timeTranslated' => $that->Time->event_format($data['Event']['from'], '%B %d, %Y') . ' ' . $data['Event']['from_time'] . ' - ' . $that->Time->event_format($data['Event']['to'], '%B %d, %Y') . ' ' . $data['Event']['to_time'],
                    'timezone' => $data['Event']['timezone'],
                    'location' => h($data['Event']['location']),
                    'address' => h($data['Event']['address']),
                    'category' => array(
                        'id' => $data['Event']['category_id'],
                        'name' => $data['Category']['name']
                    ),
                    'created_by' => $data['User']['id'],
                    'info' => $that->Moo->cleanHtml($that->Text->convert_clickable_links_for_hashtags($data['Event']['description'], Configure::read('Event.event_hashtag_enabled'))),
                );
            default:
                return array();
        }
    }

    function exportActivityShare($data, $actorHtml) {
        $objects = $target2 = $target = $tagUser = $title = $titleHtml = $activityMore = '';
        if (isset($data['Activity']['parent_id']) && $data['Activity']['parent_id']) {

            $activityModel = MooCore::getInstance()->getModel('Activity');
            $parentFeed = $activityModel->findById($data['Activity']['parent_id']);

            $title = __("shared %s's post", $parentFeed['User']['name']);
            $titleHtml = $actorHtml . ' ' . __("shared %s's post", $this->Html->link($parentFeed['User']['name'], FULL_BASE_URL . $parentFeed['User']['moo_href']));
            $target = array(
                'url' => $parentFeed['User']['moo_href'],
                'id' => $parentFeed['User']['id'],
                'name' => $parentFeed['User']['name'],
                'type' => 'User',
            );
            //$target = array_merge($target, $this->renderAFeed($parentFeed));
            $objects = $this->renderAFeed($parentFeed);
        }
        $type = 'share';
        if ($data['Activity']['target_id']) {
            $subject = MooCore::getInstance()->getItemByType($data['Activity']['type'], $data['Activity']['target_id']);
            list(, $name) = mooPluginSplit($data['Activity']['type']);
            $show_subject = MooCore::getInstance()->checkShowSubjectActivity($subject);

            if ($show_subject) {
                $type = 'share_user';
                $title .= ' > ' . $subject[$name]['moo_title'];
                //$titleHtml .= $actorHtml . ' > ' . $this->Html->link($subject[$name]['moo_title'], FULL_BASE_URL . $subject[$name]['moo_href']);
                $titleHtml .= ' > ' . $this->Html->link($subject[$name]['moo_title'], FULL_BASE_URL . $subject[$name]['moo_href']);
                $target2 = array(
                    'url' => $subject[$name]['moo_href'],
                    'id' => $subject[$name]['id'],
                    'name' => $subject[$name]['name'],
                    'type' => $subject[$name]['moo_plugin'] ? $subject[$name]['moo_plugin'] : $subject[$name]['moo_type'],
                );
                $target = array_merge($target, $target2);
                $activityMore = array(
                    'user_url' => FULL_BASE_URL . $parentFeed['User']['moo_href'],
                    'user_id' => $parentFeed['User']['id'],
                    'user_name' => $parentFeed['User']['name'],
                );
            }
        }
        $activityText = $data['Activity']['content'];
        $activityTextHtml = $data['Activity']['content'];
        if (!empty($data['UserTagging']['users_taggings'])) :
            $activityText = $data['Activity']['content'] . $this->MooPeople->getWithNotUrl($data['UserTagging']['id'], $data['UserTagging']['users_taggings'], false);
            $activityTextHtml = $data['Activity']['content'] . $this->MooPeople->with($data['UserTagging']['id'], $data['UserTagging']['users_taggings'], false);
            $tagUser = $this->MooPeople->getUserTagged($data['UserTagging']['users_taggings']);
        endif;



        $items = array(
            'type' => 'share',
            'title' => $title,
            'titleHtml' => $titleHtml,
            'objects' => $objects['items'],
            'content' => $activityText,
            'contentHtml' => $activityTextHtml,
            'tagUser' => $tagUser,
            'target' => $target,
        );
        if ($type == 'share_user')
            $items = array_merge($items, $activityMore);
        return $items;
    }

    function getActivityTarget($data, $actorHtml, $titlePrivate = false) {
        $title = $target = array();
        if ($data['Activity']['target_id']) {
            $subject = MooCore::getInstance()->getItemByType($data['Activity']['type'], $data['Activity']['target_id']);
            list(, $name) = mooPluginSplit($data['Activity']['type']);
            $show_subject = MooCore::getInstance()->checkShowSubjectActivity($subject);
            if ($show_subject) {
                if ($titlePrivate) {
                    $title = array(
                        'url' => $subject[$name]['moo_href'],
                        'title' => ' > ' . h($subject[$name]['moo_title']),
                        'titleHtml' => ' > ' . $this->Html->link(h($subject[$name]['moo_title']), FULL_BASE_URL . $subject[$name]['moo_href']),
                    );
                } else {
                    $title = array(
                        'url' => $subject[$name]['moo_href'],
                        'title' => $data['User']['name'] . ' > ' . h($subject[$name]['moo_title']),
                        'titleHtml' => $actorHtml . ' > ' . $this->Html->link(h($subject[$name]['moo_title']), FULL_BASE_URL . $subject[$name]['moo_href']),
                    );
                }
                $target = array(
                    'url' => $subject[$name]['moo_href'],
                    'id' => $subject[$name]['id'],
                    'name' => $subject[$name]['moo_title'],
                    'type' => $subject[$name]['moo_plugin'],
                );
            }
        }
        return array($title, $target);
    }

    function getImages($ids) {
        $photoModel = MooCore::getInstance()->getModel('Photo_Photo');
//$photos_total = $photoModel->find('all', array('conditions' => array('Photo.id' => $ids)));
        $photos = $photoModel->find('all', array('conditions' => array('Photo.id' => $ids),
                //'limit' => 4
        ));

        $imageArray = array();
        $photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
        $i = 0;
        foreach ($photos as $photo) {
            $imageArray[$i]['idPhoto'] = $photo['Photo']['id'];
            $imageArray[$i]['idAlbum'] = $photo['Album']['id'];
            $imageArray[$i]['type'] = $photo['Photo']['type'];
            $imageArray[$i]['albumType'] = $photo['Photo']['album_type'] == '' ? 'Photo_Album' : $photo['Photo']['album_type'];
            $imageArray[$i]['albumTypeId'] = $photo['Photo']['album_type'] == '' ? $photo['Photo']['target_id'] : $photo['Photo']['album_type_id'];

            foreach ($photoSizes as $size) {
                $imageArray[$i][$size] = $this->Photo->getImage($photo, array('prefix' => $size));
            }
            $i++;
        }
        return $imageArray;
    }

    function getContentAndTagUser($data) {
        $content = $data['Activity']['content'];
        $contentHtml = nl2br($this->Moo->parseSmilies($this->Text->autoLink($data['Activity']['content'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false), array('no_replace_ssl' => 1)))));
        $tagUser = array();
        if (!empty($data['UserTagging']['users_taggings'])) {
//$content = $data['Activity']['content'] . $this->MooPeople->getWithNotUrl($data['UserTagging']['id'], $data['UserTagging']['users_taggings'], false);
//$contentHtml = $data['Activity']['content'] . $this->MooPeople->with($data['UserTagging']['id'], $data['UserTagging']['users_taggings'], false);
            $content = array();
            $content = $data['Activity']['content'] . $this->MooPeople->getWithNotUrl($data['UserTagging']['id'], $data['UserTagging']['users_taggings'], false);
            $contentHtml = nl2br($this->Moo->parseSmilies($this->Text->autoLink($data['Activity']['content'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false), array('no_replace_ssl' => 1))))) . $this->MooPeople->with($data['UserTagging']['id'], $data['UserTagging']['users_taggings'], false);
            $tagUser = $this->MooPeople->getUserTagged($data['UserTagging']['users_taggings']);
        }
        return array($tagUser, $content, $contentHtml);
    }

    function getUser($data) {
        return array(
            'url' => FULL_BASE_URL . $data['moo_href'],
            'type' => $data['moo_type'],
            'id' => $data['id'],
            'image' => array(
                '50_square' => $this->Moo->getItemPhoto(array('User' => $data), array('prefix' => '50_square'), array(), true),
                '100_square' => $this->Moo->getItemPhoto(array('User' => $data), array('prefix' => '100_square'), array(), true),
                '200_square' => $this->Moo->getItemPhoto(array('User' => $data), array('prefix' => '200_square'), array(), true),
                '600' => $this->Moo->getItemPhoto(array('User' => $data), array('prefix' => '600'), array(), true),
                "type" => "Link",
                "mediaType" => "image/jpeg",
            ),
            'name' => $data['name'],
        );
    }

}
