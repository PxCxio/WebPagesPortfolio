<!-- ***********************************************************************************
  Page Name  : Controller2.php 
  Author     : Ciro Samuel Pascasio Ortiz 
  Your URL   : ocelot-aul.fiu/~cpasc003
  Course     : CGS 4854 03, M,W, and 7:45-9:05
  Program #  : Assignment #2
  Purpose    : redirects the users depending on the php input that is expected 

  Due Date   : 09/26/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ciro Pascasio }..........

  ************************************************************************************** -->
<html>
   <head>
     <title>Controller2.php</title>
   </head>

   <body>
      <?php
	//find save modify delete clear
	
	
	if ( $_POST['submit'] )
	{
	   echo "The submit button has been pressed. ";
	}
	else if ( $_POST[ 'save' ] )

	{
	echo "You just the save submit button, in good time!";
	}	

	else if ( $_POST[ 'modify' ] )
	{
	echo "The modify button has just been pressed.";
	}	

	else if ( $_POST[ 'delete' ] )
	{
	echo "The delete button has just been pressed.";
	}

	else
	{
	   echo " unknown button was pressed";
	}

		
      ?>

   </body>
  </html>
