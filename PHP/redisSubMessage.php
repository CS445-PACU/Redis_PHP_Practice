<?php

require_once('redisConn.php');
  require_once('redisChannelKey.php');

  $redis = connRedisLocal();

  // enable pubSubLoop
  // use pubSubLoop to subscribe to $channelKey
  // BONUS use pubSubLoop to also subscribe to $channelKey."json"

 
  // listen for new messages!
  //foreach ($pubsub as $message) {
    // print the $message->kind, ->channel, ->payload
    
    // BONUS determine if the message is json
    // then decode json and print object.


?>