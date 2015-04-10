<?php
session_start();
$db = mysql_connect ("localhost","root","");
mysql_select_db("dllportal",$db);
mysql_query("set names utf8");

function clearData($data){
    return trim(mysql_real_escape_string(($data)));
}

function checkUserLoginAndPassword($login, $password){

    $sql = "SELECT * FROM users where login = '".$login."' AND  password = '".md5($password)."'";

    $result = mysql_query($sql);
    if(mysql_num_rows($result) > 0){
        $user = mysql_fetch_assoc($result);
        return $user;
    }
    else{
        return "Вы не правильно ввели пароль или логин";
    }
}

