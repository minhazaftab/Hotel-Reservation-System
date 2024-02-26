<?php
	$name = $_POST['name'];
    $add = $_POST['add'];
    $state = $_POST['state'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $roomType = $_POST['roomType'];
    $arrDate = $_POST['arrDate'];
    $depDate = $_POST['depDate'];

	//Database connection
	$conn = new mysqli('localhost','root','','project');
	if($conn->connect_error){
		die('Connection Failed!'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT into `guest`(name, add, state, mobile, email, roomType, arrDate, depDate) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssissii",$name, $add, $state, $mobile, $email, $roomType, $arrDate, $depDate);
		$stmt->execute();
		echo "Form Registered Successfully....";
		$stmt->close();
		$conn->close();
	}
?>