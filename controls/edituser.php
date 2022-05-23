<?php

session_start();

if(empty($_SESSION['id'])){

    header('location:login.php');

}else{

    try{

        include __DIR__.'/../includes/connect.php';
        include __DIR__. '/../functions/functions.php';
    
        if(isset($_POST['username'])){
            $pic1 = $_FILES['image1'];
            $pic2 = $_FILES['image2'];
            $pic3 = $_FILES['image3'];
    
            $curcus = getViaId($pdo, 'customers', 'id', $_POST['id']);
    
            if($_FILES['image1']['name'] == ''){
                $img1 = $curcus['userimg1'];
            }else{
                $img1 = imgUploads($pic1);
            }
    
            if($_FILES['image2']['name'] == ''){
                $img2 = $curcus['userimg2'];
            }else{
                $img2 = imgUploads($pic2);
            }
    
            if($_FILES['image3']['name'] == ''){
                $img3 = $curcus['userimg3'];
            }else{
                $img3 = imgUploads($pic3);
            }
            if($_POST['description'] == ''){
                $des = $curcus['description'];
            }else{
                $des = $_POST['description'];    
            }
            if($_POST['pcode'] == ''){
                $pcode = $curcus['pcode'];
            }else{
                $pcode = $_POST['pcode'];    
            }
            
            $params = ['id' => $_POST['id'], 'user_name' => $_POST['username'], 
                        'user_email' => $_POST['email'], 'user_phone' => $_POST['phone'], 
                        'user_address' => $_POST['address'], 'adrcode' => $_POST['region'],
                        'userimg1' => $img1, 'userimg2' => $img2, 'userimg3' => $img3, 'description' => $des,
                        'pcode' => $pcode];
    
            update($pdo, 'customers', 'id', $params);
    
            header('location:edituser.php?id='. $_POST['id']);
    
        }else{
            $title = 'Edit Customer';
    
            $customer = getViaId($pdo, 'customers', 'id', $_GET['id']);

            $location = urlencode($customer['user_address']);
    
            ob_start();
    
            include __DIR__ . '/../templates/edituser.html.php';
    
            $output = ob_get_clean();
        }
    
    }catch (PDOException $e){
        $output = 'the following occured ' .$e->getMessage(). ' at line '. $e->getLine(). ' '.$e->getFile();
        echo $output;
    }
    include __DIR__ . '/../templates/adminlayout.html.php';
}