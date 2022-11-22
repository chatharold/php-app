<?php
	
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
	"/" => "./controllers/index.php",
	"/about" => "./controllers/about.php",
	"/contact" => "./controllers/contact.php"
];

function currentUri($currentUri) {
	return $_SERVER['REQUEST_URI'] === $currentUri;
}

function abort($code = 404) {
	http_response_code($code);
	return require "views/404.php";
	die();
}

if (array_key_exists($uri, $routes)) {
	return require_once $routes[$uri];
} else {
	abort();	
}