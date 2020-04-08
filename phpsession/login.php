<?php

session_start(); //start a session

include_once("config.php");

$msg="";

if(isset($_POST['Submit'])) {
    
$result = mysqli_query($mysqli,"SELECT * FROM user_cred WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    
$row  = mysqli_fetch_array($result);
    
if(is_array($row)) {
    
$_SESSION["id"] = $row['id'];
$_SESSION["user_name"] = $row['user_name']; 
    
} else {
$msg = "Invalid input Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}
?>

<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="user_form" method="post" action="" align="center">
<div class="msg"><?php if($msg!="") { echo $msg; } ?></div>
    
<h3 align="center">Login</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="Submit" value="Submit">

</form>
</body>
</html>


