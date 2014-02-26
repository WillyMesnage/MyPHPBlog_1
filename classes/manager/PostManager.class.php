<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface PostManager {
    function addPost($title, $body, $user);
    function findAllPost();
    function findPostById(int $id);
    function removePost(int $id);
}