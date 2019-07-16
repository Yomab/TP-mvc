<?php
//fichier obligatoire qui sera appelé à plusieurs endroits
class DB{
    protected $db;
    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;dbname=tpmvc', 'yomab','nounours111180');
    }
}