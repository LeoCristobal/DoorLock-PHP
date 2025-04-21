<?php
$heading = 'Edit User';
require_once 'Database.php';
$config = require('config.php');
$db = new Database($config['database']);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if necessary POST data is set
    if (isset($_POST['user_id'], $_POST['id'], $_POST['name'], $_POST['gender'], $_POST['email'], $_POST['mobile'])) {
        // Prepare the query to update user data
        $db->query('UPDATE user_info SET 
                    id = :id, 
                    name = :name, 
                    gender = :gender, 
                    email = :email, 
                    mobile = :mobile
                    WHERE user_id = :user_id', [
                        'id' => $_POST['id'],       // Make sure the 'id' key exists in $_POST
                        'name' => $_POST['name'],
                        'gender' => $_POST['gender'],
                        'email' => $_POST['email'],
                        'mobile' => $_POST['mobile'],
                        'user_id' => $_POST['user_id']
                    ]);
        // Redirect after update
        header('Location: /UserData'); // or wherever you want to redirect after edit
        exit;
    } else {
        // If POST data is not set, handle it (could show an error, etc.)
        echo "Error: Missing data!";
        exit;
    }
}

// Get the user to be edited
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $users = $db->query('SELECT * FROM user_info WHERE user_id = :user_id', [
        'user_id' => $user_id
    ])->fetchAll();

    // If no user is found, handle it (could show an error, etc.)
    if (empty($users)) {
        echo "Error: User not found!";
        exit;
    }
} else {
    echo "Error: User ID not provided!";
    exit;
}

require 'views/edit.php';  // This should be the view where the user data is displayed for editing
