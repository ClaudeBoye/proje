<?php
try{
    include __DIR__.'/../includes/connect.php';
    include __DIR__. '/../functions/functions.php';

    $totalcus = totals($pdo, 'customers');
    $totalemp = totals($pdo, 'employee');
    $totaldiv = totals($pdo, 'deliveries');

    $deliveries = getall($pdo, 'deliveries');

    $title = 'nameofme';

    ob_start();
    
    include __DIR__ . '/../templates/admindashboard.html.php';

    $output = ob_get_clean();
}
catch (PDOException $e) {
    echo 'we have a problem '.$e->getMessage();

}

include __DIR__ . '/../templates/adminlayout.html.php';