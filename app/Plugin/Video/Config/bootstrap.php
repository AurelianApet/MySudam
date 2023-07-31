<?php

Cache::config('video', array('engine' => Configure::read('App.mooCacheEngine'), 'groups' => array('video')));

if (Configure::read('Video.video_enabled')) {
    App::uses('VideoListener', 'Video.Lib');
    App::uses('VideoApiListener', 'Video.Lib');
    CakeEventManager::instance()->attach(new VideoListener());
    CakeEventManager::instance()->attach(new VideoApiListener());

    MooSeo::getInstance()->addSitemapEntity("Video", array(
    	'video'
    ));
}