<?php

namespace routes;

require_once '../core/Autoloader.php';
use core\Router;

Router::get('/', function () {
    if (isset ($_SESSION['user'])) {
        header('Location: /dashboard');
        exit;
    }
    include '../app/views/welcome.php';
});
Router::post('/login', 'AuthController', 'login');
Router::get('/logout', 'AuthController', 'logout');
Router::get('/products', 'ProductController', 'index');
Router::get('/dashboard', 'DashboardController', 'index');
