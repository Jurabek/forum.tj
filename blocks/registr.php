<?php
include('bd.php');

if (isset($_POST['regist'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['e-mail'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);
    $sql = "insert into users (name, surname, email, password, login) values ('$name','$surname', '$email', '$hashedPassword','$login')";
    $res = mysql_query($sql) or die(mysql_error());
    if ($res) {
        echo 'sabt';
    } else echo 'khatogi';
}
?>