<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO logic (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>