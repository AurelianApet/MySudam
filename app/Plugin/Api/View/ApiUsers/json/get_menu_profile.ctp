<?php
$cuser = MooCore::getInstance()->getViewer();
$data = array();
$data['info']['text'] =  __('Info');
$data['info']['icon'] =  'info';
$data['info']['url'] =  $this->request->base . '/users/ajax_info/'. $user['User']['id'];
$data['friend']['text'] =  __('Friends');
$data['friend']['icon'] =  'people';
$data['friend']['url'] =  $this->request->base . '/users/profile_user_friends/'. $user['User']['id'];
$data['friend']['cnt'] =  $user['User']['friend_count'];

if($cuser && ($uid == $user['User']['id'] || $cuser['Role']['is_admin'])):
    $blockModel = MooCore::getInstance()->getModel("UserBlock");
    $data['blocked']['text'] =  __('Blocked Members');
    $data['blocked']['icon'] =  'block';
    $data['blocked']['cnt'] =  $blockModel->find('count',array('conditions'=>array('UserBlock.user_id'=>$user['User']['id'])));
    $data['blocked']['url'] =  $this->request->base . '/users/profile_user_blocks/'. $user['User']['id'];                        	
 endif;
 if (Configure::read("core.enable_follow") && $uid && $uid == $user['User']['id']):
     $followModel = MooCore::getInstance()->getModel("UserFollow");
    $data['follow']['text'] =  __('Following');
    $data['follow']['icon'] =  'group';
    $data['follow']['url'] =  $this->request->base . '/follows/user_follows/'. $user['User']['id'];
    $data['follow']['cnt'] = $followModel->find('count',array('conditions'=>array('UserFollow.user_id'=>$uid)));
endif;

if (Configure::read('Photo.photo_enabled')): 
    $data['album']['text'] =  __('Albums');
    $data['album']['icon'] =  'collections';
    $data['album']['url'] =  $this->request->base . '/photos/profile_user_photo/'. $user['User']['id'];
    $data['album']['cnt'] = $albums_count;
 endif;
if (Configure::read('Blog.blog_enabled')):
    $data['blog']['text'] =  __('Blogs');
    $data['blog']['icon'] =  'library_books';
    $data['blog']['url'] =  $this->request->base . '/blogs/profile_user_blog/'. $user['User']['id'];
    $data['blog']['cnt'] = $user['User']['blog_count'];
endif;
if (Configure::read('Topic.topic_enabled')): 
    $data['topic']['text'] =  __('Topics');
    $data['topic']['icon'] =  'comment';
    $data['topic']['url'] =  $this->request->base . '/topics/profile_user_topic/'. $user['User']['id'];
    $data['topic']['cnt'] = $user['User']['topic_count'];
 endif;
 if (Configure::read('Video.video_enabled')): 
    $data['video']['text'] =  __('Videos');
    $data['video']['icon'] =  'videocam';
    $data['video']['url'] =  $this->request->base . '/videos/profile_user_video/'. $user['User']['id'];
    $data['video']['cnt'] = $user['User']['video_count'];
endif;
if (Configure::read('Group.group_enabled')):
    $data['group']['text'] =  __('Groups');
    $data['group']['icon'] =  'group_work';
    $data['group']['url'] =  $this->request->base . '/groups/profile_user_group/'. $user['User']['id'];
    $data['group']['cnt'] = $user['User']['group_count'];
endif;
if (Configure::read('Event.event_enabled')):
    $data['event']['text'] =  __('Events');
    $data['event']['icon'] =  'event';
    $data['event']['url'] =  $this->request->base . '/events/profile_user_event/'. $user['User']['id'];
    $data['event']['cnt'] = $user['User']['event_count'];
endif;    

$this->getEventManager()->dispatch(new CakeEvent('profile.api.afterRenderMenu', $this)); 
echo json_encode($data);
		
                            
