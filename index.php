<?php
// Require the Composer autoloader.
require_once "./vendor/autoload.php";

use FriendlyRoute\Router;

// Set the configuration.
$config = array(
    "debug"      => true,
    "projectDir" => "friendly_route"  // Set the Project Directory if you are working on the localhost. Default empty string.
);

// Instantiate a Router.
$router = new Router($config);

// Tracing routes

$router->set("GET", "/", function () {
    echo "<h1>Hello World!</h1>";
});

$router->get("/user/{username}", function ($args) {
    $user = $args["username"];
    echo "<h1>Welcome {$user}</h1>";
});

$router->notFound(function () {
    echo "<h1>404 NOT FOUND</h1>";
});

$router->run();
