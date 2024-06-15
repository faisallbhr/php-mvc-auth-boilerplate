<?php

namespace routes;

require_once '../core/Autoloader.php';
use core\Router;

Router::get('/', function () {
    if (isset($_SESSION['user'])) {
        header('Location: /dashboard');
        exit;
    }
    include '../app/views/welcome.php';
});
Router::post('/login', 'AuthController', 'login');
Router::get('/logout', 'AuthController', 'logout');
Router::get('/dashboard', 'DashboardController', 'index');
Router::get('/products', 'ProductController', 'index');
Router::post('/products', 'ProductController', 'store');
Router::delete('/products/{id}', 'ProductController', 'destroy');
