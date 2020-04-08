<?php

session_start();

include_once("config.php");

if(isset($_POST['Submit'])) {
 
$name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);    
    
    
//insert data to database	
$result = mysqli_query($mysqli, "INSERT INTO user_cred(user_name,password) VALUES('$name','$password')");
 
    
echo "<font color='green'>Data added successfully.";
    
header("Location:login.php");
}
?>

<html>
<head>
<title>User Register</title>
</head>
<body>

<form name="reguser" method="post" action="" align="center">
  <fieldset>
    <legend>Sign Up</legend>
    <ul>
        <li>
        <label for="username">Enter username</label>
        <input type="text" name="user_name" id="user_name" required>
        <span class='feedback'></span>
      </li>
      
      <li>
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password" required>
        <span class='feedback'></span>
      </li>
        
      <li>
        <input type="submit" name="Submit" value="Add data"/>
      </li>
    </ul>
  </fieldset>
</form>
    
</body>
</html>    
    