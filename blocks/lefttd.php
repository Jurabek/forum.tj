<td width="182px" valign="top" class="left">
    <p align="center" class="title">Меню</p>

    <div id="coolmenu">
        <a href="index.php">Главная</a>
        <a href="lessons.php">Dll ФАЙЛЫ</a>
        <a href="articles.php">ACTIVEX КОМПОНЕНТЫ</a>
        <a href="open_source.php">Open Source</a>
        <a href="articles.php">Форум</a>
        <a href="contacts.php">О нас</a>

        <p align="center" class="title">Авторизация</p>

        <div id="coolmenu">
            <?php
               if(isset($_SESSION['user'])){
                   echo "<a href='blocks/deauthorize.php'>Выход</a>";
               }else{
                   include("form_auth.php");
                   echo "<a href='registration.php'>Регистрация</a>";
               }
            ?>
        </div>
    </div>
    <div>
        <!--<form action="search.php" method="post" name="form_search">
        <p>
            Поисковый запрос должен быть не менее 4-х символов.
        </p>
        <p>
            <input name="textbox_search" type="text" size="15" maxlength="40">
            <br> <br>
            <input name="submit_search" type="submit" value="Поиск">
        </p>
            -->
        </form>
    </div>
    </div>
</td>