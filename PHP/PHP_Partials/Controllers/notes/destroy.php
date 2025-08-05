<?php

use Core\App;
use Core\DataBase;

$db = App::resolve('core\DataBase');

$currentUserid = 2;


$id = $_POST['id'];

$note = $db->query("SELECT * FROM notes WHERE id =  :id", ['id' => $id])->findorfail();

if (! $note) {
    abort();
}

Authorized($note['user_id'] === $currentUserid);


$db->query("DELETE FROM notes WHERE id = :id", [
    'id' => $_POST['id']
]);


header('Location: /notes');
exit();
