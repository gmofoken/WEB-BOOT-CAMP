<?php
    include ("./Alt-audio/install.php");
    $npass = $_POST['new-password'];
    $login = $_POST['register'];
/*if ($_POST['register'] == "" || $_POST['old-password'] == "" || $_POST['new-password'] == "" || $_POST['submit'] != "Submit")
{
    echo "ERROR\n";
    return ;
}
else*/{
    mysql_connect($my_host, $my_username, $my_password) or die('Error connecting to MySQL server: ' . mysql_error());
    mysql_select_db($my_database) or die('Error selecting MySQL database: ' . mysql_error());
    $sql = "UPDATE `user` SET `PASSWORD` = 'hello' WHERE 'LOGIN' = 'tset' ";
        if (mysql_query($conn, $sql))
        {
        echo "1";
        }
        else
        {
        echo "13";
        }
}
?>