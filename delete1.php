<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion district";

// Create connection
$conn =@new mysqli($servername, $username, $password,$dbname);
if(isset($_GET['did'])) {
    $delete_id = $_GET['did'];
    $sql = mysqli_query($conn,"DELETE FROM measurement_detail WHERE cus_id= '".$delete_id."'");
    $sql = mysqli_query($conn,"DELETE FROM user_details WHERE cus_id= '".$delete_id."'");
    if($sql) {
        include "index.html";
    } else {
        echo "ERROR";
    }
}
$conn->close();	
?>