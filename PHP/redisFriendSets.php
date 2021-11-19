<?php


  require_once('redisConn.php');

  $redis = connRedisLocal();

  $friendSetOneKey = "CS445:Person:1:Friends";
  $friendSetTwoKey = "CS445:Person:2:Friends";

  // del sets above
  $redis->del($friendSetOneKey);
  $redis->del($friendSetTwoKey);

  // add friends to each set

  // find the intersection of the sets
  // produces an array

  // print each item in the intersection
  // foreach ( $commonFriendArray as $friendID )
  

?>