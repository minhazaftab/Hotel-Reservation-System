<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="project";

$conn=mysqli_connect($server_name, $username, $password, $database_name);
//Now check connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $add = $_POST['add'];
    $state = $_POST['state'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $roomType = $_POST['roomType'];
    $arrDate = $_POST['arrDate'];
    $depDate = $_POST['depDate'];

    $sql_query = "INSERT INTO hotelmd (name, add, state, mobile, email, roomType, arrDate, depDate)
    VALUES($name, $add, $state, $mobile, $email, $roomType, $arrDate, $depDate)";

    if (mysqli_query($conn, $sql_query))
    {
        echo "Submitted successfully!";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>