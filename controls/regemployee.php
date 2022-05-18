<?php

session_start();
if(!isset($_SESSION['id'])){
    header('location: login.php');

} elseif ($_SESSION['prev'] != 'admin') {
    $message = 'you are not allowed to access this page';
    header('location: admindashboard.php');

}else{
    if(isset($_POST['username'])){
        include __DIR__.'/../includes/connect.php';
        include __DIR__ .'/../functions/functions.php';
    
        $checkname = getViaId($pdo, 'employee', 'name', $_POST['username']);
        $checkmail = getViaId($pdo, 'employee', 'email', $_POST['email']);
    
        if($_POST['password'] != $_POST['confirmpass']){
            $message = 'password does not match please try again';
            ob_start();
            include __DIR__.'/../templates/regemployee.html.php';
            $output = ob_get_clean();
    
        }elseif($checkmail['email'] != ''){
            $message = 'The Email already exist in the system';
            ob_start();
            include __DIR__.'/../templates/regemployee.html.php';
            $output = ob_get_clean();
    
        }elseif($checkname['name'] != ''){
            $message = 'The usernae already exist in the system';
            ob_start();
            include __DIR__.'/../templates/regemployee.html.php';
            $output = ob_get_clean();
    
        }else{
            try{
                $sql = 'INSERT INTO `employee` (`name`, `email`, `phone`, `address`, `password`, `gender`) VALUES (:uname, :email, :pnumber, :adr, :passw, :gender)';
    
                $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $parameters = [
                    ':uname' => $_POST['username'],
                    ':email' => $_POST['email'],
                    ':pnumber' => $_POST['phone'],
                    ':adr' => $_POST['address'],
                    ':passw' => $pass,
                    ':gender' => $_POST['gender'],
                ];
    
                query($pdo, $sql, $parameters);
    
                header('location:employee.php');
    
            }catch(PDOException $e){
                
                $message = 'the error occured'. $e->getMessage(). 'in line '. $e->getLine();
                $output = "";
    
    
            }
        }
    }else{
        $title = 'Register Employee';
    
        ob_start();
        include __DIR__.'/../templates/regemployee.html.php';
    
        $output=ob_get_clean();
    }

}

include __DIR__ . '/../templates/adminlayout.html.php';

