<?php
ob_start();
session_start();
if($_SESSION['admin_id'] == ''){
	
 header('Location: login.php');
} else{
    require_once('../database.php');
if(isset($_POST['update']))
   {
        $questionID_Mod = filter_input(INPUT_POST, 'questionid');
        $questionAdd_Mod = filter_input(INPUT_POST, 'question');
        $option1_Mod = filter_input(INPUT_POST, 'option1');
        $option2_Mod = filter_input(INPUT_POST, 'option2');
        $option3_Mod = filter_input(INPUT_POST, 'option3');
        $option4_Mod = filter_input(INPUT_POST, 'option4');
        $answer_Mod = filter_input(INPUT_POST, 'answer');
        $testID_Mod = filter_input(INPUT_POST, 'testid');
   }
        if($questionID_Mod!="" && $questionAdd_Mod!="" && $option1_Mod!="" && $option2_Mod!="" && $option3_Mod!="" && $option4_Mod!="" && $answer_Mod!="" && $testID_Mod!="")
        {
             $query1 = 'select * from questions';
            $statement1 = $db->prepare($query1);
            $statement1->execute();
            $questions1 = $statement1->fetchAll();
            $statement1->closeCursor();
          
                    
                     foreach($questions1 as $question){
                $que = $question['question'];
                $op1 = $question['option_1'];
                $op2 = $question['option_2'];
                $op3 = $question['option_3'];
                $op4 = $question['option_4'];
                $ans = $question['answer'];
                if($questionAdd == $que && $option1 == $op1 && $option2 == $op2 && $option3 == $op3 && $option4 == $op4 && $answer == $ans)
                {
                    
                  $msg = "Question already exists ";
        header("location: modifyQue.php?msg=$msg &qid=$questionID_Mod &testid=$testID_Mod");
        exit();
                }
            }
            
            $query = 'UPDATE questions SET question=:questionAdd_Mod, option_1=:option1_Mod, option_2=:option2_Mod, option_3=:option3_Mod, option_4=:option4_Mod, answer=:answer_Mod, test_id=:testID_Mod WHERE question_id=:questionID_Mod';
            $statement= $db->prepare($query);
            $statement->bindValue(':questionID_Mod',$questionID_Mod);
            $statement->bindValue(':questionAdd_Mod',$questionAdd_Mod);
            $statement->bindValue(':option1_Mod',$option1_Mod);
            $statement->bindValue(':option2_Mod',$option2_Mod);
            $statement->bindValue(':option3_Mod',$option3_Mod);
            $statement->bindValue(':option4_Mod',$option4_Mod);
            $statement->bindValue(':answer_Mod',$answer_Mod);
            $statement->bindValue(':testID_Mod',$testID_Mod);
            $statement->execute();
            $statement->closeCursor();
        
           $msg = "Question Updated Sucessfully";
       header("location: modifyQue.php?msg=$msg &qid=$questionID_Mod &testid=$testID_Mod");
            
        } else {
				 $msg = "Not Inserted Please Enter all fields";
        header("location: modifyQue.php?msg=$msg &qid=$questionID_Mod &testid=$testID_Mod");
								}
    }


?>