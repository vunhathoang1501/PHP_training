<?php
require_once "controller/user.php";
require_once "controller/admin.php";
if (isset($_GET["controller"])){
    $controller=$_GET["controller"];
}
else{
    $controller ='user';
}
$action = $controller;
$act = new $action();
if (isset($_GET["action"])){
    $a = $_GET["action"];
    }
else{
    $a ="index";
}
$act->$a();
