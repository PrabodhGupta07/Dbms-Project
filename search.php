<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<title>Doctors search</title>
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
    background-color: 	#FF6347;
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
    background-color:	#FF6347;
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
    background-color: #FF6347;
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

<h2>Search Driver near by</h2>
<div class="container">
  <form method="post" action="searcht.php">
    <label for="city">Enter Location</label><br>
    <input type="text" id="location" name="location" placeholder="Location"><br>


    <input type="submit" class="button buttons" value="Submit" name="submit">
      <input type="reset" class="button buttons" value="Reset" name="reset">
    <a href="home.php"><input class="button buttons" style="margin:0px 10px 0px 1150px;" type="button" value="Back to Home"></a>
  </form>
</div>

</body>
</html>
