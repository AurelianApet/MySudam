<?php

/*
 * Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */
App::uses('CakeEvent', 'Event');
class UserFollow extends AppModel
{
    public $belongsTo = array( 'User'  =>
            array('className' => 'User',
                'className' => 'User',
                'foreignKey' => 'user_follow_id')
    );

    public function add($user_id,$user_follow_id)
    {
        $row = $this->find('first',array('conditions'=>array(
            'UserFollow.user_id' => $user_id,
            'UserFollow.user_follow_id' => $user_follow_id
        )));

        if (!$row)
        {
            $this->clear();
            $this->save(array(
                'user_id' => $user_id,
                'user_follow_id' => $user_follow_id
            ));
        }
    }

    public function checkFollow($user_id,$user_follow_id)
    {
        return $this->find('first',array('conditions'=>array(
            'UserFollow.user_id' => $user_id,
            'UserFollow.user_follow_id' => $user_follow_id
        )));
    }

    public function getFollowerCount($id)
    {
        $followers = $this->find('all', array(
            'conditions'    => array('UserFollow.user_id' => $id),
        )	);
        foreach($followers as $follow)
        {
            if($follow['UserFollow']['user_follow_id'] == $id)
            {
                return count($followers) - 1;
            }
        }
        return count($followers);
    }

    public function getFollowingCount($id)
    {
        $followings = $this->find('all', array(
            'conditions'    => array('UserFollow.user_follow_id' => $id),
        )	);
        foreach($followings as $follow)
        {
            if($follow['UserFollow']['user_id'] == $id)
            {
                return count($followings) - 1;
            }
        }
        return count($followings);
    }

    public function getFollowers($id, $page, $limit = PROFILE_BLOG_USERS)
    {
        $followers = $this->find('all', array(
            'conditions'    => array('UserFollow.user_id' => $id),
            'limit' 		=> $limit,
            'page'  		=> $page,
            'order' 		=> 'UserFollow.user_follow_id asc'
        )	);
        return $followers;
    }

    public function getFollowings($id, $page, $limit = PROFILE_BLOG_USERS)
    {
        $followings = $this->find('all', array(
            'conditions'    => array('UserFollow.user_follow_id' => $id),
            'limit' 		=> $limit,
            'page'  		=> $page,
            'order' 		=> 'UserFollow.user_id asc'
        )	);
        return $followings;
    }
}
 