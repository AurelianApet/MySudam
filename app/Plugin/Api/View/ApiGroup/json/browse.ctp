<?php
$groupHelper = MooCore::getInstance()->getHelper('Group_Group');
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
if (empty($groups)) {
    throw new ApiNotFoundException(__d('api', 'Group not found'));
}
else {//echo '<pre>';print_r($groups);die;
    foreach ($groups as $group):
        $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $groupHelper->getImage($group, array('prefix' => $size));
        }
        $groupArray[] = array(
            'id' => $group['Group']['id'],
            'name' => h($group['Group']['name']),
            'url' => FULL_BASE_URL .  $group['Group']['moo_href'],
            'memberCount' => $group['Group']['group_user_count'],
            'description' => $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''), $group['Group']['description'])), 200, array('exact' => false)), Configure::read('Group.group_hashtag_enabled')) ,
            'thumbnail' => $imageArray,
            'privacy' => $group['Group']['moo_privacy'],
            'published' => h($group['Group']['created']),
            'publishedTranslated' => $this->Moo->getTime($group['Group']['created'], Configure::read('core.date_format'), $utz),
        );
    endforeach;
    echo json_encode($groupArray);
}