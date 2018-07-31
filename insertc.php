<?php
$conn=mysqli_connect("localhost","root","","dbms");
$a=$_POST['name'];
$b=$_POST['location'];
$c=$_POST['mobno'];
$g=$_POST['drop'];
$d=$_POST['email'];
$e=$_POST['Paymenttype'];

$s="select * from customer where email='$d'";
$t=mysqli_query($conn,$s);

$w="insert into customer(cname,clocation,dropl,email_id,cphone_no,payment) values ('$a','$b','$g','$d','$c','$e')";
$qa=mysqli_query($conn,$w);
header('Location:home.php');
