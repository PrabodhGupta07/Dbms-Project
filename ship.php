<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<title>Ship Information</title>
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
<body>

<h2>Ship Information</h2>
<div class="container">
  <form method="post" action="insertship.php">
	<label for="fname"> Ship No.</label><br>
    <input type="text" id="ship_no" name="ship_no" placeholder="ID.."><br>
    <label for="fname"> Ship Name</label><br>
    <input type="text" id="s_name" name="s_name" placeholder="Your name.."><br>
    <label for="Phone Number"> Ship Captain</label><br>
    <input type="text" id="s_capt" name="s_capt" placeholder="Your Phone Number..."><br>
	<label for="fname"> Starting Port</label><br>
    <input type="text" id="sport" name="sport" placeholder="Your adress.."><br>
    <label for="Email"> End Port</label><br>
    <input type="text" id="eport" name="eport" placeholder="Your Email..."><br>
	<label for="fname"> Customer ID</label><br>
    <input type="text" id="cid" name="cid" placeholder="ID.."><br>
    </select>



    <input type="submit" class="button buttons" value="Submit" name="submit">
      <input type="reset" class="button buttons" value="Reset" name="reset">
    <a href="home.php"><input class="button buttons" style="margin:0px 10px 0px 1150px;" type="button" value="Back to Home"></a>
  </form>
</div>

</body>
</html>
