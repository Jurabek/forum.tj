<?php include ("lock.php"); 
mysql_query("set names utf8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Страница добавления нового урока</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
<!--Подключаем шапку сайта-->
<?php include("blocks/header.php");   ?> 
  <tr>
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
<!--Подключаем левый блок сайта-->
<?php include ("blocks/lefttd.php");  ?>      
        <td valign="top">
       <form name="form1" method="post" action="add_article.php">
         <p>
           <label>Введите название статьи<br>
             <input type="text" name="title" id="title">
             </label>
         </p>
         <p>
           <label>Введите краткое описание статьи<br>
           <input type="text" name="meta_d" id="meta_d">
           </label>
         </p>
         <p>
           <label>Введите ключевые слова для статьи<br>
           <input type="text" name="meta_k" id="meta_k">
           </label>
         </p>
         <p>
           <label>Введите дату добавления статьи<br>
           <input name="date" type="text" id="date" value="2007-01-27">
           </label>
         </p>
         <p>
           <label>Ведите краткое описание статьи с тэгами абзацев
           <textarea name="description" id="description" cols="40" rows="5"></textarea>
           </label>
         </p>
         <p>
           <label>Введите полный текст статьи с тэгами
           <textarea name="text" id="text" cols="40" rows="20"></textarea>
           </label>
         </p>
         <p>
           <label>Введите автора статьи<br>
           <input type="text" name="author" id="author">
           </label>
         </p>
         <p>
           <label>
           <input type="submit" name="submit" id="submit" value="Занести урок в базу">
           </label>
         </p>
       </form>
       <p>&nbsp;</p>        </td>
      </tr>
    </table></td>
  </tr>
<!--Подключаем нижний графический элемент-->  
<?php  include ("blocks/footer.php");        ?>  
</table>
</body>
</html>
