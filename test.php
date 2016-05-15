<?php
$redis=new Redis();
if(!$redis->connect('127.0.0.1',6379)){
	echo "11";
}
var_dump($redis->hExists('user',md5('魏玉婷')));
$array=array(12,34,65,'XASDASD');
$redis->hset('user',md5('魏玉婷'),json_encode($array));
echo $redis->hget('user',md5('魏玉婷'));