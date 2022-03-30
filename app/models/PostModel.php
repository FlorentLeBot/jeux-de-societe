<?php

// classe PostModel hérite de la classe Model
class PostModel extends Model{

    public function __construct()
    {
        $this->table = "articles";
        $this->getConnection();
    }


}