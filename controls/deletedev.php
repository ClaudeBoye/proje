<?php
try{
    include __DIR__ . '/../includes/connect.php';
    include __DIR__ . '/../functions/functions.php';


    if(isset($_POST['id'])){
        deleteViaId($pdo, $_POST['table'], 'id', $_POST['id']);

        header('location: admindashboard.php');
    }else{
        header('location: admindashboard.php');
    }

    
}catch (PDOException $e){
    $title = 'an error occured';

    $output = 'Unable to establish connection due to '.$e->getmessage();
}

include __DIR__ . '/../templates/adminlayout.html.php';