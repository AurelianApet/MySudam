<?php
if (empty($event)) {
    throw new ApiNotFoundException(__d('api', 'Event not found'));
}
else {
    $eventHelper = MooCore::getInstance()->getHelper('Event_Event');
    $photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
    $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $eventHelper->getImage($event, array('prefix' => $size));
        }
        $eventArray = array(
            'id' => $event['Event']['id'],
            'title' => h($event['Event']['title']),
            'type' => $event['Event']['moo_type'],
            'thumbnail' => $imageArray,
            'description' => $event['Event']['description'],
            'eventDate' => $event['Event']['from'],
            'privacy' => $event['Event']['type'],
            'totalAttending' => $event['Event']['event_rsvp_count'],
            'fromDate' => $event['Event']['from'],
            'fromTime' => $this->Time->event_format($event['Event']['from'], '%B %d, %Y') .  $event['Event']['from_time'],
            'fromTimeFormat' => $this->Time->event_format($event['Event']['from'], '%b %d'),
            'toTime' => $this->Time->event_format($event['Event']['to'], '%B %d, %Y') .  $event['Event']['to_time'],
            'toTimeFormat' => $this->Time->event_format($event['Event']['to'], '%b %d'),
            'toDate' => $event['Event']['to'],
            'location' => h($event['Event']['location']),
            'address' => h($event['Event']['address']),
            'categoryId' => $event['Category']['id'],
            'categoryName' => $event['Category']['name'],
            'createName' => $event['User']['name'],
            'createId' => $event['User']['id'],
            'url' => FULL_BASE_URL .  $event['Event']['moo_href'],
            'shareAction' => "event_item_detail",
        );
    echo json_encode($eventArray);
}