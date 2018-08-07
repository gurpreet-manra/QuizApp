<?php
ob_start();
 require_once('database.php');
  if(isset($_POST['signin'])){
 
 $pwd = $_POST['pass'];
 $email = $_POST['email'];
    
 $query = 'select * from users where email = :mail and password = :pass';
$statement = $db->prepare($query);
$statement->bindValue(':mail', $email);
$statement->bindValue(':pass', $pwd);
$statement->execute();
$count = $statement->rowCount();
$user = $statement->fetch();
$statement->closeCursor();

  }

if($count){
   
    
    session_start();
echo $user['first_name'];
  $_SESSION['name'] = $user['first_name'];
  $_SESSION['email'] = $user['email'];
   $_SESSION['user_id'] = $user['user_id'];
  $_SESSION['number'] = 0;
  $_SESSION['counter'] = 0;
  $uid =  $user['user_id'];
$sid = 'yes' ;
$query = 'INSERT INTO session
                 (session_id, user_id)
              VALUES
                 (:sid, :uid)';
    $statement = $db->prepare($query);
    $statement->bindValue(':sid', $sid);
    $statement->bindValue(':uid', $uid);
    $statement->execute();
    $statement->closeCursor();
  
 header('location: welcome.php');
 exit(); 
}
 
?>