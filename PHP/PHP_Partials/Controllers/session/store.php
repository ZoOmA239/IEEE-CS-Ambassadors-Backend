<?php

// Log in the user if the cardanilties match

use Core\App;
use Core\DataBase;
use Core\Validator;

$email = $_POST["email"];
$password = $_POST["password"];

$db = App::resolve('core\DataBase');


$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
if (! Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password';
}

if (! empty($errors)) {
    return view('session/create.view.php', ['errors' => $errors]);
}


//match the credentals

$user = $db->query('select * from users where email = :email', ['email' => $email])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {

        login([
            'email' => $email
        ]);

        header('location: /index');
        exit();
    }
}

return view('session/create.view.php', ['errors' => [
    'email' => 'No matching account found for this email and password',
]]);
