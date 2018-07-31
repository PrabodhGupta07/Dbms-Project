<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Container Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><p><strong>Package ID</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Container Item</strong></p></div></td>
			<td width="auto"><div align="center" ><p><strong>Weight</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Departure Port</strong></p></div></td>
      <td width="auto"><div align="center"><p><strong>Arrival Port</strong></p></div></td>
          <td width="auto"><div align="center"><p><strong>Ship Name</strong></p></div></td>

        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");

	  $sql="select * from driver";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$k=$row['package_id'];
		$k1=$row['cont_item'];
		$l=$row['weight'];
		$l1=$row['dept_port'];
		$m=$row['arr_port'];
		$n=$row['s_name'];

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
