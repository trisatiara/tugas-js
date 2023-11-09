<?php 
include 'koneksi.php';

$name = $_POST["name"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];

$result = mysqli_query($conn, "INSERT INTO `customer` (`first_name`, `last_name`, `email`, `phone`, `address`) VALUES ('$first_name', '$last_name', '$email', '$phone', '$address');");

header("Location:index.php");

?>