<?php


   if(isset($_POST['submit'])){
 
        $num_one = $_POST['valueone'];
        $num_two = $_POST['valuetwo'];
  
        $sum = $num_one+$num_two;
        echo $sum;
   
   }

?>

<html>
    
 <form action ="welcome.php" method = "POST">
    <input type = "text" name ="valueone">
    <input type = "text" name = "valuetwo">
    <input type ="submit" name ="submit">
     
</form>

</html>