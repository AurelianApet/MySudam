<?php
$photoSizes = explode('|', Configure::read('core.photo_image_sizes'));
$eventHelper = MooCore::getInstance()->getHelper('Event_Event');
if (empty($events)) {
    throw new ApiNotFoundException(__d('api', 'Event not found'));
}
else {
    foreach ($events as $event):
        $imageArray = array();
        foreach ($photoSizes as $size) {
            $imageArray[$size] = $eventHelper->getImage($event, array('prefix' => $size));
        }
        $eventArray[] = array(
            'id' => $event['Event']['id'],
            'title' => h($event['Event']['title']),
            'thumbnail' => $imageArray,
            'eventDate' => $event['Event']['from'],
            'privacy' => $event['Event']['type'],
            'totalAttending' => $event['Event']['event_rsvp_count'],
            'fromTime' => $this->Time->event_format($event['Event']['from'], '%B %d, %Y') .  $event['Event']['from_time'],
            'fromTimeFormat' => $this->Time->event_format($event['Event']['from'], '%b %d'),
            'toTime' => $this->Time->event_format($event['Event']['to'], '%B %d, %Y') .  $event['Event']['to_time'],
            'toTimeFormat' => $this->Time->event_format($event['Event']['to'], '%b %d'),
            'location' => h($event['Event']['location']),
            'address' => h($event['Event']['address']),
            'url' => FULL_BASE_URL .  $event['Event']['moo_href'],
        );
    endforeach;
    echo json_encode($eventArray);
}