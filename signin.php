<?php
ob_start();
session_start();
if($_SESSION['email'] != ''){
	
 header('Location: welcome.php');
}
?>
<html>
<head>
<title>signin</title>
<!-- Include CSS file here -->
<link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="bgimg-1">
  <div class="caption">



  <form class="signup" action="signin2.php" method="post">
<h3>Sign In</h3>


	<label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your email address..">


	<label for="pass">Password</label>
    <input type="text" id="pass" name="pass" placeholder="Enter password..">

<br></br>
	

  
    <input type="submit" name="signin" value="Sign In">
  </form>
    </div>
</div>


</body>
</html>