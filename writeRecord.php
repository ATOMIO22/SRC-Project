<?php
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Health Record</title>
    <link rel="stylesheet" href="writeRecord.css">
</head>
<body>
    <div id="navBar">
        <div id="logo"><a href="empWelcome.html" style="color: rgb(22, 211, 249) ">VITAP Hospitals</a></div>
        <div id="secondHalf">
            <div class="nav"><a href="doctorpage.php">Home</a></div>
            <div class="nav"><a href="Doctors.php">Doctors</a></div>
            <div class="nav"><a href="About.php">About</a></div>
            <div class="nav"><a href="Contact Us.php">Contact Us</a></div>
            <!-- <div class="nav"><button class="button1"><a href="login.html">Login</a></button></div> -->
            <div class="nav"><button class="button2"><a href="logout.php" style="color: white;">LogOut</a></button></div>
        </div>
    </div>
    <div id="out">
        <div class="in"><img src="docRecord.jpeg" alt=""></div>
        <div class="in" id="forForm">
            <center>
                <form action="" method="post">
                    <label for="PatientName">Enter patient Name : </label>
                    <input type="text" name="PatientName" id="PatientName" placeholder="" required /><br />
                    <label for="Age">Enter the age of Patient : </label>
                    <input type="number" name="Age" id="Age" required /><br />
                    <label for="Sex">Select the gender of Patient : </label>
                    <select name="Sex" id="Sex">
                        <option value="">--- Please select an option ---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select><br><br>
                    <label for="Complaint">Complaint : </label>
                    <input type="text" name="Complaint" id="Complaint" placeholder="" rows="1" cols="20" required><br>
                    <label for="Associate symptoms">Associate symptoms : </label>
                    <input type="text" name="Associate_symptoms" id="Associate_symptoms" placeholder="" rows="1" cols="20" required><br>
                    <label for="Diagnosis">Diagnosis : </label>
                    <input type="text" name="Diagnosis" id="Diagnosis" placeholder="" rows="1" cols="20" required><br>
                    <label for="Treatment">Treatment : </label>
                    <input type="text" name="Treatment" id="Treatment" placeholder="" rows="1" cols="20" required><br>
                    <label for="fileInsert"></label>
                    <input type="file" name="fileInsert" id="fileInsert"><br>
                    <input type="submit" id="btn" value="Book Appointment" name = "submit"/>
                </form>
            </center>
        </div>
    </div>
</div>
    
</body>
</html>