<?php

$config = require('config.php');
$db = new Database($config['database']);
$heading = "Registration";

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data (you might want to do this)
    
    
    // Prepare and execute the database query
    $db->query('INSERT INTO user_info(id, name, gender, email, mobile) VALUES(:id, :name, :gender, :email, :mobile)', [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'mobile' => $_POST['mobile']
    ]);
    
    // After successful query execution, you can redirect to another page (or to the same page with a success message)
    header('Location: /UserData');  // Replace with the correct redirect route
    exit;
}

// Show the registration form
require 'views/registration.php';

