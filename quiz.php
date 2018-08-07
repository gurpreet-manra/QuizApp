<?php
ob_start();
session_start();
require_once('database.php');
if($_SESSION['email'] == ''){
 header('Location: signin.php');
}
if(isset($_GET['tid'])){
    $id = $_GET['tid'];
    $_SESSION['test_id'] = $id;

$query = 'select question_id from questions where test_id = :id';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$que_ids = $statement->fetchAll();
foreach($que_ids as $s_id){
    $end = $s_id['question_id'];
    
}
}

$start = $end-19;

     $input = mt_rand($start,$end);
     echo $input;
     

if(isset($_POST['next'])){
    
$choice = $_POST['question-option'];
$ans = $_POST['ans'];
if($choice == $ans){
    $_SESSION['number'] += 1;
   
}
if($_SESSION['counter'] < 10 ) {

$query = 'select * from questions where question_id = :input';
$statement = $db->prepare($query);
$statement->bindValue(':input', $input);
$statement->execute();
$question = $statement->fetch();
$_SESSION['counter'] += 1;


}else{
   header('location: result.php');
}
}
else {
    
    
 $query = 'select * from questions where question_id = :input';
$statement = $db->prepare($query);
$statement->bindValue(':input', $input);
$statement->execute();
$question = $statement->fetch();
$_SESSION['counter'] += 1;
}


?>



<!DOCTYPE html>
<html>
<head>
<title>Question</title>

<link href="css/ques.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>
<body>
  <div class="ques">

<form action="#" method="post">


<h4> <?php echo $question['question']; ?></h4>

<div>

<input type="radio" name="question-option" id="question-1-answers-A" value="A" />

<label for="question-1-answers-A">A) <?php echo $question['option_1']; ?></label>

</div>

<div>

<input type="radio" name="question-option" id="question-1-answers-B" value="B" />

<label for="question-1-answers-B">B) <?php echo $question['option_2']; ?></label>

</div>

<div>

<input type="radio" name="question_option" id="question-1-answers-C" value="C" />

<label for="question-1-answers-C">C) <?php echo $question['option_3']; ?></label>

</div>

<div>

<input type="radio" name="question-option" id="question-1-answers-D" value="D" />

<label for="question-1-answers-D">D) <?php echo $question['option_4']; ?></label>

</div>
<input type="hidden" name="ans" value="<?php echo $question['answer']; ?>">

<div class="bgimg-1">
  <div class="caption">

  <a href="#"><button class="button" name="next" type="submit" style="vertical-align:middle"><span>Next Question</span></button></a>


</div>
</div>


</form>

</div>

</body>
</html>
