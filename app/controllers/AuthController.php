<?php

namespace app\controllers;

require_once '../core/Autoloader.php';

use core\Controller;
use app\models\User;
use core\Flasher;

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
            header('Location: /dashboard');
            exit;
        } else {
            Flasher::setValidationError('auth', "Creedential doesn't match any records.");
            header('Location: /');
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /');
        exit;
    }
}