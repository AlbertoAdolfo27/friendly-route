# PHP Friendly Route

PHP Library to create HTTP routes

## Getting started

### Minimum requirements

- **PHP** >= **8.0**

### Installation

installation using [composer](https://getcomposer.org/)

```compose
composer require albertoadolfo27/friendly_route
````

### Quick Examples

#### Tracing routes

```php
<?php
// Require the Composer autoloader.
require_once "vendor/autoload.php";

use FriendlyRoute\Router;

// Set the configuration.
$config = array(
    "debug"      => true,
    "projectDir" => "friendly_route"  // Set the Project Directory if you are working on the localhost. Default empty string.
);

// Instantiate a Router.
$router = new Router($config);

// Tracing routes
$router->get("/", function () {
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
```

### Allowed HTTP methods

- GET

```php
$router->get("/", function () {
    // Put the code to run
});
```

or

```php
$router->set("GET", "/", function () {
    // Put the code to run
});
```

---

- POST

```php
$router->post("/", function () {
    // Put the code to run
});
```

or

```php
$router->set("POST", "/", function () {
    // Put the code to run
});
```

---

- PUT

```php
$router->put("/", function () {
    // Put the code to run
});
```

or

```php
$router->set("PUT", "/", function () {
    // Put the code to run
});
```

---

- DELETE

```php
$router->delete("/", function () {
    // Put the code to run
});
```

or

```php
$router->set("DELETE", "/", function () {
    // Put the code to run
});
```

#### Plotting a route with more than one HTTP method

```php
$router->set(array("GET", "POST"), "/", function () {
    // Put the code to run
});
```

#### Add array of routes to a request

```php
$router->get(["/hello","/hi"], function () {
    // Put the code to run
});
```

#### Method not allowed

```php
$router->methodNotAllowed(function () {
    echo "<h1>405 METHOD NOT ALLOWED</h1>";
});
```
