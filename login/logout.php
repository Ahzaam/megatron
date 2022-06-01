<?php
session_start();

$_SESSION['uname'] = "";
$_SESSION['password'] = "";
$_SESSION['login'] = false;
$_SESSION['email'] = "";

header("Location:".$_REQUEST['page']);
 ?>
