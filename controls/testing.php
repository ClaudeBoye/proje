<!DOCTYPE html>
<html lang="en">
<head>
    <title>Convert an Integer to a String in PHP</title>
</head>
<body>

<?php
    $text = 'admin123';
    $password = password_hash($text, PASSWORD_DEFAULT);
    echo $password;
?>

</body>
</html>