<!DOCTYPE html>
<html>
   <head>
     <title>Controller4.php</title>
   </head>

   <body>
	<style>
 a:link { color:red;
          text-decoration:none;
        }

 a:visited {
            color:green;
           }
h2 {
   font-family:"Courier";
   text-align:center;

   }


h3 {
    font-family : "Times New's Roman";
    text-align : center;
   }

p {
   font-family:"Verdana";
   color:purple;
   line-height:150%;
   text-indent:20px;
  }

head {
      background : #101010;
     }

body {
      background : #C88898;
      margin : 0;
      padding : 0;
      font-family : "Helvetica","Arial";
     }
 #wrapper {
     width : 960px;
     height : auto;
     background : #DAD5C1;
     border-left : 5px solid #A09885;
     border-right : 5px solid #A09885;
     overflow : auto;
     margin : 0;
     padding : 10px;
}
#header {
        width : 100%;
        height : 100px;
        background : #101010
        border-bottom : 3px solid #7c7063;

       }

 nav ul ul
        {
            display: none;
            /*if changed to yes it will display all ul ul menues */
        }


        nav ul li:hover > ul
        {
            display: block;
        }


        nav ul
        {
            /* this section does not seem to have any effect */
            background: purple; /* #efefef; */
            background: linear-gradient(top, #101010 0%, #2f1a1a 100%);
            background: -moz-linear-gradient(top, #101010 0%, #2f1a1a 100%);
            background: -webkit-linear-gradient(top, #101010 0%,#2f1a1a 100%);
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 5px;
            border-radius: 10px;
            list-style: none;
            position: relative;
            display: inline-table;
        }

 nav ul:after
        {
            content: ""; clear: both; display: block;
        }


        nav ul li
        {
            /*left will display the menu in current order
              right will display menu from the right (backwards) */
            float: left;
        }


        nav ul li:hover
        {
            background: #E0E0E0; /* #E0E0E0; #4b545f; = Very dark grayish blue./*
            background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }


        nav ul li:hover a
        {
            /* this section does not seem to have any effect */
            color: cyan; /* #ffffff; =white#ff00ff; /*#fff; */ /*menu name color */
        }


        nav ul li a
        {
            display: block; padding: 10px 20px; /* menu height by width */
            color: red; /* main menu name #757575;*/ text-decoration: unset;

                /*
                text-decoration: none;
                text-decoration: underline red;
                text-decoration: underline wavy red;

                text-decoration: inherit;
                text-decoration: initial;
                text-decoration: unset;
                */
        }

	
	nav ul ul
        {
                /* sub menues colors #bfc1c6;= light gray #EFEFEF;=darker lightslategray */
                background: #f2f2f2;  border-radius: 0px; padding: 0;
                position: absolute; top: 100%;
        }


        nav ul ul li
        {
                /*lines color top and bottom on submenues selections */
                float: none; /*yes will display menues sideways, not top down */
                border-top: 1px solid black; /*#6b727c; */ /*border top */
                border-bottom: 1px solid black; /*border down */
                position: relative;
        }


        nav ul ul li a
        {
                /* selection name color at ul ul li */
                padding: 10px 40px;
                color: blue; /* #fff; */
        }


        nav ul ul li a:hover
        {
                /* hovering submenu background color selections #4b545f; submenu */
                background: yellow;
        }


        nav ul ul ul
        {
                position: absolute; left: 100%; top:0;
        }

</style>


<?php
                     
       //connecting to mysql 
       //echo "<h3>I am going to connect to mySql";

       //                                server               user      password  database     
       $connection = mysqli_connect("ocelot.aul.fiu.edu","fall16_cpasc003","3618151","fall16_cpasc003");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       else
       {  
          //echo "<br>I have connected to mySql<br>";            
             
          // Change database to another name if needed
             
          $dbName="fall16_cpasc003"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
             //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "customers";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                       Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
			Interest VARCHAR(10),
			Cellular VARCHAR(2),
                        Text  VARCHAR(2),
                        Emailp  VARCHAR(2),
			RequestType VARCHAR(33),
                        MainMessage VARCHAR(200)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql

	
	//find save modify delete clear
	
	$Telephone = $_POST[ 'Telephone' ];
	$FirstName = $_POST[ 'FirstName' ];
	$LastName = $_POST[ 'LastName' ];
	$Email = $_POST[ 'Email' ];
	$Interest = $_POST[ 'Interest' ];
	$Cellular = $_POST[ 'Cellular' ];
	$Text = $_POST[ 'Text' ];
	$Emailp = $_POST[ 'Emailp' ];
	$RequestType = $_POST[ 'RequestType' ];
	$MainMessage = $_POST[ 'MainMessage' ];

	 $found = $_POST['found'];	

	/*	
	echo "$Telephone <br>";
	echo "$FirstName<br>";
	echo "$LastName<br>";
	echo "$Email<br>";
        echo "$Interest<br>";
        echo "$Cellular<br>";
	echo "$Text<br>";
        echo "$Emailp<br>";
        echo "$RequestType<br>";
	echo "$MainMessage<br>";
	*/		

	?>

	

			 
<?php
        //find save modify delete clear


        if ( $_POST['Find'] )
        {
        include('find.php');   
        }
        else if ( $_POST[ 'Save' ] )

        {
	include('save.php');
        }

        else if ( $_POST[ 'Modify' ] )
        {
        echo "This is the Controller4 page, the modify button has just been pressed.";
        }

        else if ( $_POST[ 'Delete' ] )
        {
        echo "This is the Controller4 page, the Delete button has just been pressed.";
        }
        
	else if ( $_POST[ 'Clear' ] )
	{
	include('clear.php');
	}

        else
        {
           echo "This is the Controller4 page, an unknown button was pressed";
        }

       mysqli_close($connection); 

       include( 'Pgm4.php' );

      ?>
		
</body>
</html>


