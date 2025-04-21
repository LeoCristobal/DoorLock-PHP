<?php
$heading = 'Delete User';
require_once 'Database.php';
$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('DELETE FROM user_info WHERE user_id = :user_id', [
        'user_id' => $_POST['user_id']
    ]);
    header('Location: /UserData'); // or wherever you want to redirect after delete
    exit;
}

$user_id = $_GET['user_id'];
$users = $db->query('SELECT * from user_info WHERE user_id = :user_id', [
    'user_id' => $user_id
])->fetchAll();

require 'views/delete.php';

