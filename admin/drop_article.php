<?php 
include ("lock.php");
include ("blocks/bd.php");
if (isset($_POST['id'])) {$id = $_POST['id'];}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Обработчик</title>
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
      
         <?php 
if (isset($id))
{
$result = mysql_query ("DELETE FROM articles WHERE id='$id'");

if ($result == 'true') {echo "<p>Выбранный вами ActiveX успешно удален!</p>";}
else {echo "<p>Выбранный вами ActiveX не удален!</p>";}


}    
else 

{
echo "<p>Вы запустили данный фаил без параметра id и поэтому, удалить ActiveX невозможно 
(скорее всего Вы не выбрали чекбокскнопку на предыдущем шаге).</p>";
}
     
     
     
     ?>
         
         
             </td>
      </tr>
    </table></td>
  </tr>
<!--Подключаем нижний графический элемент-->  
<?php  include ("blocks/footer.php");        ?>  
</table>
</body>
</html>
