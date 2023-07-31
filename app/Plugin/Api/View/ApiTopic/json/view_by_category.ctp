<?php
$topicHelper = MooCore::getInstance()->getHelper('Topic_Topic');
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
if (empty($topics)) {
    throw new ApiNotFoundException(__d('api', 'Topic not found'));
}
else {
    foreach ($topics as $topic):
        $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $topicHelper->getImage($topic, array('prefix' => $size));
        }
        $topicArray[] = array(
            'id' => $topic['Topic']['id'],
            'title' => h($topic['Topic']['title']),
            'body' => $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''), $topic['Topic']['body'])), 200, array('eclipse' => '')), Configure::read('Topic.topic_hashtag_enabled')),
            'thumbnail' => $imageArray,
            'categoryId' => $topic['Topic']['category_id'],
            'commentCount' => $topic['Topic']['comment_count'],
            'shareCount' => $topic['Topic']['share_count'],
            'likeCount' => $topic['Topic']['like_count'],
            'dislikeCount' => $topic['Topic']['dislike_count'],
            'userId' => $topic['Topic']['user_id'],
            'userName' => $topic['User']['name'],
            'url' => FULL_BASE_URL .  $topic['Topic']['moo_href'],
            'created' => $this->Moo->getTime($topic['Topic']['created'], Configure::read('core.date_format'), $utz),
        );
    endforeach;
    echo json_encode($topicArray);
}