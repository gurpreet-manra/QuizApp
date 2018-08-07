   <?php
   
  if(isset($_POST['signin'])){
  require_once('database.php');
 $pwd = $_POST['pass'];
 $email = $_POST['email'];
    
 $query = 'select * from users where email = :mail and password = :pass';
$statement = $db->prepare($query);
$statement->bindValue(':mail', $email);
$statement->bindValue(':pass', $pwd);
$statement->execute();
$user = $statement->fetch();
$statement->closeCursor();
print_r($user);
}
if(!empty($user)){
    $name = $user['first_name'];
   
    print($name);
    print($user['first_name']);
    session_start();
  $_SESSION['name'] = $user['first_name'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['number'] = 0;
  $_SESSION['counter'] = 0;
  print($_SESSION['name']);
  echo '<script> alert("Welcome")</script>';
  
  include('welcome.php');
  
}
?>