
<html>
   <head>
     <title>Controller.php</title>
   </head>

   <body>
      <?php
	//find save modify delete clear
	

	
	if( $_post['submit'] )
	{
	   echo "The submit button has been pressed. ";
	}
	else if( $_post[ 'save'	] )

	{
	echo "You Pressed the save submit button.";
	}
	
	else
	{
	   echo " unknown button was pressed";
	}

      ?>
   </body>
  </html>
