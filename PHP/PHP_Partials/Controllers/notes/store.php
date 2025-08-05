<?php

use Core\DataBase;
use Core\Validator;
use Core\App;



$db = App::resolve('core\DataBase');
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {





    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body of no more than 1.000 characters is required.";
    }

    // validation issue
    if (! empty($errors)) {

        return view('notes/create.view.php', [
            'name' => 'Create a Note',
            'errors' => $errors
        ]);
    }


    // $user_id = $_SESSION['user']['id'] ?? null;

    // if (!$user_id) {
    //     abort(403); // ممنوع إضافة note بدون تسجيل دخول
    // }


    if (empty($errors)) {
        $db->query("INSERT INTO notes (user_id, body) VALUES (:user_id, :body)", [
            'user_id' => 5, // Assuming a static user ID for this example
            'body' => $_POST['body']
        ]);

        header('Location: /notes');
        exit();
    }
}
