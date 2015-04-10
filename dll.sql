/*
SQLyog Ultimate v8.8 
MySQL - 5.6.12-log : Database - dllportal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dllportal` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `dllportal`;

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `meta_d` varchar(255) NOT NULL DEFAULT '',
  `meta_k` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `description` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `articles` */

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `post` int(5) NOT NULL DEFAULT '0',
  `author` varchar(100) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `comments` */

/*Table structure for table `lessons` */

DROP TABLE IF EXISTS `lessons`;

CREATE TABLE `lessons` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `meta_d` varchar(255) NOT NULL DEFAULT '',
  `meta_k` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `description` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `lessons` */

insert  into `lessons`(`id`,`title`,`meta_d`,`meta_k`,`date`,`description`,`text`,`author`) values (10,'kernel32.dll','kernel32.dll','DLL, kernel32.dll','2015-02-10','<p>kernel32.dll — динамически подключаемая библиотека, присутствующая во всех 32- и 64-разрядных версиях Microsoft Windows<br></p>','<p>kernel32.dll — динамически подключаемая библиотека, присутствующая во всех 32- и 64-разрядных версиях Microsoft Windows. Она предоставляет приложениям многие базовые API Win32, такие как управление памятью, операции ввода/вывода, создание процессов и потоков и функции синхронизации...</p>','Фируз Хайдаров');

/*Table structure for table `open_source` */

DROP TABLE IF EXISTS `open_source`;

CREATE TABLE `open_source` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `open_source` */

insert  into `open_source`(`id`,`title`,`meta_d`,`meta_k`,`date`,`description`,`text`,`author`) values (2,'123123','123124','124234','2007-01-27','длфотцдафтуадфутаф','lafjenfljnaeflqnefqef','elkfieef poefe');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `page` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `meta_d` varchar(255) NOT NULL DEFAULT '',
  `meta_k` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `settings` */

