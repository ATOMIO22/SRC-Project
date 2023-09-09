

<!DOCTYPE html>
<html lang="en">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="dblood.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="navBar">
    <div id="logo"><a  style="color: rgb(22, 200, 249)">VITAP Hospitals</a></div>
        <div id="secondHalf">
        <div class="nav"><a href="doctorpage.php">Home</a></div>
            <div class="nav"><a href="Doctors.php">Doctors</a></div>
            <div class="nav"><a href="About.php">About</a></div>
            <div class="nav"><a href="Contact Us.php">Contact Us</a></div>
            <div class="nav"><button class="button2" ><a href="logout.php" style="color : white">Logout</a></button></div>
        </div>
    </div>

    <div id="outerbox">
        
        <p id="search" style="margin: 30px;">BLOOD BANK INFO</p>
        <table>
        <th> S.NO </th> 
        <th> BLOOD TYPE</th>
        <th> CAPACITY </th>
        <th> AVAILABILITY </th>  
<table>
        <?php
include("BBcon.php");
include("BB.php");


$sql = "SELECT user, bloodtype, capacity, availability FROM bloodbank";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["user"]. "</td><td>" . $row["bloodtype"] . "</td><td>". $row["capacity"]. "</td><td>". $row["availability"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();

?>
<br> </br> <br> </br>
        </table>
            
        <div style="margin-top: 40px;">
        <p class="quote">"The blood you donate gives someone another chance at life.</p>
        <p class="quote"> One day that someone may be close relative, a friend, a loved one-- or even you"</p>
        </div>
    </div>
    
</body>
</html>