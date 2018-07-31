<?php

$conn=mysqli_connect("localhost","root","","dbms");
$g=$_POST['ship_no'];
$h=$_POST['s_name'];
$i=$_POST['s_capt'];
$j=$_POST['sport'];
$k=$_POST['eport'];

$s="select * from ship";
$t=mysqli_query($conn,$s);

$w="insert into ship(ship_no,s_name,s_capt,sport,eport) values ('$g','$h','$i','$j','$k')";
$qa=mysqli_query($conn,$w);
header('location: adhome.php');

?>
