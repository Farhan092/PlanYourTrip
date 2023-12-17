<?php
require_once('../model/FaqModel.php');

$errorMessage = "";
$successMessage = "";


  
    $question = $_POST['question'] ;
    $answer = $_POST['answer'] ;

    $count = substr_count($question, '?');

    if ($count == 0) {
        
       
        echo json_encode(['status' => 2, 'message' => "Please add a '?' mark in your question"]);
    } else {
        AddFaq($question, $answer);
       
       
        echo json_encode(['status' => 1, 'message' => "FAQ added successfully!"]);
    }

?>




