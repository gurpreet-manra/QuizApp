


<!DOCTYPE html>
<html>
<head>
<title>signin</title>
<!-- Include CSS file here -->
<link href="../css/style.css" rel="stylesheet">
</head>
<body>

<div class="bgimg-1">
  <div class="caption">



  <form class="signup" action="login1.php" method="post">
<h3>Admin login</h3>


	<label for="email">UserName</label>
    <input type="text" id="email" name="user" placeholder="Your email address..">


	<label for="pass">Password</label>
    <input type="text" id="pass" name="pass" placeholder="Enter password..">

<br></br>
	<?php
	if(isset($_GET['msg'])){
		$dis=$_GET['msg'];
	}
echo $dis;
?>
  
    <input type="submit" name="signin" value="Sign In">
  </form>
    </div>
</div>


</body>
</html>