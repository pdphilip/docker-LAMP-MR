<?php
   //Connecting to Redis server on localhost
   $redis = new Redis();
   $redis->connect(getenv(REDIS_HOST), 6379);
   echo "Connection to server sucessfully";
   //check whether server is running or not
   echo "Server is running: ".$redis->ping();
