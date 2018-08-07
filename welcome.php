<?php
ob_start();
session_start();
if($_SESSION['email'] == ''){
 header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>
<!-- Include CSS file here -->
<link href="css/main.css" rel="stylesheet">
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
 <?php
 require_once('database.php');
$query = 'select * from testInfo where status = :en';
$statement = $db->prepare($query);
$statement->bindValue(':en','enable');
$statement->execute();
$tests = $statement->fetchAll();
$statement->closeCursor();
foreach($tests as $test)
{
?>
   
<a href="quiz.php?tid=<?php echo $test['test_id'] ?> &tname=<?php echo $test['test_name'] ?>"><button class="button" style="vertical-align:middle"><span><?php echo $test['test_name'] ?> </span></button></a>
<?php
}
?>

  </div>
</div>






</body>
</html>