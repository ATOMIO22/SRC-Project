<?php

include'connect.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM sign WHERE username = 'user' OR email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: welcome.php");
    }
    else{
        echo  '<script>
        window.location.href = "login.php";
        alert("Incorrect email or password")
    </script>';
    }
  }
  else{
    echo  '<script>
                        window.location.href = "login.php";
                        alert("User not registered ")
                    </script>';
  }
}
?>