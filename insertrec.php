<?php

$conn=mysqli_connect("localhost","root","","dbms");
$g=$_POST['r_name'];
$h=$_POST['r_id'];
$i=$_POST['r_address'];
$j=$_POST['r_mobno'];

$s="select * from reciever";
$t=mysqli_query($conn,$s);

$w="insert into reciever(r_name,r_id,r_address,r_mobno) values ('$g','$h','$i','$j')";
$qa=mysqli_query($conn,$w);
header('Location:adhome.php');

?>
