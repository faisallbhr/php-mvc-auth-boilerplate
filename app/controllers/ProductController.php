<?php

namespace app\controllers;

require_once '../core/Autoloader.php';

use core\Controller;
use app\models\Product;

class ProductController extends Controller
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
        $products = new Product;
        $products = $products->all();
        $this->view('pages/products/index', [
            'products' => $products
        ]);
    }
}