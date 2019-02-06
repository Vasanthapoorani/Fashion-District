<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion district";

// Create connection
$conn =@new mysqli($servername, $username, $password,$dbname);
$sql = "INSERT INTO user_details(name,mobile_no,cus_id,material_type,order_date,delivery_date,total_cost,advance_amount,style,neck_design)
VALUES ('$_POST[name]','$_POST[mobile_no]','$_POST[cus_id]','$_POST[material_type]','$_POST[order_date]','$_POST[delivery_date]','$_POST[total_cost]','$_POST[advance_amount]','$_POST[style]','$_POST[neck_design]')";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include "Fashion District.html";
$conn->close();	
?>