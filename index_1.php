<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "root";
    $mysql_database = "login";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
    mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
        ?>
    </body>
</html>
