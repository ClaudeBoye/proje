<!DOCTYPE html>
<html lang="en">
<head>
    <title>Convert an Integer to a String in PHP</title>
</head>
<body>

<?php
    $text = '$2y$10$tY6TJTtZTrImkHtGeRsaye9zaQMuMpIu4';
    $password = password_hash($text, PASSWORD_DEFAULT);
    if(password_verify($text, 'admin123') == true){
        echo 'true <br>';
    }else{
        echo 'false <br>';
    }
    echo $password;
?>

</body>
</html>