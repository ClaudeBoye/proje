<?php

session_start();

if(isset($_SESSION['id'])){
    if($_SESSION['prev'] != 'admin'){
        $message = 'You are not allowed to access this page';
        ob_start();
        include __DIR__ . '/../templates/admindashboard.html.php';
        $output = ob_get_clean();
    }else{

        try{
            include __DIR__ . '/../includes/connect.php';
            include __DIR__. '/../functions/functions.php';
        
            if(isset($_POST['id'])){
                $sql = 'UPDATE `deliveries` set `status` = :stats, `emp_id` = :empid where `id`=:id';
                $params = [':stats' => $_POST['stats'], ':empid' => $_POST['emplist'], ':id' => $_POST['id'] ];
        
            query($pdo, $sql, $params);
        
            header('location: admindashboard.php');
        
            }else{
                $title = 'Edit delivery';
        
                $employees = getall($pdo, 'employee');
                $delivery = getViaId($pdo,'deliveries', 'id', $_GET['id']);
        
                ob_start();
        
                include __DIR__ . '/../templates/editdev.html.php';
        
                $output = ob_get_clean();
        
            }
        
        }catch (PDOException $e){
            $output = 'the following occured ' .$e->getMessage(). ' at line '. $e->getLine().$e->getFile();
            echo $output;
        }
        
        include __DIR__ . '/../templates/adminlayout.html.php';

    }
}else{
    header('location: login.php');
}
