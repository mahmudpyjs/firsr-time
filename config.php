<?php

$con = mysqli_connect("localhost:8080","root","my_password","samplelogindb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>    