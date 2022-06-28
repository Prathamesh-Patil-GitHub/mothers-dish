<?php
$name = $_GET['name'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$conn = mysqli_connect("localhost","root","","mothers_dish");
$result = mysqli_query($conn,"insert into customers values(NULL,'$name','$email','$mobile')");
if($result){
    echo "<script>alert('".mysqli_insert_id($conn)." is the Customer ID of $name');window.location='register-customer.html';</script>";
}
else{
    echo "<script>alert('An unknown error occured in the database');window.location='register-customer.html';</script>";
}
?>