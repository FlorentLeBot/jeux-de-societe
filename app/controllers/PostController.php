<?php

// namespace App\controllers;

class PostController extends Controller{

    public function index(){
        $this->loadModel('PostModel');
        echo "accueil";
    }
}