<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Train Details</title>
<style>
p{

}
</style>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
			<td width="auto"><div align="center"><p><strong>City ID</strong></p></div></td>
			<td width="auto"><div align="center"><p><strong>Name</strong></p></div></td>
			<td width="auto"><div align="center" ><p><strong>State</strong></p></div></td>

        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");

	  $sql="select * from city";
	  $q2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($q2))
	{
		$z=$row['city_id'];
		$y=$row['city_name'];
		$x=$row['state'];

    echo "<tbody><tr bgcolor='#fffff'>";
          echo"<td width='auto'><div align='center'><strong><sd>".$z."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$y."</sd></strong></div></td>";
          echo"<td width='auto'><div align='center'><strong><sd>".$x."</sd></strong></div></td>";
        echo" </tr>
              </tbody>";
	}
		?>
</table>
</body>
</html>
