<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'magazin';
$mysqli = new mysqli($hostname, $username, $password, $db);
if(!mysqli_connect_errno())
{
    echo 'Conectare reușită la baza de date: '. $db;
    }
    else
    {
    echo 'Nu se poate conecta la baza de date ';
    exit();
}
?>