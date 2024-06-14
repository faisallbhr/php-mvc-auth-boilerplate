<?php

namespace app\controllers;

require_once '../core/Autoloader.php';

use core\Flasher;
use core\Controller;
use core\Pagination;
use app\models\Product;

class ProductController extends Controller
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
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $itemsPerPage = 10;
        $products = $products->paginate($itemsPerPage, $currentPage);
        $pagination = new Pagination($products['currentPage'], $products['totalPages'], $itemsPerPage);
        $this->view('pages/products/index', [
            'products' => $products,
            'pagination' => $pagination->render()
        ]);
    }
}