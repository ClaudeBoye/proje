<?php
session_start();

if(empty($_SESSION['id'])){
    $message = 'Please login to access this page';

    header('location: login.php');

}else{
    try{
        include __DIR__ . '/../includes/connect.php';
        include __DIR__ . '/../functions/functions.php';


        if(isset($_POST['id']) ){
            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if($_POST['id'] != $_SESSION['id']){

                $message = 'You are not allowed to access this page';
                ob_start();
                include __DIR__ . '/../templates/admindashboard.html.php';
                $output = ob_get_clean();

            }elseif($_POST['password'] != $_POST['cpassword']){
                
                $message = 'Your password did not correspond';

                if ($_SESSION['prev'] == 'emp'){

                    $curentuser = getViaId($pdo, 'employee', 'id', $_GET['id']);
                }else{
                    $curentuser = getViaId($pdo, 'admin', 'id', $_GET['id']);
                }
    
                ob_start();
    
                include __DIR__ . '/../templates/accountemp.html.php';
    
                $output = ob_get_clean();

            }elseif ($_SESSION['prev'] == 'admin'){
                $curentuser = getViaId($pdo, 'admin', 'id', $_POST['id']);
                $params = ['id' => $_POST['id'],'name' => $_POST['username'], 'email' => $_POST['email'], 'password' => $pass, 'phone' => $_POST['phone'],
                            'address' => $_POST['address'], 'gender' => $_POST['gender']];
                
                update($pdo, 'admin', 'id', $params);

                header('location: account.php?id='.$_POST['id']);
            }else{
                $params = ['id' => $_POST['id'],'name' => $_POST['username'], 'email' => $_POST['email'], 'password' => $pass, 'phone' => $_POST['phone'],
                            'address' => $_POST['address'], 'gender' => $_POST['gender']];
                
                update($pdo, 'employee', 'id', $params);

                header('location: account.php?id='.$_POST['id']);
            }
        }else{

            $curentuser = getViaId($pdo, 'employee', 'id', $_GET['id']);

            ob_start();

            include __DIR__ . '/../templates/accountemp.html.php';

            $output = ob_get_clean();
        }

    }catch (PDOException $e){
        $output = $e->getMessage();

    }
}

include __DIR__ . '/../templates/adminlayout.html.php';