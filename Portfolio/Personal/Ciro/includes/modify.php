

<html>

  <body>
    
    <!--h3>this is modify.php</h3-->
        
    <?php
        
       $found = $_POST['found']; 
               
     
       echo "modify  found = [" . $found . "]<br>";
        
       echo $Telephone."<br>"; 
       echo $FirstName."<br>";  
       echo $LastName."<br>";  
       echo $Email."<br>";    
       echo $Interest."<br>";  
       echo $Cellular."<br>";  
       echo $Text."<br>";  
       echo $Emailp."<br>"; 
       echo $RequestType."<br>"; 
       echo $MainMessage."<br>";    
              
       echo "<br>modify found = [" . $found . "]";
            
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
                  
          $query = "UPDATE customers
                    SET Telephone     =  '$Telephone',
	 		FirstName     =  '$FirstName',  
                        LastName      =  '$LastName',
                        Email         =  '$Email',
                        Interest      =  '$Interest',
                        Cellular      =  '$Cellular',
                        Text          =  '$Text',
                        Emailp        =  '$Emailp',
                        RequestType   =  '$RequestType',
			MainMessage   =  '$MainMessage'                         
                        WHERE Telephone = '$Telephone'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
	
             $comments ="<span style=\"color: red;\">RECORD $found MODIFIED</span><br\>";
          }   
          else
          {
             echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $comments ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          }
         }     
       else
       {
          $comments ="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFYNG Cellular</span><br\>";
       }
                    
           
    ?>
            
             
    <!--form method="post" action="../../research/Testing/pgm3.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 
     
  </body>
                
</html>

