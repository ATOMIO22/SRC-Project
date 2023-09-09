


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="BloodBank.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="navBar">
    <div id="logo"><a  style="color: rgb(249 115 22)">VITAP Hospitals</a></div>
        <div id="secondHalf">
        <div class="nav"><a href="welcome.php">Home</a></div>
            <div class="nav"><a href="Doctors.php">Doctors</a></div>
            <div class="nav"><a href="About.php">About</a></div>
            <div class="nav"><a href="Contact Us.php">Contact Us</a></div>
            <div class="nav"><button class="button2" ><a href="logout.php" style="color : white">Logout</a></button></div>
        </div>
    </div>

    <div id="outerbox">
        
        <p id="search" style="margin: 30px;">Require Blood?</p>
        <form action="" method="post">
            <select name="BloodSelectedGroup">
                <option value="NONE">NONE</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            
    
            </select>
            
            <input type="submit" id="btn" value="Search" name = "submit" class="fa-solid fa-magnifying-glass" style="color: orange; position:absolute; top: 68%; width: 300px; height: 35px; border-radius: 9px;"> 
            <br> </br>
    <br> </br>
           
           <?php
include("BBcon.php");
include("BB.php");
if (isset($_POST['submit'])) {

$selectedBloodGroup = $_POST['BloodSelectedGroup'];

    // Query the database to find matching records
    $query = "SELECT availability FROM bloodbank WHERE bloodtype = '$selectedBloodGroup'";
    $result = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<span style="color:#AFA;text-align:center;The blood group availability is :"></span>';
        // echo "The blood group availability is : "; 
        echo '<p class="variablecolor">The blood group availability is :</p>';   echo $row['availability'];
       // echo $row['availability'];
        // For example: echo $row['donor_name'], $row['donor_contact'], etc.
    }


}
?>

        </form>
            
        <div style="margin-top: 40px;">
        <p class="quote">"The blood you donate gives someone another chance at life.</p>
        <p class="quote"> One day that someone may be close relative, a friend, a loved one-- or even you"</p>
        </div>
    </div>
    
</body>
</html>