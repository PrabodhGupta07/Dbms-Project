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
            <td width="auto"><div align="center" ><p><strong>Location</strong></p></div></td>
      <td width="auto"><div align="center"><p><strong>Licence Number</strong></p></div></td>
        <td width="auto"><div align="center"><p><strong>Phone Number</strong></p></div></td>

        </tr></tbody>
       <!-- </tbody></table>-->
     <?php
        $conn=mysqli_connect("localhost","root","","dbms");
        if( !empty($_POST['location'])){
          $location = $_POST['location'];

        }
        $sql2="SELECT * FROM driver WHERE EXISTS(SELECT clocation FROM customer WHERE clocation=dlocation AND clocation='$location')";
        if($sql2){
      $sql="SELECT * FROM driver WHERE dlocation = '$location'";
      $q2=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_array($q2)) :
        $k=$row['driver_id'];
        $k1=$row['dname'];
        $l=$row['dlocation'];
        $l1=$row['licence_no'];
        $m=$row['phone_no'];

    echo "<tr bgcolor='#fffff'>
          <td width='auto'><div align='center'><strong><sd>".$k."</sd></strong></div></td>
          <td width='auto'><div align='center'><strong><sd>".$k1."</sd></strong></div></td>
          <td width='auto'><div align='center'><strong><sd>".$l."</sd></strong></div></td>
          <td width='auto'><div align='center'><strong><sd>".$l1."</sd></strong></div></td>
           <td width='auto'><div align='center' ><strong><sd>".$m."</sd></strong></div></td>
         </tr>";

    endwhile;
  }
        ?>
</table>
</body>
</html>
