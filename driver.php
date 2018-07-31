<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=reset] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #45a049;
}

input[type=button] {
    background-color: #4CAF50;
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
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>
<div class="container">
  <form method="post" action="insert.php">
    <label for="fname"> Name</label>
    <input type="text" id="Name" name="name" placeholder="Your name..">
    <label for="fname"> Age</label>
    <input type="text" id="age" name="age" placeholder="Your age..">
    <label for="fname"> Location</label>
    <input type="text" id="Location" name="location" placeholder="Your Location">
    <label for="fname"> Licence Number	</label>
    <input type="text" id="Licence Number" name="licencenumber" placeholder="Your Licence Number"maxlength="9">
    <label for="Phone Number"> Phone Number</label>
    <input type="text" id="Phone Number" name="mobno" placeholder="Your Phone Number..." maxlength="10">


    </select>



    <input type="submit" value="Submit" name="submit">
      <input type="reset" value="Reset" name="reset">
    <a href="adhome.php"><input style="margin:0px 10px 0px 1150px;" type="button" value="Back to Home"></a>
  </form>
</div>

</body>
</html>
