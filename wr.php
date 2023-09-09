<?php
include('BBcon.php');
include('wrc.php');

if (isset($_POST["submit"])) {
    $PatientName = mysqli_real_escape_string($conn, $_POST['PatientName']);
    $Sex = mysqli_real_escape_string($conn, $_POST['Sex']);
    $Associate_symptoms = mysqli_real_escape_string($conn, $_POST['Associate_symptoms']);
    $Treatment = mysqli_real_escape_string($conn, $_POST['Treatment']);


    // Check if the patient already has an health record
    $stmt = $conn->prepare("insert into healthrecord(name, gender, symptoms, treatment) values(?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $PatientName, $Age, $Sex, $Associate_symptoms, $Diagnosis, $Treatment);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
