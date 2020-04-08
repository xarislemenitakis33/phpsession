<?php
session_start();               
?>

<html>
<head>
<title>User Welcome!</title>
</head>
<body>


    
<?php if($_SESSION["user_name"]){ ?>
<a href="logout.php" title="Logout">Click here to Logout! </a>
<?php } ?>
    
    
    
</body>
</html>