<?php
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));

if (empty($blogs)) {
    throw new ApiNotFoundException(__d('api', 'Blog not found'));
}
else {
    foreach ($blogs as $blog):
        $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $blogHelper->getImage($blog, array('prefix' => $size));
        }
        $blogArray[] = array(
            'id' => $blog['Blog']['id'],
            'title' => h($blog['Blog']['title']),
            'body' => $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''), $blog['Blog']['body'])), 200, array('eclipse' => '')), Configure::read('Blog.blog_hashtag_enabled')),
            'thumbnail' => $imageArray,
            'privacy' => $blog['Blog']['privacy'],
            'categoryId' => $blog['Blog']['category_id'],
            'commentCount' => $blog['Blog']['comment_count'],
            'shareCount' => $blog['Blog']['share_count'],
            'likeCount' => $blog['Blog']['like_count'],
            'dislikeCount' => $blog['Blog']['dislike_count'],
            'userId' => $blog['Blog']['user_id'],
            'userName' => $blog['User']['name'],
            'userUrl' => FULL_BASE_URL . $blog['User']['moo_href'],
            'type' => $blog['Blog']['moo_type'],
            'url' => FULL_BASE_URL .  $blog['Blog']['moo_href'],
            'published' => h($blog['Blog']['created']),
            'publishedTranslated' => $this->Moo->getTime($blog['Blog']['created'], Configure::read('core.date_format'), $utz),
        );
    endforeach;
    echo json_encode($blogArray);
}