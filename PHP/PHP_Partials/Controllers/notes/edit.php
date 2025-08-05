<?php

use Core\App;
use Core\DataBase;

$db = App::resolve('core\DataBase');

$currentUserid = 2;




$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id =  :id", ['id' => $id])->findorfail();

if (! $note) {
    abort();
}

Authorized($note['user_id'] === $currentUserid);




view('notes/edit.view.php', [
    'name' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);
