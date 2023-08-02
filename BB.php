

<?php
include'BBcon.php';

$sql = "SELECT availability from bloodbank";
$result = mysqli_query($conn,$sql);
$result_check = mysqli_num_rows($result);
$blood = $_POST["submit"];


  if(isset($_POST["submit"])){
   echo $row['availability']."<br>";                                                         
  }


?>