<?php
include('aptcon.php');

if (isset($_POST["submit"])) {
    $PatientName = mysqli_real_escape_string($conn, $_POST['PatientName']);
    $Age = mysqli_real_escape_string($conn, $_POST['Age']);
    $Sex = mysqli_real_escape_string($conn, $_POST['Sex']);
    $DrName = mysqli_real_escape_string($conn, $_POST['DrName']);

    // Check if the patient already has an appointment
    $sql = "SELECT * FROM appointment WHERE name = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $PatientName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count_PatientName = mysqli_num_rows($result);

    if ($count_PatientName > 0) {
        echo '<script> alert("Appointment already exists for this patient") </script>';
    } else {
        // Insert appointment if it doesn't exist
        $insertQuery = "INSERT INTO appointment (name, age, gender, doctor) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insertQuery);
        mysqli_stmt_bind_param($stmt, "siss", $PatientName, $Age, $Sex, $DrName);

        if (mysqli_stmt_execute($stmt)) {
            echo '<script> 
                  window.location.href = "welcome.php";
                  alert("Appointment Successful");
                  </script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>
