<?php
$servername="localhost";
$username="root";
$password="";
$db="purchase";
//create connection
$conn = new mysqli($servername,$username,$password,$db);
//check connection
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}