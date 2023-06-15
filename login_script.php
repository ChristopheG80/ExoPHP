<?php
session_start();
if ( $_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_REQUEST['login']) && isset($_REQUEST['password']) && $_REQUEST['login']=='admin' && $_REQUEST['password']=='admin'){
        $_SESSION['auth'] = 'ok';
    }
}

var_dump($_SESSION);