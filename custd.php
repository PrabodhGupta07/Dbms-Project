<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Customer Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><strong>ID</strong></div></td>
			<td width="auto"><div align="center"><strong>Name</strong></div></td>
			<td width="auto"><div align="center" ><strong>Location</strong></div></td>
      <td width="auto"><div align="center" ><strong> Drop Location</strong></div></td>
			<td width="auto"><div align="center"><strong>Email</strong></div></td>
          <td width="auto"><div align="center"><strong>Phone Number</strong></div></td>
         <td width="auto"><div align="center"><strong>Payment Method</strong></div></td>
        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");

	  $sql="select * from customer order by customer_id";
    $sql2 = "SELECT count(*) as total from customer";
    $q3=mysqli_query($conn,$sql2);
	  $q2=mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($q3);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['customer_id'];
		$k1=$row['cname'];
		$l=$row['clocation'];
    $y=$row['dropl'];
		$l1=$row['email_id'];
		$m=$row['cphone_no'];
		$n=$row['payment'];

    echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
            echo"<td width='auto'><div align='center'><strong><sd>".$y."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>";
  	       echo"<td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>";
           echo"<td width='auto'><div align='center'><strong><sd>".$n."</sd></strong></div></td>";
        echo" </tr>
              </tbody>";
	}
  echo "<h2>Total Customer : " .$data[total]. "</h2>";
		?>
</table>
</body>
</html>
