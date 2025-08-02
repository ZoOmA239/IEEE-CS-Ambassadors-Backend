<?php

$config = require 'config.php';

$db = new DataBase($config['database']);

$name = "My Notes";

$statement = $db->query("SELECT * FROM notes WHERE user_id = 2");
$notes = $statement->fetchAll();



require "views/notes.view.php";
