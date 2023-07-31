<?php
$groupHelper = MooCore::getInstance()->getHelper('Group_Group');
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
if (empty($group)) { 
    throw new ApiNotFoundException(__d('api', 'Group not found'));
}
else { 
    if ($group['Group']['type'] != PRIVACY_PRIVATE || (!empty($cuser) && $cuser['Role']['is_admin'] ) ||
                    (!empty($my_status) && ( $my_status['GroupUser']['status'] == GROUP_USER_MEMBER || $my_status['GroupUser']['status'] == GROUP_USER_ADMIN ) )
            ) {
        $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $groupHelper->getImage($group, array('prefix' => $size));
        }
                $groupArray = array(
                    'id' => $group['Group']['id'],
                    'name' => h($group['Group']['name']),
                    'published' => h($group['Group']['created']),
                    'publishedTranslated' => $this->Moo->getTime($group['Group']['created'], Configure::read('core.date_format'), $utz),
                    'description' => $this->Moo->cleanHtml($this->Text->convert_clickable_links_for_hashtags( $group['Group']['description'] , Configure::read('Group.group_hashtag_enabled'))),
                    'thumbnail' => $imageArray,
                    'featured' => $group['Group']['featured'],
                    'groupUserCount' => $group['Group']['group_user_count'],
                    'categoryId' => $group['Group']['category_id'],
                    'categoryName' => $group['Category']['name'],
                    'privacy' => $group['Group']['type'],
                    'joinRequest' => isset($request_count) ? $request_count : '' ,
                    'photoCount' => $group['Group']['photo_count'],
                    'topicCount' => $group['Group']['topic_count'],
                    'videoCount' => $group['Group']['video_count'],
                    'userCreateId' => $group['Group']['user_id'],
                    'userCreateName' => $group['User']['name'],
                    'shareAction' => "group_item_detail",
                    'type' => $group['Group']['moo_type'],
                );
            }
            else {
                $groupArray = array(
                    'id' => $group['Group']['id'],
                    'name' => h($group['Group']['name']),
                    'categoryId' => $group['Group']['category_id'],
                    'categoryName' => $group['Category']['name'],
                    'privacy' => $group['Group']['type'],
                );            
            }
    echo json_encode($groupArray);
}