<?php
     $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
     $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

     $pass = md5($pass."adffjaj2j45451");

    $mysql = new mysqli('localhost','root','','register-bd');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `pass`='$pass'");

    $user = $result->fetch_assoc();

    if(count($user) == 0){
        echo "The user is not found";
        exit();
    }

    setcookie('user',$user['name'], time() + 3600, "/");
        
        

    $mysql->close();

    header('Location:/project4/');

?>