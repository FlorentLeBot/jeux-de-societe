<?php

abstract class Controller{

    public function loadModel(string $model){
        require_once(ROOT.'app/models/'.$model.'.php');
        $this->$model = new $model();
    }
    public function render(string $file, array $data = []){
        extract($data);
        // var_dump($data);die();
        // var_dump($articles);die();
        require_once(ROOT.'app/views/Blog/'.$file.'.php');
    }
}