insert  into `settings`(`id`,`page`,`title`,`meta_d`,`meta_k`,`text`) values (1,'index','Главная','Добро пожаловать на сайт про языки PHP, HTML, CSS','PHP, HTML, CSS','<p>Если говорить простым языком – сайт это некоторое количество информации в виде текста, графики и файлов, которые упорядочены с помощью языка разметки HTML и взаимосвязаны между собой ссылками. </p>\r\n          <p>Вся эта информация находится на специальном сервере и доступна из любой точки мира т.к. она закреплена за определенным “именем” сайта – например, http://www.ruseller.com. Это “имя” кстати, называют – доменом сайта. </p>\r\n          <p>Хостинг – услуга, которая включает в себя место на сервере для Вашего сайта, email адреса, поддержку различных скриптов (счетчиков, голосований и т.д.). Стоит хостинг от 1 до 50$ в месяц в зависимости от предоставляемого места, возможностей и пр.</p>\r\n          <p>При этом не забывайте, что на одном хостинге можно разместить сразу несколько сайтов с разными “именами” (доменами). Сколько именно? Это зависит от тарифа хостинга.</p>\r\n          <p>Пока мы не будем вдаваться в технические тонкости создания самих сайтов, это мы сделаем в последнем письме, а сразу начнём говорить о том, какие достоинства и недостатки есть у владения собственным сайтом.</p>\r\n          <p>Плюсы:</p>\r\n          <p>1. Ваш сайт будет тем местом, где будет собираться Ваша аудитория. <br>\r\n            2. Ваш сайт будет плацдармом для Вашей рассылки.<br>\r\n            3. Ваш сайт будет приносить прибыль с помощью контекстной рекламы.<br>\r\n            4. На своём сайте Вы сможете рекламировать и продавать свои собственные товары и услуги в автоматическом режиме.<br>\r\n            5. Вы сможете получать прибыль, размещая на своем сайте рекламу партнерских товаров.<br>\r\n            6. Вы найдете много новых друзей и единомышленников.<br>\r\n            7. Вы будете больше уважать себя, Вас будут больше уважать окружающие.<br>\r\n            8. Владея сайтом, Вы будите идти в ногу со временем, потому как всем давно известно, что за Интернетом будущее.</p>\r\n          <p>Минусы: <br>\r\n            1. Ежемесячные затраты порядка 5-10$ на хостинг для сайта.<br>\r\n          2. Время, затраченное на создание самого сайта и на дальнейшее регулярное пополнение его свежей</p>'),(2,'articles','ActiveX','ActiveX компоненты','ActiveX компоненты','<p>На этой странице вы найдете итересные статьи о ActiveX компонентах<br>\r\n          <br>\r\n        </p>'),(3,'lessons','DLL','DLL','DLL','<p>На этой странице вы найдете DLL файлы для их изучения и работы с ними.<br>\r\n        </p>'),(4,'contacts','О вас','Страница про автора сайта','автор','<p>Мне 23 года. В 2006 году я закончил Уральский Государственный Горный Университет по специальности АСУ (автоматизация производства с помощью компьютерных технологий). По специальности поработать не удалось, т.к. ещё учась на 5-м курсе я разглядел перспективы онлайн-бизнеса и с головой ушел в эту область.</p>\r\n          <p>В марте 2006-го года, на основе моего хобби (создание сайтов) появился мой главный сайт \"Школа Технического Мастерства Онлайн Бизнесмена\", который и стал \"столбом\" всего моего бизнеса, потому что именно на нём я начал выкладывать различную информацию по технической части ведения бизнеса в сети. Людям эта тема оказалась очень интересной и они начали задавать мне различные вопросы, связанные с технической частью ведения бизнеса в сети.</p>\r\n          <p>Кроме этого, при моём сайте на регулярной основе выходила рассылка \"Инструменты Онлайн Бизнеса\", которая к слову выходит и по сей день. После каждого выпуска, я также получал кучу вопросов и отзывов.</p>\r\n          <p>Естественно во время становления сайта, рассылки, партнерских отношений мною было допущено громадное количество ошибок, которые постоянно меня тормозили.</p>\r\n          <p>На основе этого опыта, на основе вопросов подписчиков (посетителей) сайта и исследованиях рынка, появился мой первый диск \"Все Технические Моменты Онлайн Бизнеса в Видеоформате\", который сразу же стал продаваться высокими темпами и заслужил высокую оценку в глазах клиентов и партнеров, а затем и второй \"Как Создать Информационный Бестселлер на DVD или CD\". </p>\r\n          <p>Несмотря на то, что я уже добился кое-чего в этом деле, я не считаю себя каким-то гуру или экспертом, поэтому в моих материалах Вы не найдете каких-то \"понтов\" и тому подобных вещей. В основном я делюсь теми знаниями, которые сам на практике применяю и которые доказали свою эффективность.</p>\r\n          <p>На мой взгляд, в Интернет-бизнесе может преуспеть 50-70% людей, которые самостоятельно могут включить компьютер, знают что такое Интернет и как им пользоваться, а также обладают огромным желанием создать себе красивую жизнь, в которой нет ужасного словосочетания \"работа на кого-то\". </p>\r\n          <p>Если всё изложенное Выше Вам понравилось и Вы готовы и дальше общаться со мной, то читайте материалы моего сайта, подписывайтесь на журнал и начинайте своё дело, пока не поздно, а я по мере возможности буду давать новую информацию, которая шаг за шагом приведет Вас к успеху.</p>\r\n          <p>С уважением, Евгений Попов.</p>\r\n          <p><br>\r\n              <br>\r\n            </p>'),(5,'open_source','Open Source','Программы, open source','open source, programms','<p>Программы с открытым кодом доступа Open Source.</p>');

/*Table structure for table `userlist` */

DROP TABLE IF EXISTS `userlist`;

CREATE TABLE `userlist` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `userlist` */

insert  into `userlist`(`id`,`user`,`pass`) values (1,'phpuser','php'),(2,'abhep','123');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `surname` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`login`,`password`,`name`,`surname`,`email`) values (8,'123','123','123','123','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
