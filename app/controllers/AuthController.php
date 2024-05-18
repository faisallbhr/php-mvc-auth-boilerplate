<?php

namespace app\controllers;

require_once '../core/Autoloader.php';

use core\Controller;
use app\models\User;

class AuthController extends Controller
{
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User();
        $user = $user->getByEmail($email);

        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user'] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ];
            return $this->view('pages/dashboard');
        } else {
            header('Location: /');
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        return $this->view('welcome');
    }
}