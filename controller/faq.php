

<?php 
require_once('../model/FaqModel.php');
$question=$_POST['question'];
$answer=$_POST['answer'];

 AddFaq($question,$answer);
 //alert('FAQ Added');




?>