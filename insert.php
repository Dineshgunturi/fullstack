<?php

$conn = new mysqli("localhost","root","","studentdb");

if($conn->connect_error)
{
die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$department = $_POST['department'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students(name,email,dob,department,phone)
VALUES('$name','$email','$dob','$department','$phone')";

$conn->query($sql);

echo "Student Registered Successfully";

?>