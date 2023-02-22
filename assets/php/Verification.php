<?php

namespace authentification;

use Exception;

include "generate.php";
include "mailer.php";
require_once 'Jwt.php';

use authentification\Generate;
use authentification\JWT;


session_start();

class Verification
{

    function VerifMail($mail) :bool
    {
        try {
            $generate = new Generate();
            $mailCode = $generate->random(6);
            $_SESSION['mailCode'] = $mailCode;
            if (sendmeil($mail, $mailCode)) {
                return true;
            } else return false;
        } catch (Exception $e) {
            return false;
        }
    }
    function auth($token){
            $jwt = new JWT();
            if (!$jwt->isValid($token)) {
                    return false;    
            } else {
              if ($jwt->isExpired($token)) {
                    return false;
              } else {
                if (!$jwt->check($token, "SECRET")) {
                    return false;
                }else{
                    return true;
                }
              }
            }
    }
}
