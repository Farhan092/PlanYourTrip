<?php
require_once('../model/FaqModel.php');

$results = "";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $results = ShowAnsr($id);

    echo json_encode(['status' => 10, 'message' => $results[0]['answer']]);
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>


    
    
    <table border="0">
       

        <?php for ($i = 0; $i < count($results); $i++) { ?>
              
    
    
        <tr>
            <td><?=$results[$i]['answer']?>
           
                
            </td>
            
       
            
        </tr>
        
      
         
        
   
<?php } ?>
    </table>

    <form action="ShowFaq.php" method="post">
    <input type="submit"name="submit3"value=" Go Back">
        </form>
</body>
</html>


