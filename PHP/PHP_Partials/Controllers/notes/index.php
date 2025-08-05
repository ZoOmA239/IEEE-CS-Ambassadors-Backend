<?php

use Core\App;
use Core\DataBase;


$db = App::resolve('core\DataBase');

$statement = $db->query("SELECT * FROM notes");
$notes = $statement->fetchAll();

view('notes/index.view.php', [
    'name' => 'My Notes',
    'notes' => $notes
]);
