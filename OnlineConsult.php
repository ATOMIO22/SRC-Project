<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Consultation</title>
    <link rel="stylesheet" href="OnlineConsult.css">
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
    <div id="out">
        <div class="in" id="image"><img src="online Consult 1.jpg" alt=""></div>
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
                    <label for="problems">Enter your problem : </label><br><br>
                    <textarea name="problems" id="problems" placeholder="please enter your problem" rows="10" cols="60" required></textarea><br>
                    <input type="submit">
                </form>
            </center>
        </div>
    </div>
</body>
</html>