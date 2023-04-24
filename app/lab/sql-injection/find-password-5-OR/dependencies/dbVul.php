<?php

    $host = 'localhost';
    $db_name='login';
    $charset ='utf8';
    $username = 'root';
    $password = 'malvadobob';


$mysqli = new mysqli($host, $username, $password, $db_name);

/* Check connection before executing the SQL query */
if ($mysqli->connect_errno) {
printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}

?>