<?php
	require_once 'connectionmain.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->query("UPDATE `admin` SET `name` = '$name', `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error($conn));
		header("location:account.php");
	}	