<?php 

session_start();

$_SESSION['login'] = "webmaster";

echo $_SESSION['login'];

$_SESSION["role"] = "admin";

echo"- session ID : ".session_id();
var_dump($_SESSION);

unset($_SESSION['login']);
unset($_SESSION["role"]);
session_destroy();
var_dump($_SESSION);