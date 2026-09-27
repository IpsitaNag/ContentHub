<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="contenthub";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn){
    die("Database is not connected.");
}

?>