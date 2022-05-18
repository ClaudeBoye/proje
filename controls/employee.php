<?php

session_start();

if(isset($_SESSION['id'])){
    try{
        include __DIR__.'/../includes/connect.php';
        include __DIR__.'/../functions/functions.php';
    
        $employees = getall($pdo, 'employee');
    
        $sum = 0;
    
        $title = 'Employee list';
    
        ob_start();
    
        include __DIR__ . '/../templates/employee.html.php';
    
        $output = ob_get_clean();
    
    }catch (PDOException $e){
        $title = 'An error occured';
        $output = 'Unable to establish connection to due to the error '.$e->getMessage();
    }
    
    include __DIR__ . '/../templates/adminlayout.html.php';

}else{
    header('location: login.php');
}
