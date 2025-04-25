<?php
$heading = "NodeMCU V3 ESP8266 / ESP12E with MYSQL Database";

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'History';

$users = $db->query('SELECT * from user_info')->fetchAll();

require 'views/History.php';
