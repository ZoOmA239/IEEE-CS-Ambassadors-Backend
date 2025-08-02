<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];;

// if ($uri === '/PHP/PHP_Partials/index' || $uri === '/') {
//     require 'Controllers/index.php';
// } elseif ($uri === '/PHP/PHP_Partials/about' || $uri === '/about') {
//     require 'Controllers/about.php';
// } elseif ($uri === '/PHP/PHP_Partials/contact' || $uri === '/contact') {
//     require 'Controllers/contact.php';
// }


$routes = [
    '/PHP/PHP_Partials/index' => 'Controllers/index.php',
    '/PHP/PHP_Partials/about' => 'Controllers/about.php',
    '/PHP/PHP_Partials/notes' => 'Controllers/notes.php',
    '/PHP/PHP_Partials/note' => 'Controllers/note.php',
    '/PHP/PHP_Partials/contact' => 'Controllers/contact.php',
    '/' => 'Controllers/index.php',
];

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

// if (array_key_exists($uri, $routes)) {
//     require $routes[$uri];
// } else {
//     abort(422);
// }

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

routeToController($uri, $routes);
