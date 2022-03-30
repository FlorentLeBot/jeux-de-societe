<?php



// classe abstraite (non instanciable)
abstract class Model{

    // les informations pour la connexion à la base de donnée
    private $host = "localhost";
    private $dbname ='monprojet';
    private $username = "root";
    private $password = "";
    
    // la connexion à la base de donnée
    protected $_connexion;

    // les informations pour faire des requêtes dynamiques
    public $table;
    public $id;

    public function getConnection(){
        $this->_connexion = null;
        try{
            $this->_connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
            $this->_connexion->exec('set names utf8');

        }catch(PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM {$this->table}";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function findById(){
        $sql = "SELECT * FROM {$this->table} WHERE id={$this->id}";
        $query = $this->_connexion;
        $query = $query->prepare($sql);
        $query->execute();
        return $query->fetch();
    }





}