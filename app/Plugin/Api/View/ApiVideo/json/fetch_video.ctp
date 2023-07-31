<?php
if (empty($video)) {
    throw new ApiNotFoundException(__d('api', 'Video not found'));
}
else {
    $videoArray = array(
        'source' => $video['Video']['source'],
        'sourceId' => $video['Video']['source_id'],
        'title' => $video['Video']['title'],
        'description' => $video['Video']['description'],
        'thumb' => $video['Video']['thumb'],
        'privacy' => $video['Video']['privacy'],
    );
    echo json_encode($videoArray);
}