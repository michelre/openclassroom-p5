<?php

namespace App\Service;

use App\Model\User;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;

class AuthenticationService
{
    

    /**
     * @param User $user
     */
    public function createToken($user)
    {
        $token = array(
            "userId" => $user->getId(),
            "exp" => time() + 3600
        );
        return JWT::encode($token, "p5-mly");

    }

    public function getConnectedUser()
    {
        if (!isset($_COOKIE['p5_token'])) {
            return false;
        }
        try {
            $token = (array)JWT::decode($_COOKIE['p5_token'], "p5-mly", ['HS256']);
            return $token['userId'] ?? false;
        } catch (ExpiredException $e) {
            return false;
        }
    }

    public function addTokenToCookie($token)
    {
        setcookie('p5_token', $token);
    }
    
     public function logout()
    {
       setcookie('p5_token', "");
    }

}
