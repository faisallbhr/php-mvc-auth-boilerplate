<?php

namespace core;

class Controller
{
    protected function view($filename = '', $data = [])
    {
        require_once '../app/views/' . $filename . '.php';
    }

    protected function isAuthenticated()
    {
        return isset($_SESSION['user']);
    }
}