<?php
$servername="localhost";
$username="root";
$password="";
$database_name="project";

$conn=mysqli_connect($servername,$username,$password, $database_name);
if(!$conn)
{
die("connection failed : " . mysqli_connect_error());

}
echo "connected susexfully";
?>