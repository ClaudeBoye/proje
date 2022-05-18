<?php
if (isset($_POST['username'])){
    try{
        include __DIR__ . '/../includes/connect.php';
        include __DIR__. '/../functions/functions.php';

        $user = getViaId($pdo, 'employee', 'name', $_POST['username']);
        $admin = getViaId($pdo, 'admin', 'name', $_POST['username']);
        $pass = $_POST['password'];

        if(!empty($user) && password_verify($pass, $user['password'])){
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['name'];
            $_SESSION['password'] = $user['passsword'];
            $_SESSION['prev'] = 'emp';
            $_SESSION['table'] = 'employee';

            header('location: admindashboard.php');

        }elseif(!empty($admin) && $pass == $admin['password']){
            session_start();
            
            $_SESSION['id'] = $admin['id'];
            $_SESSION['username'] = $admin['name'];
            $_SESSION['password'] = $admin['passsword'];
            $_SESSION['prev'] = 'admin';
            $_SESSION['table'] = 'admin';

            header('location: admindashboard.php');

        }else{

            $title = 'Login';
            $message = 'Incorrect username or password please check and try again';
            ob_start();
            include __DIR__ . '/../templates/login.html.php';
            $output = ob_get_clean();
        
        }

    }catch (PDOException $e){
        $output = 'error '.$e->getMessage(). '  '.$e->getfile(). ' '. $e->getLine();

    }
    
}else{
    $title = 'Login';
    ob_start();
    include __DIR__. '/../templates/login.html.php';
    $output = ob_get_clean();
    
}

include __DIR__ . '/../templates/layout.html.php';