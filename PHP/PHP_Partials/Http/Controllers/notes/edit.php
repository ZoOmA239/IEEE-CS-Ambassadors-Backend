<?php

use Core\App;
use Core\DataBase;

$db = App::resolve('core\DataBase');

$user_id = $db->query('select id from users where email = :email', [
    'email' => $_SESSION['user']['email']
])->find();


$user_id = $user_id['id'];



$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id =  :id", ['id' => $id])->findorfail();

if (! $note) {
    abort();
}

Authorized($note['user_id'] === $user_id);




view('notes/edit.view.php', [
    'name' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);
