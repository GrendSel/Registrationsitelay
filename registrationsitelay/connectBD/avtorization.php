<?php
    require_once 'connect.php';

    $login = htmlspecialchars($_POST['name']);
    $login = urldecode($_POST['name']);
    $login = trim($login);
 
    $password = md5($_POST['pass']);
    //$password = htmlspecialchars($_POST['pass']);
    //$password = urldecode($_POST['pass']);
    //$password = trim($password);

    $whouser = mysqli_query($connect, "SELECT * FROM `sitelay` WHERE `login`='$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($whouser);
    if(mysqli_num_rows($whouser) > 0) {
        //header('Refresh:0; url=../profile.php');
        //echo ($user['id']);
        ?>
        <h1>Добро пожаловать,<?php echo($user['login'])?></h1>
        
        <?php
        //echo "<pre>";
        //print_r($user);
        //echo "</pre>";

    }else{ ?>
        <script>alert('Логин или пароль введены не верно');</script> 
        <?php
        header('Refresh:0 url=../avtorization.html'); 
    }



?>