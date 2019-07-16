<?php
//il faut tjrs appeler la base de donnée dans le controller
require '../model/Database.php'; 
require '../model/user.php';

if(count($_POST) > 0){
    $lastname = $_POST['lastName'];
    $firstname = $_POST['firstName'];
    $birthdate = $_POST['birthDate'];
    $adress = $_POST['adress'];
    $zipcode = $_POST['zipCode'];
    $phone = $_POST['phone'];
    $id_Services= (int)$_POST['id_Services'];
    
    //objet qui contient les attributs et les méthodes de la class User
    $user = new userLog();
    $user->lastName = $lastname;
    $user->firstName = $firstname;
    $user->birthDate = $birthdate;
    $user->adress = $adress;
    $user->zipCode = $zipcode;
    $user->phone = $phone;
    $user->id_Services = $id_Services;
    if($user->addUser()){
        header('Location: ../index.php');
    }else{echo 'bitch';}
}