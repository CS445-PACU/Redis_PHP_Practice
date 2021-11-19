<?php
  require_once('redisConn.php');
  require_once('redisChannelKey.php');

  $redis = connRedisLocal();

  // get name from command line args
  $myName = $argv[1];

  
  $counter = 0;
  //while( true )
  // "MESSAGE $myName $counter
  // publish messge to $channelKey
  // sleep(2)
  

  // BONUS
  // create associative array
  //  $jsonMsg['sender'] = $myName;
  //  $jsonMsg['data'] = $msg;

  // encode array into json
  // publish json to $channelKey."json"
  // sleep(2);  


?>