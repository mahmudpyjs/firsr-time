<?php

/* $servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = mysqli_connect($localhost, $root, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} */

$con=mysqli_connect("localhost", "root", "") or die ("unable to connect");
mysqli_select_db($con, 'samplelogindb2'); 
/* $con=mysqli_connect("localhost:8080", "root", "");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} */

/* $link = mysqli_connect("localhost:3306", "root", "", "samplelogin");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link); */

/* $connection = mysqli_connect("localhost","root","password","samplelogin");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } */
?>