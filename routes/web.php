<?php

namespace routes;

require_once '../core/Autoloader.php';
use core\Router;

Router::get('/', 'AuthController', 'index');
Router::post('/login', 'AuthController', 'login');
Router::get('/logout', 'AuthController', 'logout');
Router::get('/products', 'ProductController', 'index');
Router::get('/dashboard', 'DashboardController', 'index');
