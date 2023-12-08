<?php

$routes = require "/app/public/routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort()
{
    http_response_code(404);
    echo "3lash t5ala6 fl url a 3imad ";
    die();
}



routeToController($uri, $routes);