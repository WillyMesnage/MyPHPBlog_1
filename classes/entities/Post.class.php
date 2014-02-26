<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Post {

    private $id;
    private $title;
    private $body;
    private $publication_date;
    private $user;

    function __construct($title, $body, $publication_date, $user, $id = NULL) {
        
        $this->title = $title;
        $this->body = $body;
        $this->publication_date = $publication_date;
        $this->user = $user;
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getBody() {
        return $this->body;
    }

    public function getPublication_date() {
        return $this->publication_date;
    }

    public function getUser() {
        return $this->user;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function setPublication_date($publication_date) {
        $this->publication_date = $publication_date;
    }

    public function setUser($user) {
        $this->user = $user;
    }



}
