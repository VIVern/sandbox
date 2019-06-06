<?php

require_once '../vendor/autoload.php';

ini_set('display_errors', 1);

$redis = new Predis\Client(
    [
        "scheme" => "tcp",
        "host" => "personal-redis-001.bz4f4a.0001.use2.cache.amazonaws.com",
        "port" => 6379,
    ]
);
echo "Connected to Redis\n";

$redis->set("FromPHP", "this record set from php");
echo $redis->get("test") . "\n";
echo $redis->get("FromPHP") . "\n";