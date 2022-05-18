<?php
session_start();

if(!isset($_SESSION['id'])){

    header('location: login.php');

} else if ($_SESSION['prev'] != 'admin'){
    
    $message = 'you dont have access to this page';

    header('location: admindashboard.php');

}else {
    if(isset($_POST['username'])){
        try{
            include __DIR__ . '/../includes/connect.php';
            include __DIR__ . '/../functions/functions.php';
    
            $checkname = getViaId($pdo, 'customers', 'user_name', $_POST['username']);
            $checkmail = getViaId($pdo, 'customers', 'user_email', $_POST['email']);
            if($checkname['user_name'] != ''){
                $message = 'The username already exist in the system';
                ob_start();
                include __DIR__.'/../templates/register.html.php';
                $output = ob_get_clean();
    
            }elseif($checkmail['user_email'] != ''){
                $message = 'The Email already exist in the system';
                ob_start();
                include __DIR__.'/../templates/register.html.php';
                $output = ob_get_clean();
                
            }else{
                $code1 = $_POST['region'];
                $userp = $_FILES['file'];
    
                $rand1 = strval(rand(1000,10000));
                $code = $code1.$rand1;
                $userprofile = imgUploads($userp);
    
                $params = ['user_name' => $_POST['username'], 'user_email' => $_POST['email'],
                            'user_phone' => $_POST['phone'], 'adrcode' => $code, 'user_address' => $_POST['address'], 'user_pictures' => $userprofile];
    
                insert($pdo, 'customers', $params);
    
                header('location: users.php');
            }
        $title = 'Registration';
        ob_start();
    
        include __DIR__ . '/../templates/register.html.php';
    
        $output = ob_get_clean();
    
        include __DIR__ . '/../templates/adminlayout.html.php';
        
        }catch (PDOException $e) {
            echo 'this error '. $e->getMessage() .$e->getline() ;
        }
    
    }else{
        
        $title = 'Registration';
        ob_start();
    
        include __DIR__ . '/../templates/register.html.php';
    
        $output = ob_get_clean();
    
        include __DIR__ . '/../templates/adminlayout.html.php';
    }
}