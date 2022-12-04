<?php

include_once('dbcon.php');

$name = strtolower($_POST['name']);
$grade = strtolower($_POST['grade']);
$guardian = strtolower($_POST['guardian']);
$ph_no = $_POST['ph_no'];
$guardian_ph = $_POST['guardian_ph'];
$passport = strtolower($_POST['passport']);
$email = $_POST['email'];
$subjects = strtolower($_POST['subjects']);
$date = date("Y-m-d");

if (isset($_POST['register'])){
    $sql = "insert into students(student_name,guardian_name,student_ph,guardian_ph,passport_nic,subjects,grade,email,date)
            values ('$name','$guardian','$ph_no','$guardian_ph','$passport','$subjects','$grade','$email','$date')";

    if ($con->query($sql) === TRUE) {
        echo '<script>alert("New record created successfully")</script>';}
    else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Error")</script>';
    };
    $con->close();
}
?>