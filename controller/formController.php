<?php
//il faut tjrs appeler la base de donnée dans le controller
require_once '../model/Database.php';
require_once '../model/user.php';

if (count($_POST) > 0) {
    $lastname = $_POST['lastName'];
    $firstname = $_POST['firstName'];
    $birthdate = $_POST['birthDate'];
    $adress = $_POST['adress'];
    $zipCode = $_POST['zipCode'];
    $phone = $_POST['phone'];
    $id_Services = (int) $_POST['id_Services'];

    //objet qui contient les attributs et les méthodes de la class User
    $users = new userLog();

    $users->lastName = $lastname;
    $users->firstName = $firstname;
    $users->birthDate = $birthdate;
    $users->adress = $adress;
    $users->zipCode = $zipCode;
    $users->phone = $phone;
    $users->id_Services = $id_Services;

    if ($users->addUser()) {
        header('Location: ../index.php');
        exit();
    }
}    