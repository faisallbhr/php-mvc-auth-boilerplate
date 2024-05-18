<?php

namespace app\controllers;

require_once '../core/Autoloader.php';

use app\models\Product;
use core\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        if (!$this->isAuthenticated()) {
            header('Location: /');
            exit;
        }
    }

    public function index()
    {
        $products = new Product();
        $products = $products->count();
        $this->view('pages/dashboard', [
            'products' => $products
        ]);
    }
}