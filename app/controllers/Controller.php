<?php

abstract class Controller{

    public function loadModel(string $model){
        require_once(ROOT.'app/models/'.$model.'.php');
        $this->$model = new $model();
    }
}