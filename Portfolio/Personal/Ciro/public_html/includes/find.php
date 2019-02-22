

                         
<html>
                     
  <body>
                       
    <!--h3>this is find.php</h3-->
                        
                                  
    <?php
         
/*            
       echo  "find.php Telephone = [".$Telephone."]<br>";
       echo  $FirstName;
       echo  $LastName;
       echo  $Email;
       echo  $age;
       echo  $gender;
       echo  $Preferences;
       echo  $checkbox;
       echo  $Others;
       echo  $MainMessage;            

       echo "find.php table : ".$tableName."<br>";

       echo "<br>find.php  found = [" . $found . "]";
       $found = $Telephone;
          
       echo "<br>find.php Found = Telephone = [" . $found . "]";
                
*/           
                  
       //$sql="SELECT * FROM customers ORDER BY Telephone";
           
       $sql="SELECT * FROM customers where Telephone = '$Telephone'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                   
          //printf("Result set has %d rows.\n",$rowcount);
             
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Telephone    = $row['Telephone'];     //primary key
             $FirstName    = $row['FirstName'];     //type="text"
             $LastName     = $row['LastName'];      //type="text"
             $Email        = $row['Email'];         //type="text" 
             $Interest     = $row['Interest'];        //type="radio"
             $Cellular     = $row['Cellular'];            //type="checkbox"
             $Text         = $row['Text'];            //type="checkbox" 
             $Emailp       = $row['Emailp'];      //type="checkbox"
	     $RequestType  = $row['RequestType'];           //type="dropdown"
             $MainMessage  = $row['MainMessage'];  //type="textarea"          
          }


/*
          echo $Telephone."<br>"; 
          echo $FirstName."<br>";  
          echo $LastName."<br>";  
          echo $Email."<br>";  
          echo $RequestType."<br>";  
          echo $Interest."<br>";  
          echo $Cellular."<br>";  
          echo $Text."<br>";  
          echo $Emailp."<br>";  
          echo $Engineering."<br>";  
          echo $Others."<br>";  
          echo $MainMessage."<br>";  
*/



          //printf("\ni am here in find.php\n [%s] [%s]", $Telephone, $FirstName );
          //echo "(".$Telephone." ".$FirstName.")";


          $Telephone=trim($Telephone); //take all front and back spaces out

                
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {
             $found = $Telephone;
             $comments ="<span style=\"color: red;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $comments ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             $FirstName    = "";
             $LastName     = "";
             $Email        = "";
             $Interest     = "";
             $Cellular     = "";
             $Text         = "";
             $Emailp       = "";
	     $RequestType  = "";
             $MainMessage  = "";            
                      
             $find         = "";  
          }
          else 
          {
             $comments ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             $FirstName    = "";
             $LastName     = "";
             $Email        = "";
             $RequestType  = "";
             $Interest     = "";
             $Cellular     = "";
             $Text         = "";
             $Emailp       = "";
             $Engineering  = "";
             $Others       = "";
             $MainMessage  = "";            
                      
             $find         = "";  
          }

             
      }
                 
       
   ?>
 
 <!--form method="post" action="../../research/Testing/pgm3.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 


  </body>

</html>//end find

