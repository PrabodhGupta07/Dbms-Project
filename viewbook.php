<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Customer Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
        	<td width="auto"><div align="center"><p><strong>Booking ID</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Patient ID</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Doctor ID</strong></p></div></td>
			<td width="auto"><div align="center" ><p><strong>Specialisation</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Date of Booking</strong></p></div></td>  
        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbmx");

	  $sql="select * from booking";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['bookingid'];
		$k1=$row['pid'];
		$l=$row['did'];
		$l1=$row['spec'];
		$m=$row['date'];

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
