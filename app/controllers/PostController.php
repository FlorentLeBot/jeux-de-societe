<?php

// namespace App\controllers;

class PostController extends Controller{

    public function index(){
        $this->loadModel('PostModel');
        $articles = $this->PostModel->getAll();
        echo "accueil";
    }
}