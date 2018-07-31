<?php

$conn=mysqli_connect("localhost","root","","dbmx");
$f=$_POST['pid'];
$g=$_POST['did'];
$h=$_POST['spec'];
$i=$_POST['date'];

$s="select * from doctors,customer";
$t=mysqli_query($conn,$s);

$w="insert into booking(pid,did,spec,date) values ('$f','$g','$h','$i')";
$qa=mysqli_query($conn,$w);
header('Location:home.php');

?>
