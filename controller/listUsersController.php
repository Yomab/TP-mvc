<?php

require_once '../model/Database.php';
require_once '../model/user.php';

function age($date) {
    return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
}

$User = new userLog();
$displayUsersResult = $User->displayUser2();

$displayServicesList = $User->displayService();


if (!empty($_POST['selector'])) {
    $users = new userLog();
    $countService = (int) $_POST['selector'];
    $users->id_Services = $countService;
    $userResult = $users->displayUser();
}

if (isset($_GET['delete'])) {
    $idUser = (int) $_GET['delete'];
    $User->id = $idUser;
    if ($User->deleteUser() == true) {
        header('Location: listUsers.php');
    }
}