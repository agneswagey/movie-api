<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Agneswagey\MovieApi\App\Router;
use Agneswagey\MovieApi\Controller\HomeController;
use Agneswagey\MovieApi\Controller\MovieController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('POST', '/home/search', HomeController::class, 'search');
Router::add('GET', '/movie/([0-9a-zA-Z]+)', MovieController::class, 'index');

Router::run();