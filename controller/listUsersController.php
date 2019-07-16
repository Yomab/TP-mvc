<?php
require '../model/Database.php';
require '../model/user.php';
function age($date){
    return (int) ((time() - strtotime($date)) /3600/24/365);
}
$user = new userLog();
$displayUsers = $user->displayUser();