<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'MyDB');
   define('tbl_name', 'login');
   $db = mysqli_connect(DB_SERVER,tbl_name,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
