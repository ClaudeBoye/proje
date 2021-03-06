<?php
session_start();
if(!empty($_SESSION['id'])){
    
    header('location:admindashboard.php');

}else{
    if (isset($_POST['username'])){
        try{
            include __DIR__ . '/../includes/connect.php';
            include __DIR__. '/../functions/functions.php';
    
    
            $admin = getViaId($pdo, 'admin', 'name', $_POST['username']);
    
            $user = getViaId($pdo, 'employee', 'name', $_POST['username']);

            $pass = strval(md5($_POST['password'], false));
    
            if(!empty($user) && $pass == $user['password']){
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['name'];
                $_SESSION['password'] = $user['passsword'];
                $_SESSION['prev'] = 'emp';
    
                header('location: admindashboard.php');
    
            }elseif(!empty($admin) && $pass == $admin['password']){
                session_start();
                
                $_SESSION['id'] = $admin['id'];
                $_SESSION['username'] = $admin['name'];
                $_SESSION['password'] = $admin['passsword'];
                $_SESSION['prev'] = 'admin';
    
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

}

include __DIR__ . '/../templates/layout.html.php';