<?php

session_start();


const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'core/function.php';

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);


    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();


$routes = require base_path('routers.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);



// connect to the database

// class person
// {
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name . " Is Breathing...";
//     }
// }

// $person = new person();

// $person->name = "Hazem";
// $person->age = "22";

// // dd($person->name);
// // dd($person->age);
// $person->breathe();




// $id = $_GET['id'];
// $query = "SELECT * FROM posts where id = ?";


// $posts = $db->query($query, [$id])->fetch();


// dd($posts);


// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
