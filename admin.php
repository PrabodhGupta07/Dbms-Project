<html>
<head>
  <link rel="stylesheet" href="home.css">
  <title>Admin Login</title>
<?php
session_start();
 ?>
 <script type="text/javascript">
 	function validateForm()
 {
 var x=document.forms["adlogin"]["email"].value;
 var y=document.forms["adlogin"]["password"].value;
 if (x==null || x==""||y==null || y=="")
   {
   alert("Username or password empty");
   return false;
   }
 }

 </script>
</head>
<body>
  <h1>Cab Booking System</h1>
<br><br><br><a href="home.php" class="button buttons">HOME</a>
  <div class="form" style="border:1px solid black; padding:50px 120px 10px 0px; margin:0px 50px 0px 600px;">
   <form  name="adlogin" action="password.php" method="post" onsubmit="return validateForm()">
                <p  align="center" style="padding:10px 0px 0px 90px;font-size:25px">
  			  <d1><strong><i>Email :</i></strong></d1>
                  <input name="email" type="text" placeholder="Email Address" class="" style="height:35px;width:250px;box-shadow: 4px 4px 4px #008888;padding:0px 0px 0px 0px;margin:0px 0px 0px 10px;" id="email" />
                </p>
                <p  align="center" style="padding:10px 0px 0px 70px;font-size:25px"><br/>
                 <d1><strong><i> Password :</i></strong></d1>
                 <input  align="center" name="password" type="password" placeholder="Enter Password" style="align:center;height:35px;width:250px;padding:0px 0px 0px 0px;margin:0px 0px 0px 10px;box-shadow: 4px 4px 5px #007888 " id="password"/>
                </p>
                <p align="center">
  	 <span> <input type="submit" class="buttons button" name="submit" id="submit"s  tyle="background:none; border:0px;font-size:16px;" align="center" value="Login" />
             </span>
  	</button>
  	<br/>
                 </p>

                </p>
              </form>
    </div>

</body>
 </html>
