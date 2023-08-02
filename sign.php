<?php
include('connect.php');

if (isset($_POST["submit"])) {
                              $username = mysqli_real_escape_string($conn, $_POST['user']);
                              $email = mysqli_real_escape_string($conn, $_POST['email']);
                              $password = mysqli_real_escape_string($conn, $_POST['pass']);
                              $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
                      
                      

   
        $sql = "Select * from sign where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from sign where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        
        if($count_user == 0 && $count_email==0){  
            
            if($password == $cpassword) {
    
              
                // Password Hashing is used here. 
                $sql = "INSERT INTO sign(username, email, password) VALUES('$username', '$email','$password')";
                mysqli_query($conn, $sql);
                echo
                '<script> alert("Registration Successful") </script>';


                $result = mysqli_query($conn, $sql);

                echo
                '<script> alert("Registration Successful") </script>';


                if ($result) {
                             
                              echo
                             
                              '<script> 
                              window.location.href = "index.php";
                              alert("Registration Successful")
                  
                   </script>';
    
    

                   
            
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "signup.php";
                    </script>';
            }      
        }  
        else{  
            if($count_user>0){
                echo  '<script>
                        window.location.href = "signup.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        window.location.href = "signup.php";
                        alert("Email already exists")
                    </script>';
            }
        }     
    }






?>