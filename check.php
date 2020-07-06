<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "invalid login length";
        exit();
    }
    else if (mb_strlen($name) < 1 || mb_strlen($name) > 50) {
        echo "invalid name length";
        exit();
    } 
    
    else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        echo "invalid pass length ( 2 - 6)";
        exit();
    }
    
    $pass = md5($pass."adffjaj2j45451");

    $mysql = new mysqli('localhost','root','','register-bd');
    $mysql->query("INSERT INTO `users`(`login`,`pass`,`name`) VALUES('$login','$pass','$name')");

    $mysql->close();

    header('Location:/project4/');

?>