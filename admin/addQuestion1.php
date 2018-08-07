<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
    require_once('../database.php');
    if(isset($_POST['add']))
    {
        $questionAdd = filter_input(INPUT_POST, 'question');
        $option1 = filter_input(INPUT_POST, 'option1');
        $option2 = filter_input(INPUT_POST, 'option2');
        $option3 = filter_input(INPUT_POST, 'option3');
        $option4 = filter_input(INPUT_POST, 'option4');
        $answer = filter_input(INPUT_POST, 'answer');
        $testID = filter_input(INPUT_POST,'testid');
        if($questionAdd !="" && $option1 !="" && $option2 !="" && $option3 !="" && $option4 !="" && $answer!="" && $testID !="")
        {
            $query1 = 'select * from questions';
            $statement1 = $db->prepare($query1);
            $statement1->execute();
            $questions1 = $statement1->fetchAll();
            $statement1->closeCursor();
             foreach($questions1 as $question){
                $que = $question['question'];
                if($questionAdd_Mod == $que){
                  $msg = "Question already exists ";
        header("location: addQuestion.php?msg=$msg");
        exit();
                }
            }
            
        $query = 'INSERT INTO questions(question, option_1, option_2, option_3, option_4, answer, test_id) VALUES (:question, :option1, :option2, :option3, :option4, :answer, :testid)';
        $statement= $db->prepare($query);
        $statement->bindValue(':question',$questionAdd);
        $statement->bindValue(':option1',$option1);
        $statement->bindValue(':option2',$option2);
        $statement->bindValue(':option3',$option3);
        $statement->bindValue(':option4',$option4);
        $statement->bindValue(':answer',$answer);
        $statement->bindValue(':testid',$testID);
        $statement->execute();
        $statement->closeCursor();
        
        $msg = "Question Added Sucessfully";
        header("location: addQuestion.php?msg=$msg");
            
        } else {
				 $msg = "Not Inserted Please Enter all fields";
        header("location: addQuestion.php?msg=$msg");
								}
    }
}
?>