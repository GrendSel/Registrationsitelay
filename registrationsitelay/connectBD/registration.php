<?php
    require_once 'connect.php';
    
    $login = htmlspecialchars($_POST['name']);
    $login = urldecode($_POST['name']);
    $login = trim($login);

    $mail = htmlspecialchars($_POST['email']);
    $mail = urldecode($_POST['email']);
    $mail = trim($mail);

    $password = htmlspecialchars($_POST['pass']);
    $password = urldecode($_POST['pass']);
    $password = trim($password);

    $password_right = htmlspecialchars($_POST['pass_right']);
    $password_right = urldecode($_POST['pass_right']);
    $password_right = trim($password_right);

    if($password === $password_right){

        $password = md5($password); //Шифрование пароля
        mysqli_query($connect, "INSERT INTO `sitelay` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$mail', '$password')");
        ?><script>alert('Регистрация прошла успешно!');</script> <?php
        header('Refresh: 0; url=../avtorization.html');
    }else{ ?> 
        <script>alert('Пароль введен неправильно!');</script> 
        <?php
        header('Refresh: 0; url=../index.html');
    }
?>
