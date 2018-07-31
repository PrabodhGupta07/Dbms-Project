<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Driver Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><strong>ID</strong></div></td>
			<td width="auto"><div align="center"><strong>Name</strong></div></td>
			<td width="auto"><div align="center" ><strong>AGE</strong></div></td>
			<td width="auto"><div align="center"><strong>Licence Number</strong></div></td>
      <td width="auto"><div align="center"><strong>LOCATION</strong></div></td>
          <td width="auto"><div align="center"><strong>Phone Number</strong></div></td>

        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");

	  $sql="select * from driver";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['driver_id'];
		$k1=$row['dname'];
		$l=$row['dage'];
		$l1=$row['licence_no'];
		$m=$row['dlocation'];
		$n=$row['phone_no'];

    echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>";
  	       echo"<td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>";
           echo"<td width='auto'><div align='center'><strong><sd>".$n."</sd></strong></div></td>";
        echo" </tr>
              </tbody>";
	}
		?>
</table>
</body>
</html>
