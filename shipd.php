<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Ship Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><strong>Ship No.</strong></div></td>
			<td width="auto"><div align="center"><strong>Ship Name</strong></div></td>
			<td width="auto"><div align="center"><strong>Ship Captain</strong></div></td>
			<td width="auto"><div align="center" ><strong>Start Point</strong></div></td>
			<td width="auto"><div align="center"><strong>End Point</strong></div></td>
          </tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");

	  $sql="select * from ship";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['ship_no'];
		$k1=$row['s_name'];
		$m=$row['s_capt'];
		$l=$row['sport'];
		$l1=$row['eport'];

    echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$m."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>";
  	       echo"<td width='auto'><div align='center' ><strong><sd>".$l1."</sd></strong></div></td>";
        echo" </tr>
              </tbody>";
	}
		?>
</table>
</body>
</html>
