<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="home.css">
<title>Train Details</title>
</head>
<body>
<!--body part 2-->
<table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
            <td width="auto"><div align="center"><p><strong>ID</strong></p></div></td>
            <td width="auto"><div align="center"><p><strong>Name</strong></p></div></td>
            <td width="auto"><div align="center" ><p><strong>City</strong></p></div></td>
            <td width="auto"><div align="center"><p><strong>Specialisation</strong></p></div></td>
      <td width="auto"><div align="center"><p><strong>Phone Number</strong></p></div></td>

        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbmx");
      $sql="select * from doctors INNER JOIN customer WHERE doctors.dcity = customer.ccity";
      $q2=mysqli_query($conn,$sql);
      $sql2="select count(*) as total from doctors";
      $q3=mysqli_query($conn,$sql2);
      $data=mysqli_fetch_assoc($q3);

      while($row=mysqli_fetch_array($q2)) :
        $k=$row['doctor_id'];
        $k1=$row['dname'];
        $l=$row['dcity'];
        $l1=$row['dspec'];
        $m=$row['dpno'];

    echo "<tr bgcolor='#fffff'>
          <td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>
          <td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>
          <td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>
          <td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>
           <td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>
         </tr>";
		endwhile;
        	echo "<h3>Total Doctors :" .$data[total]. "</h3>";
        
        ?>
</table>
</body>
</html>
