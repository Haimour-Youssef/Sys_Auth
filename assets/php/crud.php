<?php

namespace authentification;

include_once "config.php";

use PDOException;
use authentification\db;
use PDO;

class Crud
{
    function read($query, $array)
    {
        try {
            $db = new db();
            $con = $db->connect();
            $stmt = $con->prepare($query);
            $stmt->execute($array);
            return $stmt->fetch(PDO::FETCH_OBJ);;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    function createOrUpdate($query, $array)
    {
        try {
            $db = new db();
            $con = $db->connect();
            $stmt = $con->prepare("$query");
            $result = $stmt->execute($array);
            if ($result == 1) {
                return 'true';
            } else {
                return 'false';
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    function delete($query)
    {
        try {
            $db = new db();
            $con = $db->connect();
            $stmt = $con->prepare("");
            $result = $stmt->execute();
            if ($result == 1) {
                # code...
            } else {
                # code...
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
