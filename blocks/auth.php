<?php
include("bd.php");
if(isset($_POST['enter'])){
    $login = clearData($_POST['enter-login']);
    $password = clearData($_POST['enter-password']);
    if(is_array($result = checkUserLoginAndPassword($login, $password))){
        $_SESSION['user'] = $result;
        header("Location: ../index.php");
    }
    else{
        echo $result;
    }
}
