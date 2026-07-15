<?php
// Connect MySQL
$mysql = new mysqli("mysql", "root", "secret123", "devdb"); // was "my-mysql"

// Connect Redis  
$redis = new Redis();
$redis->connect("redis", 6379); // was "my-redis"

echo "<h1>Hello from Docker Full Stack! 🚀</h1>";
echo "<p>MySQL Status: " . ($mysql->connect_error ? "Failed: " . $mysql->connect_error : "Connected") . "</p>";
echo "<p>Redis Status: " . ($redis->ping() ? "Connected" : "Failed") . "</p>";

$redis->set("visits", $redis->get("visits") + 1);
echo "<p>This page has been visited: " . $redis->get("visits") . " times</p>";
?>