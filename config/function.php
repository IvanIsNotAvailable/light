<?php 
require('dbcon.php');

function numberOfstudent($con){
	$result=mysqli_query($con,"SELECT count(*) as total from Students");
	$data=mysqli_fetch_assoc($result);
	echo $data['total'];
}
function numberOfenroll($con){
	$result=mysqli_query($con,"SELECT count(*) as total from enroll");
	$data=mysqli_fetch_assoc($result);
	echo $data['total'];
}

function insertStudent($con){
	$name = strtolower($_POST['name']);
	$grade = strtolower($_POST['grade']);
	$guardian = strtolower($_POST['guardian']);
	$ph_no = $_POST['ph_no'];
	$guardian_ph = $_POST['guardian_ph'];
	$passport = strtolower($_POST['passport']);
	$email = $_POST['email'];
	$subjects = strtolower($_POST['subjects']);
	$date = date("Y-m-d");
	$sql = "insert into students (student_name,guardian_name,student_ph,guardian_ph,passport_nic,subjects,grade,email,date) values ('$name','$guardian','$ph_no','$guardian_ph','$passport','$subjects','$grade','$email','$date')";
	if (mysqli_query($con,$sql)){
		echo "<script>alert('Successfully inserted data')</script>";
	}else {
		echo "<script>alert('Data can't be inserted')</script>";
	};
};

function enrollStudent($con){
	$name = strtolower($_POST['name']);
	$grade = strtolower($_POST['grade']);
	$guardian = strtolower($_POST['guardian']);
	$ph_no = $_POST['ph_no'];
	$guardian_ph = $_POST['guardian_ph'];
	$email = $_POST['email'];
	$subjects = strtolower($_POST['subjects']);
	$address = $_POST['address'];
	$date = date("Y-m-d");
	$sql = "insert into enroll (name,guardian,ph_no,guardian_ph,address,subjects,grade,email,date) values ('$name','$guardian','$ph_no','$guardian_ph','$address','$subjects','$grade','$email','$date')";
	if (mysqli_query($con,$sql)){
		echo "<script>alert('Successfully inserted data')</script>";
	}else {
		echo "<script>alert('Data can't be inserted')</script>";
	};

}


if (isset($_POST['register'])){
	insertStudent($con);
}
elseif (isset($_POST['enroll'])){
	enrollStudent($con);
};


?>
