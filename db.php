<?php
/*
 * Define DB Parameter
 */
$host = "localhost";
$user = "root";
$pass = "matt1980";
$db = "gitproject";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect){
    die("Error Occur: ". mysqli_error($connect));
}