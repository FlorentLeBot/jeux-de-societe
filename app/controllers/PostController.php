<?php

// namespace App\controllers;

class PostController extends Controller{

    public function index(){
        $this->loadModel('PostModel');
        $articles = $this->PostModel->getAll();
        $this->render('index', compact('articles'));
    }
}