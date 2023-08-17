<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "khimatu_sneakers";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname));
{
     die("fail to connect!");
}
?>