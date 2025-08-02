<?php

$config = require 'config.php';

$db = new DataBase($config['database']);

$name = "Note";
$currentUserid = 2;

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id =  :id", ['id' => $id])->findorfail();

if (! $note) {
    abort();
}

Authorized($note['user_id'] === $currentUserid);



require "views/note.view.php";
