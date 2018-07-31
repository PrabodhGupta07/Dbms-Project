<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<title>Reciever Info</title>
<style>
input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 6px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #880000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: purple;
}
input[type=reset] {
    background-color: #880000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: purple;
}

input[type=button] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
label{
    font-family:courier;
}
</style>
</head>
<body>

<h2>Reciever Information</h2>
<div class="container">
  <form method="post" action="insertrec.php"><br>
	<label for="fname"> Reciver Name</label><br>
    <input type="text" id="r_name" name="r_name" placeholder="Name...."><br>
    <label for="fname"> Reciver ID</label><br>
    <input type="text" id="r_id" name="r_id" placeholder="ID No.... "><br>
    <label for="city"> Reciever Address</label><br>
    <input type="text" id="r_address" name="r_address" placeholder="Reciever's Address...."><br>
    <label for="from"> Mobile No.</label><br>
    <input type="text" id="r_mobno" name="r_mobno" placeholder="Mobile No...."><br>    </select>



    <input class="button buttons" type="submit" value="Submit" name="submit">
      <input class="button buttons" type="reset" value="Reset" name="reset">
    <a href="adhome.php"><input class="" ass="button buttons" style="margin:0px 10px 0px 1150px;" type="button" value="Back to Home"></a>
  </form>
</div>

</body>
</html>
