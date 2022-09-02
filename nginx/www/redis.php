<?php
   //连接本地的 Redis 服务
   $redis = new Redis();
   $redis->connect("redis", 6379);
   $redis->auth("123456");
   echo "Connection to server sucessfully";
   //设置 redis 字符串数据
   $redis->set("test", "this is test key");
   // 获取存储的数据并输出
   echo "Stored string in redis is " . $redis->get("test");

// $redis = new Redis();
// $redis->connect('127.0.0.1', 6379);
// // $redis->auth('123456');
// $redis->set('test','hello world!');
// echo $redis->get('test');