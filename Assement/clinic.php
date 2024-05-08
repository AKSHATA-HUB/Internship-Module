<?php
$hostname = "localhost";
// $port = "3307"; 
$con = mysqli_connect($hostname, "root", "root@123", "clinic");

if (!$con) {
    die("Connection error: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$query = "INSERT INTO appointment (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";


if (mysqli_query($con, $query)) {
    echo "Successful";
} else {
    echo "Error: " . mysqli_error($con);
}


mysqli_close($con);
?>
