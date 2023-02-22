<?php

namespace authentification;

use authentification\JWT;

include "crud.php";
require_once 'Jwt.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['message' => 'Methode non autorisee']);
    exit;
}

$crud = new Crud();
$email = $_POST["email"];
$password = $_POST['Code_Access'];
$array = array(':email' => $email, ':password' => $password);
$data = $crud->read("SELECT * FROM plateforme_icns WHERE `email`=:email AND `password`=:password", $array);
if ($data != "") {
    if ($data->status == 1) {
        echo "vous etez deja connetcer avec un autre machine !!!";
    } else {
        if ($crud->createOrUpdate("UPDATE plateforme_icns SET `status`=1 WHERE `email`=:email", array(':email' => $data->email))) {
            // On crée le header
            $header = [
                'typ' => 'JWT',
                'alg' => 'HS256'
            ];

            // On crée le contenu (payload)
            $payload = [
                'user_id' => $data->ID,
            ];

            $jwt = new JWT();

            $token = $jwt->generate($header, $payload, 'SECRET');

            setcookie("token", $token, time() + (86400 * 30), "/"); // 86400 = 1 day
            // echo "Value is: " . $_COOKIE['token'];
            header("Location: ../../welcome.php");
            die();
        } else {
            echo "nou sommes trouver des probleme inconnu ressyer svp!";
        }


    }

} else {
    echo "failed mail or password !!!";
}