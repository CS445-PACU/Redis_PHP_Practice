<?php
  require_once('redisConn.php');
  require_once('redisQueueKey.php');
  $redis = connRedisLocal();

  $counter = 0;
  //while( true )
  // LPUSH to $queueKey
  // sleep(2)

?>