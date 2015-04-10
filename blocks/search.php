<?php
include("blocks/bd.php");

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sphp');
if (!mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
    exit('Cannot connect to server');
}
if (!mysql_select_db(DB_NAME)) {
    exit('Cannot select database');
}
mysql_query('SET NAMES utf8');
function search($query)
{
    $query = trim($query);
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);
    if (!empty($query)) {
        if (strlen($query) < 4) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else {
            $q = ("SELECT ispolniteli.ispolnitel, tracks.music_n, tracks.`link_fail` FROM ispolniteli, tracks WHERE ispolnitel LIKE '%$query%' OR music_n LIKE '%$query%';");
            $result = mysql_query($q);
            if (mysql_affected_rows() > 0) {
                $row = mysql_fetch_assoc($result);
                $num = mysql_num_rows($result);
                $text = '<p class="text_c">По запросу <b>' . $query . '</b> найдено совпадений: ' . $num . '</p>';
                do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = ("SELECT ispolnitel, music_n, id_janr, id_format,date_d FROM ispolniteli, tracks;");
                    $result1 = mysql_query($q1);
                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }
                    $text = $text . '<p>' . $row['ispolnitel'] . ' - ' . $row1['music_n'] . ' ' . '<a href="">Скачать</a>' . '</p>';
                    //'<p><a href="'.$row1['music_n']></a></p>;
                    //.'/'.$row['singer'].'/'.$row['group'].'" title="'.$row['meta_k'].'"></a></p>';
                } while ($row = mysql_fetch_assoc($result));
            } else {
                $text = '<p class="text_w">По запросу <b>' . $query . '</b> ничего не найдено </p>';
            }
        }
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }
    return $text;
}

?>
<?php
if (!empty($_POST['query'])) {
    $search_result = search($_POST['query']);
    echo $search_result;
}
?>