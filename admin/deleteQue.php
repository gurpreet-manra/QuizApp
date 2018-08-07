<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
require_once('../database.php');
$qid = $_GET['qid'];
$tid = $_GET['testid'];


$query = 'DELETE FROM questions 
          WHERE question_id = :qid and test_id = :tid ';

$statement = $db->prepare($query);
$statement->bindValue(':qid', $qid);
$statement->bindValue(':tid', $tid);
$statement->execute();
$statement->closeCursor();
 header('location: questions.php');
}
?>