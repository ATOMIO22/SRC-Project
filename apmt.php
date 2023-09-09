<?php
include("aptcon.php");
include("apt.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="BookApmt.css">
</head>
<body>
    <div id="navBar">
        <div id="logo"><a href="welcome.html" style="color: rgb(249 115 22)">VITAPHospitals</a></div>
        <div id="secondHalf">
            <div class="nav"><a href="welcome.php">Home</a></div>
            <div class="nav"><a href="Doctors.php">Doctors</a></div>
            <div class="nav"><a href="About.php">About</a></div>
            <div class="nav"><a href="Contact Us.php">Contact Us</a></div>
            <!-- <div class="nav"><button class="button1"><a href="login.html">Login</a></button></div> -->
            <div class="nav"><button class="button2"><a href="logout.php" style="color: white;">LogOut</a></button></div>
        </div>
    </div>
    <center>
        <h1>BOOK YOUR APPOINTMENT</h1>
    </center>
    <div id="outer">
        <div id="ApmtForm">
            <center>
            <form name="form" action="apt.php" method="POST">
                    <label for="PatientName">Enter patient Name : </label>
                    <input type="text" name="PatientName" id="PatientName" placeholder="Name Of patient" required /><br />
                    <label for="Age">Enter the age of Patient : </label>
                    <input type="number" name="Age" id="Age" required /><br />
                    <label for="Sex">Select the gender of Patient : </label>
                    <select name="Sex" id="Sex">
                        <option value="">--- Please select an option ---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select><br>
                    <label for="DrName">Enter the doctor name you want Appointment with : </label>
                    <input type="text" name="DrName" id="DrName" placeholder="Name Of Doctor" required /><br />
                    <label for="Date_and_Time">Enter Date & Time for Appointment : </label>
                    <input type="datetime-local" name="event_dt" id="Date_and_Time" class = "form-control"><br>
                    <input type="submit" id="btn" value="Book Appointment" name = "submit"/>
                </form>
            </center>
        </div>
    </div>
</body>
</html>