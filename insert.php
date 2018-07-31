<?php

$conn=mysqli_connect("localhost","root","","dbms");
$f=$_POST['name'];
$g=$_POST['age'];
$h=$_POST['location'];
$i=$_POST['licencenumber'];
$j=$_POST['mobno'];

$s="select * from driver";
$t=mysqli_query($conn,$s);

$w="insert into driver(dname,dage,dlocation,licence_no,phone_no) values ('$f','$g','$h','$i','$j')";
$qa=mysqli_query($conn,$w);
header('Location:home.php');

?>
