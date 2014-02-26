<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ENTITIES.'User.class.php';
require_once MANAGER.'UserManager.class.php';

class SimpleUserManager implements UserManager{
    
    public function authenticate($email, $password) {
        
        try{
            if( $email == 'test@test.com' && $password == '1234'){
                $user = new User($email, $password);
                $_SESSION['user'] = $user;
                
            }else{
                throw new Exception("L'email et/ou le mot de passe ne sont pas correctes.");
            }
        } catch(Exception $e){
            return $e->getMessage();
        }
        
    }
}