<?php

namespace app\controllers;

require_once '../core/Autoloader.php';

use core\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        if (!$this->isAuthenticated()) {
            header('Location: /');
            exit();
        }
    }
    public function index()
    {
        $this->view('pages/dashboard');
    }
}