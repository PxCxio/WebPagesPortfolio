
<html>

  <body>
    
    <!--h3>this is delete.phd</h3-->
             
                  
    <?php
                   
       $record = "RECORD ". $Telephone." DELETED";
         
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE Telephone='$Telephone'";
         
       $Telephone=trim($Telephone);
          
       //     if(strlen($Telephone)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $comments ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $comments = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $comments ="<span style=\"color: red;\">RECORD NOT DELETED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       }
                 
       
    ?>
                           
                          
    <form method="post" action="Pgm5.php" >
       <input type="submit" name="return" value="Press to  continue" -->
    </form> 
                      
  </body>
                    
</html>//end delete.php
