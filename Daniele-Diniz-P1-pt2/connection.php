<?php
//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "p1-50";

$connect = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()){
    echo "Erro de conexão: " .mysqli_connect_error();
}
