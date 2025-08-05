<?php


use Core\App;
use Core\DataBase;
use Core\Validator;

$db = App::resolve('core\DataBase');

$currentUserid = 2;


//find the coressponding note

$id = $_POST['id'];

$note = $db->query("SELECT * FROM notes WHERE id =  :id", ['id' => $id])->findorfail();
if (! $note) {
    abort();
}

//authorize that the current user can edit the note
Authorized($note['user_id'] === $currentUserid);

//validate the form
$errors = [];


if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "A body of no more than 1.000 characters is required.";
}


//if no validation errors, update the record in the notes database table
if (count($errors)) {
    return view("notes/edit.view.php", [
        'name' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('location: /notes');
die();
