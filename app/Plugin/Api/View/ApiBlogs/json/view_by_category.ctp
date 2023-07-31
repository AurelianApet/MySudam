<?php
$blogHelper = MooCore::getInstance()->getHelper('Blog_Blog');
if (empty($blogs)) {
    throw new ApiNotFoundException(__d('api', 'Blog not found'));
}
else {
    foreach ($blogs as $blog):
        $blogArray[] = array(
            'id' => $blog['Blog']['id'],
            'title' => h($blog['Blog']['title']),
            'body' => $this->Text->convert_clickable_links_for_hashtags($this->Text->truncate(strip_tags(str_replace(array('<br>','&nbsp;'), array(' ',''), $blog['Blog']['body'])), 200, array('eclipse' => '')), Configure::read('Blog.blog_hashtag_enabled')),
            'thumbnail' => $blogHelper->getImage($blog, array('prefix' => '150_square')),
            'privacy' => $blog['Blog']['privacy'],
            'categoryId' => $blog['Blog']['category_id'],
            'commentCount' => $blog['Blog']['comment_count'],
            'shareCount' => $blog['Blog']['share_count'],
            'likeCount' => $blog['Blog']['like_count'],
            'dislikeCount' => $blog['Blog']['dislike_count'],
            'userId' => $blog['Blog']['user_id'],
            'userName' => $blog['User']['name'],
        );
    endforeach;
    echo json_encode($blogArray);
}