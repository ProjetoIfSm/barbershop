<?php
//Conexão com o banco

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "mydb";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;