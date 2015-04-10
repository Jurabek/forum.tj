<?php 
include ("blocks/bd.php"); /*Соединяемся с базой*/
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='open_source'",$db);
$myrow = mysql_fetch_array($result); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">
<meta name="description" content="<?php echo $myrow['meta_d']; ?>">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><?php echo $myrow['title']; ?></title>
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
        <?php echo $myrow['text']; ?>
        
        <?php  

$result = mysql_query ("SELECT id,title,description,author,date FROM open_source",$db);

$myrow = mysql_fetch_array ($result);

do {
        
printf ("<table align='center' class='lesson'>
         
     <tr>
         <td class='lesson_title'>
     <p class='lesson_name'><a href='view_open_source.php?id=%s'>%s</a></p>
     <p class='lesson_adds'>Дата добавления: %s</p>
     <p class='lesson_adds'>Автор : %s</p></td>
         </tr>
         
     <tr>
         <td>%s</td>
         </tr>
         
     </table><br><br>", $myrow["id"], $myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"]); 
            
}

while ($myrow = mysql_fetch_array ($result)); 
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
