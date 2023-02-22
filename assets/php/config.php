<?php

namespace authentification;

use PDOException;
use PDO;

class db
{
    function connect()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    
}