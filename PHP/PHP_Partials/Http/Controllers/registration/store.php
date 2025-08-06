<?php

use Core\App;
use Core\Authenticator;
use Core\DataBase;
use Core\Validator;

$email = $_POST["email"];
$password = $_POST["password"];

//validate the form inputs
$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password with at least 7 characters';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors

    ]);
}

$db = App::resolve('core\DataBase');

//check if the account already exist

$user = $db->query('select * from users where email = :email', ['email' => $email])->find();


// if yes , redirect to login page
if ($user) {

    header('location: /index');
    exit();
} else {
    //if not , save one to the database , and then log the user in and redirect
    $db->query('INSERT INTO users(email,password) VALUES(:email,:password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    //mark that the user logged in

    Authenticator::login(
        [
            'email' => $email,
        ]

    );




    header('location: /index');
    exit();
}
