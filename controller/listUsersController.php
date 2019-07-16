<?php
require '../model/Database.php';
require '../model/user.php';


function age($date){
    return (int) ((time() - strtotime($date)) /3600/24/365);
}

$User = new userLog();
$displayUsersResult = $User->displayUser2();




if(!empty($_POST['selector'])){
    $users = new userLog();
    $countService = (int)$_POST['selector'];
    $users-> id_Services = $countService;
    $userResult = $users->displayUser();
}