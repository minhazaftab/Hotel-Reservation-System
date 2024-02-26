<?php

$con = mysqli_connect('localhost','root','','hotelmd');

  if(!$con)
  {
    echo 'Not Connected To Server';
  }

  $Name = $_POST['name'];
  $Address = $_POST['add'];
  $State = $_POST['state'];
  $Mobile = $_POST['mobile'];
  $Email = $_POST['email'];
  $RoomType = $_POST['roomType'];
  $ArrivalDate = $_POST['arrDate'];
  $DepartureDate = $_POST['depDate'];

  $sql = "INSERT INTO reservation (Name, Address, State, Mobile, Email, RoomType, ArrivalDate, DepartureDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


  mysqli_stmt_bind_param($mysqli_stmt, "sssissss", $Name, $Address, $State, $Mobile, $Email, $RoomType, $ArrivalDate, $DepartureDate); 
  $query = mysqli_stmt_execute($mysqli_stmt);
  mysqli_stmt_close($mysqli_stmt); 
  mysqli_close($con); 
  if(!$query)
  {
    echo 'Not Inserted';
  }
  else {
    echo 'Inserted';
  }

  header("refresh:2; url=index.htm"); 

?>