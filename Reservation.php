<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Reservation</title>
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
    <br><br><br><br>

    <h1 class="resHead">Reservation</h1>
    <br>

    
    <fieldset class="contain">
        <form action="connect2.php" method="post">
            <div class="sub-group">
                <div class="form-group">
                    <label for="nam">Name</label>
                    <input type="text" class="form-control" id="nam" name="nam">
                </div><br><br>
            </div>
            <div class="sub-group">
                <div class="form-group">
                    <label for="addr">Address</label>
                    <input type="text" class="form-control" id="addr" name="addr">
                </div><br><br>
                <div class="form-group">
                <label for="sta">State</label>
                <input type="text" class="form-control" id="sta" name="sta">
                </div><br><br>
            </div>
            <div class="sub-group">    
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                </div><br><br>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div><br><br>
            </div>
            <div class="sub-group">
                <div class="form-group">
                    <label for="roomType">Type of Room</label>
                    <select id="roomType" name="roomType">
                        <option value="executive" name="executive">Executive</option>
                        <option value="suite" name="suite">Suite</option>
                    </select>
                </div><br><br>
            </div>
            <div class="sub-group"> 
                <div class="form-group">
                    <label for="arrDate">Date of Arrival</label>
                    <input type="date" class="form-control" id="arrDate" name="arrDate">
                </div><br><br>
                <div class="form-group">
                    <label for="depDate">Date of Departure</label>
                    <input type="date" class="form-control" id="depDate" name="depDate">
                </div><br><br>
            </div>
            <div class="form-group">
            <input type="submit" value="BOOK!" class="subBtn" name="save">
            </div>
        </form>
    </fieldset>

            </div>
        </div>
    </div>

    <br><br>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1897.035160600816!2d91.71144284708797!3d26.160049426745474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5b08bfc8bd8d%3A0xf95e95496318388c!2sLalit%20Chandra%20Bharali%20College!5e0!3m2!1sen!2sin!4v1639117949754!5m2!1sen!2sin">
    </iframe>
    <br><br>

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