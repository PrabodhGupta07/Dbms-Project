<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Booking Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><strong>Customer Name</strong></div></td>
			<td width="auto"><div align="center"><strong>Customer Phone_NO</strong></div></td>
			<td width="auto"><div align="center" ><strong>Driver Name</strong></div></td>
			<td width="auto"><div align="center"><strong>Driver phone_NO</strong></div></td>
          <td width="auto"><div align="center"><strong>Payment Method</strong></div></td>

        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
     $conn=mysqli_connect("localhost","root","","dbms");

$sql = "SELECT * FROM driver INNER JOIN customer WHERE customer.clocation = driver.dlocation";

$q2=mysqli_query($conn,$sql);


while($row=mysqli_fetch_array($q2))

	{
		$k=$row['cname'];
		$k1=$row['cphone_no'];
		$l=$row['dname'];
		$l1=$row['phone_no'];
		$m=$row['payment'];


    echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>";
  	       echo"<td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>";

        echo" </tr>
              </tbody>";
	}

		?>
</table>
</body>
</html>
