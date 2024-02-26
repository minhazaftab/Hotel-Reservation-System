<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Reservation</title>
</head>
<body class="bg">
<?php require_once 'connectionmain.php'?>
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

    <div class = "container">
		<br />
		<br />
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h4>Administrator</h4>
				</div>
				<div class = "panel-body">
					<form method = "POST">
						<div class = "form-group">
							<label>Username</label>
							<input type = "text" name = "username" class = "form-control" required = "required" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" name = "password" class = "form-control" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "login" class = "form-control btn btn-primary">Login</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>
    <?php require_once 'login.php'?>

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
</body>
</html>