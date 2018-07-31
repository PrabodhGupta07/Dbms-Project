<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Reciever Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><p><strong>Reciever Name</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Reciever ID</strong></p></div></td>
			<td width="auto"><div align="center" ><p><strong>Reciever Address</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Reciever Mobile No.</strong></p></div></td>
        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");

	  $sql="select * from reciever";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['r_name'];
		$k1=$row['r_id'];
		$l=$row['r_address'];
		$l1=$row['r_mobno'];

    echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>";
        echo" </tr>
              </tbody>";
	}
		?>
</table>
</body>
</html>
