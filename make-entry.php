<?php
$cust_id = $_GET['custId'];
$conn = mysqli_connect("localhost","root","","mothers_dish");
$result = mysqli_query($conn,"select * from entries where cust_id='$cust_id'");
$row = mysqli_fetch_assoc($result);
$cust_result = mysqli_query($conn,"select * from customers where cust_id='$cust_id'");
$cust_row = mysqli_fetch_assoc($cust_result); 
if($row['entry']==0){
    mysqli_query($conn,"insert into entries values($cust_id,1)");   
    echo "<script>alert('".$cust_row['name']." has made his first entry!!!');window.location='make-entry.html'</script>";
}
else if($row['entry']==1){
    mysqli_query($conn,"update entries set entry = 2 where cust_id='$cust_id'");
    echo "<script>alert('".$cust_row['name']." has made his second entry!!!');window.location='make-entry.html'</script>";
}
else{
    echo "<script>alert('".$cust_row['name']." has already appeared 2 times on this day !!!');window.location='make-entry.html'</script>";
}
?>