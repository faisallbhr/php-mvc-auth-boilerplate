<?php

namespace app\models;

require_once '../core/Autoloader.php';

use PDO;
use core\Model;
use utils\DBConnection;

class User extends Model
{
    protected string $table = 'users';

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = ?";
        $prepare = $this->pdo->prepare($sql);
        $prepare->execute([$email]);
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
