<?php

    $user = $_POST['register'];
    $password = $_POST['password'];
    $mail = $_POST['email'];

include ('../install.php');
if ($POST_['register'] === '' || $POST_['password'] === '' || $POST_['email'] === '')
{
    echo 'There was an errdddor in your submissisdon';
    return ;
}
{
    mysql_connect($my_host, $my_username, $my_password) or die('Error connecting to MySQL server: ' . mysql_error());
    mysql_select_db($my_database) or die('Error selecting MySQL database: ' . mysql_error());
    mysql_query("INSERT INTO `user` (`LOGIN`, `PASSWORD`, `EMAIL`) VALUES ('$user', '$password', '$mail');");
}
    header('Location: http://localhost:8080/rush00/New_arrivals.html');
    ?>