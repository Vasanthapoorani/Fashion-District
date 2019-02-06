<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion district";

// Create connection
$conn =@new mysqli($servername, $username, $password,$dbname);
$sql = "INSERT INTO measurement_detail(cus_id,full_length,slit,shoulder,chest,low_chest,hip,stomach,sheet,hand_full_length,hand_arms,sleeve,bottom_full_length,bottom)
VALUES ('$_POST[cus_id]','$_POST[full_length]','$_POST[slit]','$_POST[shoulder]','$_POST[chest]','$_POST[low_chest]','$_POST[hip]','$_POST[stomach]','$_POST[sheet]','$_POST[hand_full_length]','$_POST[hand_arms]','$_POST[sleeve]','$_POST[bottom_full_length]','$_POST[bottom]')";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: final.php");
$conn->close();	
?>
