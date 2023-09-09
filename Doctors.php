<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="stylesheet" href="Doctors.css">
</head>
<body>
    <div id="navBar">
        <div id="logo"><a href="welcome.html" style="color: rgb(249 115 22)">VITAP Hospitals</a></div>
        <div id="secondHalf">
            <div class="nav"><a href="welcome.php">Home</a></div>
            <div class="nav"><a href="Doctors.php">Doctors</a></div>
            <div class="nav"><a href="About.php">About</a></div>
            <div class="nav"><a href="Contact Us.php">Contact Us</a></div>
            <!-- <div class="nav"><button class="button1"><a href="login.html">Login</a></button></div> -->
            <div class="nav"><button class="button2"><a href="logout.php" style="color: white;">LogOut</a></button></div>
        </div>
    </div>
    <div id="doctorDetails">
        <div ><img src="steve2.jpg" alt="" class="Pic"></div>
        <div class="Text">
            <p>Name : Dr.STHEPHEN STRANGE</p>
            <p>Cabin No : 203</p>
            <p>Specilization : General Surgery</p>
        </div>
        
        <div ><img src="arjun.jpg" alt="" class="Pic"></div>
        <div class="Text">
            <p>Name : Dr.ARJUN REDDY</p>
            <p>Cabin No : 999</p>
            <p>Specilization : Ophthalmology</p>
        </div>

        <div ><img src="johnny3.jpg" alt="" class="Pic"></div>
        <div class="Text">
            <p>Name : Dr.JOHN</p>
            <p>Cabin No : 69</p>
            <p>Specilization : Pathology</p>
        </div>
        
        <div ><img src="bali.jpg" alt="" class="Pic"></div>
        <div class="Text">
            <p>Name : Dr.BALI</p>
            <p>Cabin No : 699</p>
            <p>Specilization : Radiology</p>
        </div>

        <div ><img src="munna.jpg" alt="" class="Pic"></div>
        <div class="Text">
            <p>Name :DR MUNNA BHAI </p>
            <p>Cabin No : 317</p>
            <p>Specilization : Dermatology</p>
        </div>
        
        <!-- <div class="Pic">sd,bsd</div>
        <div class="Text">xzcn</div>

        <div class="Pic">dshflkh</div>
        <div class="Text">dsfn,m</div> -->
    </div>
</body>
</html>