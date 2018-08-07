<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
require_once('../database.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
     $lname = $_POST['lname'];
      $email = $_POST['email'];
       $no = $_POST['no'];
        $add = $_POST['add'];
         $pass = $_POST['pass'];
         if($fname!='' && $lname != '' && $email != '' && $no != '' && $add != '' && $pass != '')
         {
            
         $query = "UPDATE users
          SET first_name = :fname, last_name = :lname, email = :email, contact = :no, address = :add, password = :pass
          WHERE user_id = :id";

$statement = $db->prepare($query);
$statement->bindValue(':fname', $fname);
$statement->bindValue(':lname', $lname);
$statement->bindValue(':email', $email);
$statement->bindValue(':no', $no);
$statement->bindValue(':add', $add);
$statement->bindValue(':pass', $pass);
$statement->bindValue(':id', $id);
$statement->execute();
$statement->closeCursor();

header('location: users.php');
         }
         else {
				 $msg = "Not Updated Enter all fields";
        header("location: modify.php?msg=$msg &id=$id");
								}
}
}
?>