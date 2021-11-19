<?php
 require "vendor/autoload.php";
 Predis\Autoloader::register();


 function connRedisLocal()
 {
    $redis = new Predis\Client(array(
      "scheme" => "tcp",
      "host" => "127.0.0.1",
      "port" => "6379"
      ));

    return $redis;
 }

?>