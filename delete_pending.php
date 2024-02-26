<?php
	require_once 'connectionmain.php';
	$conn->query("DELETE FROM `guest` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error($conn));
	header("location:reserve.php");
?>