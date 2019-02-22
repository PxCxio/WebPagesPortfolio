

<!DOCTYPE html>

<html lange="en">

<head style="background:#black;">
<meta charset="utf-8" />
<title> Ciro Samuel Pascasio - Pgm5</title>
<script>

var currentTime = currentTime();

//var curTime = currentTime(); 
//console.log(currentTime);


function currentTime()
{
	var today	= new Date;
	var hour	= today.getHours();
	var minutes 	= today.getMinutes();
	var sec		= today.getSeconds();

	minutes  	= checkTime(minutes);
	sec		= checkTime(sec);

	document.getElementById('txt').innerHTML = "Current Time: "+hour+":"+minutes+":"+sec + "    " ;

	var t = setTimeout(function()
	{currentTime()},500);

}	

function checkTime(i)
{
	if (i<10) {i = "0" + i};
	return i;
}


</script>
</head>

<body onload="currentTime()"> 


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
            background: #E0E0E0; /* #E0E0E0; #4b545f; = Very dark grayish blue.*/
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
        //find save modify delete clear
	/*	
        $Telephone = $_POST[ 'Telephone' ];
        $FirstName = $_POST[ 'FirstName' ];
        $LastName = $_POST[ 'LastName' ];
        $MainMessage = $_POST[ 'MainMessage' ];
        */
	?>


<table style="background:black;">
<tr>
<td style="width:20%;">

<tr style="color:black;">
<h2 style="background-color:black;color:blue; width:%100">
    <a name="0xStudios"></a>
    0xStudios 
 </h2>
  <style type="text/css"> </style>
</tr>

</table>

<nav align="center" style="background:#101010;">
<ul>
        <li><a href="../index.html">Pgm1</a>
           <ul>
             <li><a href="../index.html">Home</a>/<li>
             <li><a href="../musicPage.html">Music</a></li>
             <li><a href="../videoPage.html">Videos</a></li>
             <li><a href="../mProduction.html">Music Productions</a></li>
             <li><a href="../hotKeys.html">Life Saving Hot Keys</a></li>
	   </ul>    
    	</li> 
     <li><a href="../Pgm2.php">Pgm2</a></li>
     <li><a href="Pgm3.php">Pgm3</a></li>
     <li><a href="Pgm4.php">Pgm4</a></li>
     <li><a href="Pgm5.php">Pgm5</a></li>
     <li><a href="../index.html">Home</a></li>
	
 </ul>
</nav>
</tr>


<?php 
        
      if( strlen(trim($found)) > 0 )
      {  
         //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
         //leave it alone it means that find.php was already executed 
      }
      else 
      {
         $found = ""; //set the value of $found to empty
      }

   ?>

       <div>
       <form action="Controller5b.php" method="post">
       


<table style="width: 50%; margin: 0px auto; padding-right: 10%;">	 
<tr> 
        <h3 align="center" style="font-family: helvetica;"> 0xStudios </h3>
</tr>

<tr>
<td style="width:20%;">

	<tr>
               <td style="width: 5%; text-align: left;">Telephone &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;">
               </td>
            </tr>
	
	<tr>
               <td style="width: 5%; text-align: left;">First Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="FirstName" value="<?Php echo $FirstName ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Last Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="LastName" value="<?Php echo $LastName  ?>" style="width: 100%;">
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Main Message &nbsp; </td>
               <td style="width: 20%;">
                  <div>
                     <textarea name="MainMessage" style="width: 100%; height: 50px;"> <?php echo $MainMessage; ?> </textarea>
                  </div>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 15%;"> </td>
               <td style="width: 20%;" align=center>
               <?php echo $comments ?>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

	    <tr>
		
		<td style="width:20%;">
		</td>
		
		<td>

            <tr>
               <td style="width: 15%;"> </td>
               <td style="width: 20%;" align=center>
                  <input type="submit" name="Saveb" value="Saveb">
                  <input type="submit" name="Clear" value="Clear">
               	  <input type="hidden" name="found" value="<?php echo $found ?>" >
		</td>
            </tr>
