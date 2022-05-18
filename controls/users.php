<?php

session_start();

try{
    include __DIR__.'/../includes/connect.php';
    include __DIR__.'/../functions/functions.php';

    $customers = getall($pdo, 'customers');

    $sum = 0;

    $title = 'Customers list';

    ob_start();

    include __DIR__ . '/../templates/users.html.php';

    $output = ob_get_clean();

}catch (PDOException $e){
    $title = 'An error occured';
    $output = 'Unable to establish connection to due to the error '.$e->getMessage();
}

include __DIR__ . '/../templates/adminlayout.html.php';