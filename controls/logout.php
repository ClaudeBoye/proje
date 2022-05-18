<?php

session_start();

if(isset($_SESSION['id'])){
    $_SESSION['id'] = '';
    $_SESSION['username'] = '';
    $_SESSION['password'] = '';
    $_SESSION['prev'] = '';
    session_destroy();

    header('location: login.php');
    
}else{
    $messasge = 'You will need to login first';
    header('location:login.php');

}