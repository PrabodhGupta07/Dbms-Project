<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<title>New User Info</title>
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

<h2>Create Booking</h2>
<div class="container">
  <form method="post" action="book.php">
    <label for="fname"> Patient ID</label><br>
    <input type="text" id="pid" name="pid" placeholder="Patient ID"><br>
    <label for="city_id"> Doctor ID</label><br>
    <input type="text" id="did" name="did" placeholder="Doctor ID"><br>
    <label for="Phone Number"> Specialisation</label><br>
    <input type="text" id="spec" name="spec" placeholder="Specialisation" maxlength="10"><br>
    <label for="Email"> Date of booking (DD/MM/YY)</label><br>
    <input type="text" id="date" name="date" placeholder="Booking Date"><br>

    <input type="submit" class="button buttons" value="Submit" name="submit">
      <input type="reset" class="button buttons" value="Reset" name="reset">
    <a href="home.php"><input class="button buttons" style="margin:0px 10px 0px 1150px;" type="button" value="Back to Home"></a>
  </form>
</div>

</body>
</html>
