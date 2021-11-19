<?php

  require_once('redisConn.php');
  
  function getAndPrint($redis, $key)
  {
    $value = $redis->get($key);

    print($key. " -> " . $value . "\n");
  
  } 


  $redis = connRedisLocal();
    
  print "Connected to Redis\n";


  // get a value
  $key = "CS445";


  // set a value

  // get a value

  // set a value
  $key = "CS445:db_counter";
  
  // incr a value

  // get a value

  $redis->del("CS445");
  $redis->del("CS445:db_counter");

?>
