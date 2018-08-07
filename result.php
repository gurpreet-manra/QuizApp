<?php
ob_start();
session_start();
if($_SESSION['email'] == ''){
 header('Location: signin.php');
}

$status = '';
$total = $_SESSION['number'];
if($total<8){
    $status = 'fail';
} else{
    $status = 'pass';
}
$test_id = $_SESSION['test_id'];
$user_id = $_SESSION['user_id'];
$dat = date('Y-m-d');
$query = 'INSERT INTO test(test_id, user_id, score, status, date) VALUES (:test_id, :user_id, :score, :status, :date)';
        $statement= $db->prepare($query);
        $statement->bindValue(':test_id',$test_id);
        $statement->bindValue(':user_id',$user_id);
        $statement->bindValue(':score',$total);
        $statement->bindValue(':status',$status);
        $statement->bindValue(':date',$dat);
        $statement->execute();
        $statement->closeCursor();

        $_SESSION['number'] = '';
        $_SESSION['counter'] = '';

?>