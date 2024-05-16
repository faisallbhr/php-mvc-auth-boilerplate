<?php

namespace app\models;

require_once '../core/Autoloader.php';

use core\Model;

class Product extends Model
{
    protected string $table = 'products';
    private int $id;
}