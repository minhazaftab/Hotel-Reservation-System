<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body class="bg">
    <nav class="navbar background">
        <div class="logo"><img src="img/Logo.png" alt="Logo"></div>
            <p class="logoName">Minhaz and Deka Hotel</p>
        <ul class="nav-list">
            <li><a href="Home.html">Home</li>
            <li><a href="Accomodation.html">Accomodation</li>
            <li><a href="Facilities.html">Facilities</li>
            <li><a href="Reservation.php">Reservation</li>
            <li><a href="Gallery.html">Gallery</li>
            <li><a href="Contact.html">Contact Us</li>
        </ul>
        <div class="rightNav">
            <a href="Reservation.php"><button class="btn btn-sm">BOOK NOW!</button></a>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br>

                <div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Please visit our Hotel for verification</h3></center>
					<br />
					<center><h4>THANK YOU!</h4></center>
					<br />
					<center><a href = "Home.html" class = "btn"> Back to Homepage</a></center>
				</div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="footBar background">
        <div class="logo2"><img src="img/Logo.png" alt="Logo"></div>
            <div class="contDets">
                <p class="copyright">© 2021 MD Hotel</p>
                <p class="phone">📞 +919811876424</p>
                <p class="mail">📧 aftabminhaz17@gmail.com</p>
            </div>
        <div class="rightFoot">
            <a href="Contact.html"><button class="btn1 btn-sm1">CONTACT US!</button></a>
        </div>
    </footer>
    <?php
require_once 'connectionmain.php';

//Now check connection
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $nam = $_POST['nam'];
    $addr = $_POST['addr'];
    $sta = $_POST['sta'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $roomType = $_POST['roomType'];
    $arrDate = $_POST['arrDate'];
    $depDate = $_POST['depDate'];

    $sql = $conn->query("INSERT INTO `guest` (nam, addr , sta, mobile, email, roomType, arrDate, depDate)
    VALUES('$nam', '$addr', '$sta', $mobile, '$email', '$roomType', '$arrDate', '$depDate')") or die(mysqli_error($conn));

    if (mysqli_query($conn, $sql))
    {
        echo "<script> alert('Submitted successfully!')</script>";
    }
    else
    {
        echo "<script> alert('Booking Successful!')</script>" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>