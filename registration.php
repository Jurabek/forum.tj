<?php
include('blocks/bd.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Регистрация</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
    <!--Подключаем шапку сайта-->
    <?php include("blocks/header.php"); ?>
    <tr>
        <td>
            <table width="690" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <!--Подключаем левый блок сайта-->
                    <?php include("blocks/lefttd.php"); ?>
                    <td valign="top">
                        <h2 align="center">Регистрация</h2>

                        <form method="post" action="blocks/registr.php" align="center">
                            <input type='text' name='login' placeholder="Логин"/><br/>
                            <input type='password' name='password' placeholder="Пароль"/><br/>
                            <input type='text' name='name' placeholder="Имя"/><br/>
                            <input type='text' name='surname' placeholder="Фамилия"/><br/>
                            <input type='text' name='e-mail' placeholder="Электронная Почта"/><br/>
                            <input type='submit' name='regist' value="Зарегистрироваться">
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!--Подключаем нижний графический элемент-->
    <?php include("blocks/footer.php"); ?>
</table>
</body>
</html>
