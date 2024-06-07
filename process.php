
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if(isset($_POST['save'])){
}
$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$blood_quantity=$_POST['blood_quantity'];
$area_collected=$_POST['area_collected'];
$number_of_donners= $_POST['number_of_donners'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$sql = "INSERT INTO donors (name, blood_group,blood_quantity,area_collected,number_of_donners,contact_number,email) VALUES ('$name','$blood_group','$blood_quantity','$area_collected','$number_of_donners','$contact_number','$email')";
if (mysqli_query($conn, $sql)) {
    echo "Record added succesfully";
} else {
    echo "Error";
}
?>
