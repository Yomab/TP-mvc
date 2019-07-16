<?php
//class User qui hérite de DataBase.php (DB)

class userLog extends DB{
    public $id;
    public $firstName;
    public $lastName;
    public $birthDate;
    public $adress;
    public $zipCode;
    public $phone;
    public $id_Services;
    public function __construct(){
        //On récupere le constructeur de la page DataBase.php qui est le parent de la class User
        parent::__construct();
    }
    public function addUser(){
        $query = 'INSERT INTO `userLog`(`firstName`, `lastName`, `birthDate`, `adress`, `zipCode`, `phone`, `id_Services`) VALUES (:firstName, :lastName, :birthDate, :adress, :zipCode, :phone, :id_Services)';
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $addUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $addUser->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR); 
        $addUser->bindValue(':adress', $this->adress, PDO::PARAM_STR); 
        $addUser->bindValue(':zipCode', $this->zipCode, PDO::PARAM_STR); 
        $addUser->bindValue(':phone', $this->phone, PDO::PARAM_STR); 
        $addUser->bindValue(':id_Services', $this->id_Services, PDO::PARAM_INT);  
        if($addUser->execute()){
            return true;
        }
    }
    
     public function displayUser(){
        $query = 'SELECT * FROM `userLog` INNER JOIN Services ON Services.id = userLog.id_Services WHERE id_Services = :id' ;
        $selectUser = $this->db->prepare($query);
        $selectUser->bindValue(':id', $this->id_Services, PDO::PARAM_INT);
        $selectUser->execute();
        $displayUsers=$selectUser->fetchAll(PDO::FETCH_ASSOC);
        return $displayUsers;
     }
     public function displayUser2(){
        $query = 'SELECT * FROM `userLog` INNER JOIN Services ON Services.id = userLog.id_Services' ;
        $selectUser = $this->db->prepare($query);
        $selectUser->execute();
        $displayUsers2 = $selectUser->fetchAll(PDO::FETCH_ASSOC);
        return $displayUsers2;
     }
}

