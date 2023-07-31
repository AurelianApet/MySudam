<?php
    $commentArray = array();
    if($type == 'activity') {
        if(!empty($data)) { 
            foreach ($data as $comment) {
                $isViewerLiked = $isViewerDisliked = false;
                foreach ($activity_likes as $like) {
                        if (isset($like['Like']) &&  $like['Like']['user_id'] == $uid && $like['Like']['target_id'] == $comment['ActivityComment']['id']  ){
                            $like['Like']['thumb_up'] == 1 ? $isViewerLiked = true : $isViewerDisliked = true;
                        }
                }
                $like = array (
                            'id' => $comment['ActivityComment']['id'] ,
                            'type' => 'core_activity_comment',
                            'isViewerLiked' => $isViewerLiked,
                            'isViewerDisliked' => $isViewerDisliked,
                );
                $imageArray = array();
                $imageArray = array(
                    '50_square' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '50_square'), array(), true),
                    '100_square' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '100_square'), array(), true),
                    '200_square' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '200_square'), array(), true),
                    '600' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '600'), array(), true),
                );
                    $commentArray[] = array (
                                'id' => $comment['ActivityComment']['id'],
                                'userId' => $comment['ActivityComment']['user_id'],
                                'userName' => $comment['User']['name'],
                                'userAvatar' => $imageArray,
                                'userUrl' => FULL_BASE_URL . $comment['User']['moo_href'],
                                'edited' => $comment['ActivityComment']['edited'],
                                //'message' => $comment['ActivityComment']['comment'],
                                'message' => nl2br($this->Moo->parseSmilies($this->Text->autoLink($comment['ActivityComment']['comment'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false),array('no_replace_ssl' => 1))))),
                                'likeCount' => $comment['ActivityComment']['like_count'],
                                'dislikeCount' => $comment['ActivityComment']['dislike_count'],
                                'published' => $comment['ActivityComment']['created'],
                                'publishedTranslated' => $this->Moo->getTime($comment['ActivityComment']['created'], Configure::read('core.date_format'), $utz),
                                'thumnails' => $comment['ActivityComment']['thumbnail'] ? array (
                                     '200' => $this->Moo->getItemPhoto(array('ActivityComment'=>$comment['ActivityComment']), array('prefix' => '200'),array(),true),
                                     'default' =>  $this->Moo->getItemPhoto(array('ActivityComment'=>$comment['ActivityComment']), array(),array(),true) ,
                                    ): '' ,
                                'likeObject' => $like,
                            );
            }
        } 
    }    
    else {
        if(empty($data) || !isset($data)){
            throw new ApiNotFoundException(__d('api', 'comment not found'));
        }
        else {
            foreach ($data['comments'] as $comment){
                $isViewerLiked = $isViewerDisliked = false;

                if (isset( $data['comment_likes'][$comment['Comment']['id']] ) ) {
                    $data['comment_likes'][$comment['Comment']['id']] == 1 ? $isViewerLiked = true : $isViewerDisliked = true;
                }
                $like = array (
                                'id' => $comment['Comment']['id'] ,
                                'type' => 'comment',
                                'isViewerLiked' => $isViewerLiked,
                                'isViewerDisliked' => $isViewerDisliked,
                    );
                $imageArray = array();
                $imageArray = array(
                        '50_square' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '50_square'), array(), true),
                        '100_square' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '100_square'), array(), true),
                        '200_square' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '200_square'), array(), true),
                        '600' => $this->Moo->getItemPhoto(array('User' => $comment['User']), array('prefix' => '600'), array(), true),
                );
                $commentArray[] = array (
                        'id' => $comment['Comment']['id'],
                        'userId' => $comment['Comment']['user_id'],
                        'userName' => $comment['User']['name'],
                        'userAvatar' => $imageArray,
                        'userUrl' => FULL_BASE_URL . $comment['User']['moo_href'],
                        'edited' => $comment['Comment']['edited'],
                        'message' => nl2br($this->Moo->parseSmilies($this->Text->autoLink($comment['Comment']['message'], array_merge(array('target' => '_blank', 'rel' => 'nofollow', 'escape' => false),array('no_replace_ssl' => 1))))),
                        'likeCount' => $comment['Comment']['like_count'],
                        'dislikeCount' => $comment['Comment']['dislike_count'],
                        'published' => $comment['Comment']['created'],
                        'publishedTranslated' => $this->Moo->getTime($comment['Comment']['created'], Configure::read('core.date_format'), $utz),
                        'thumnails' => $comment['Comment']['thumbnail'] ? array (
                                    '200' => $this->Moo->getItemPhoto(array('Comment'=>$comment['Comment']), array('prefix' => '200'),array(),true),
                                    'default' =>  $this->Moo->getItemPhoto(array('Comment'=>$comment['Comment']), array(),array(),true) ,
                            ): '' ,
                        'likeObject' => $like,
                    );
            };    
        }
    };
if(empty($commentArray)){
    throw new ApiNotFoundException(__d('api', 'Comment not found'));
}
echo json_encode($commentArray);