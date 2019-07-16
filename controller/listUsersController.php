<?php
require '../model/Database.php';
require '../model/user.php';

$user = new userLog();
$displayUsers = $user->displayUser();