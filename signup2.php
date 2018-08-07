<?php
ob_start();
session_start();

$fname = filter_input(INPUT_POST, 'firstname');
$lname = filter_input(INPUT_POST, 'lastname');
$cno = filter_input(INPUT_POST, 'phone');
$pwd = filter_input(INPUT_POST, 'pass');
$add = filter_input(INPUT_POST, 'address');
$email = filter_input(INPUT_POST, 'email');

// Validate inputs
if (
        $fname == null || $lname == null || $cno == null || $pwd == null || $add == null || $email == null ) {
    $error = "Invalid data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO users
                 (first_name, last_name, email, contact, address, password)
              VALUES
                 (:fname, :lname, :email, :cno, :add, :pwd)';
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':cno', $cno);
    $statement->bindValue(':add', $add);
    $statement->bindValue(':pwd', $pwd);
    $statement->execute();
    $statement->closeCursor();
echo '<script> alert("Registration Sucessfull")</script>';
 $_SESSION['name'] = $fname;
  $_SESSION['email'] = $email;

 include('welcome.php');
}
?>
