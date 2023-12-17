<?php
require_once('db.php');

function AddFaq($question,$answer){
    $con = getConnection();
    $sql = "INSERT INTO faq (question,answer)VALUES ('$question','$answer')";
    
    $result = mysqli_query($con, $sql);
    return;
  


}
function ShowFaq(){
    $con = getConnection();
    $sql = "select id,question from faq";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;
}

function ShowAnsr($id){
    $con = getConnection();
    $sql = "select answer from faq where id=$id";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

}


?>