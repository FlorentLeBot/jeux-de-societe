<?php

// classe abstraite (non instanciable)
abstract class Model{

    protected $db;
    public $table;
    public $id;
    
    public function __construct()
    {
        $this->db = DBConnection::getPDO();
    }





}