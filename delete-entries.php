<?php
$conn = mysqli_connect("localhost","root","","mothers_dish");
$result = mysqli_query($conn,"delete from entries");
echo "<script>alert('All the entries are deleted');window.location='index.html'</script>";
?>