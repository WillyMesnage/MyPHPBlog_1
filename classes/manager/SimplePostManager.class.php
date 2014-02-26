<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ENTITIES.'Post.class.php';
require_once ENTITIES.'User.class.php';
require_once MANAGER.'PostManager.class.php';

class SimplePostManager implements PostManager {

    function __construct() {
        
        if( !isset($_SESSION['post']) && !isset($_SESSION['counter']) ){
            $_SESSION['post'] = array();
            $_SESSION['counter'] = 0; 
        }
        
    }

    public function addPost($title, $body, $user) {
        
        $id = $_SESSION['counter']++;
        
        $newPost = new Post($title, $body, date('d.m.y'), $user, $id);
        
        $_SESSION['post'][] = $newPost;
        
        return 'Post ajouté';
    }
    
    public function findAllPost() {
        
        return $_SESSION['post'];
    }
    
    public function findPostById(int $id) {

        foreach( $_SESSION['post'] as $p){
            if( $p->getId() == $id ){
                return $p;
            }
        }
        
    }
    
    public function removePost(int $id) {
        
        foreach( $_SESSION['post'] as $p){
            if( $p->getId() == $id ){
                unset($_SESSION['post'][$p]);
            }
        }
    }
}