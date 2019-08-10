<html>

  <form action = "loginform.php" method = "POST">
  
        <input type = "text" name ="username" required placeholder="Username">
        
        <input type = "password" name = "password" required placeholder="Password">
        
        <input type = "submit" name ="submit" value = "Submit">
  
  
  </form>
 


</html>

<?php

        if(isset($_POST['submit'])){
            
            $username = $_POST['username'];
            
            
            $password = $_POST['password'];
            
            if(($username=="blessing")&&($password=="godisgood")){
                
                echo 'Login is successful';
                
            }else{
                
                echo 'invalid username or password';
            }
            
        }


?>