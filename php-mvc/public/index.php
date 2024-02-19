<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Ndraaa15\PhpMvc\App\Router;
use Ndraaa15\PhpMvc\Controller\HomeController;
use Ndraaa15\PhpMvc\Controller\ProductController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/about', HomeController::class, 'about');
Router::add('GET', '/contact', HomeController::class, 'contact');
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::run();