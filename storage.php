
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(isset($_POST['save'])){
}
$date_received = $_POST['date_received'];
$expired_date=$_POST['expired_date'];

$sql = "INSERT INTO blood_storage ( date_received,expired_date) VALUES('$date_received','$expired_date')";

if (mysqli_query($conn, $sql)) {
    echo "Record added succesfully";
} else {
    echo "Error";
}
?>