<?php
  require_once('redisConn.php');

  $redis = connRedisLocal();

  $myName = $argv[1];

  $queueKey = "CS445:MSG_PUB";

  $redis->del($queueKey);

  $counter = 0;
  while( true )
  {
    $msg = "MESSAGE:".$myName.":".$counter;
    $redis->publish($queueKey, $msg);
    print("PUBLISH: ". $msg. "\n");
    $counter += 1;

    
    $jsonMsg['sender'] = $myName;
    $jsonMsg['data'] = $msg;

    $jsonData = json_encode ($jsonMsg);

    $redis->publish($queueKey, $jsonData);
    
    sleep(2);  
  }


?>