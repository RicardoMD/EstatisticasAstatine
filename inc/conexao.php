<?php
$ip="localhost";
$user="root";
$pw="";
$db="serv01db";




$link=mysqli_connect($ip, $user, $pw, $db);

if (!$link) {
    echo "Erro na conexão" . mysqli_errno($link);
    exit();
}