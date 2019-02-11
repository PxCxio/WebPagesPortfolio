<!-- ***********************************************************************************
  Page Name  : Controller2.php
  Author     : Ciro Samuel Pascasio Ortiz
  Your URL   : ocelot-aul.fiu/~cpasc003
  Course     : CGS 4854 03, M,W, and 7:45-9:05
  Program #  : Assignment #2
  Purpose    : a formulary for the user to help input requests.

  Due Date   : 09/26/2016

  Certification:
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........{ Ciro Pascasio }..........

  ************************************************************************************** -->

<!DOCTYPE html>

<html lange="en">

<head style="background:#black;">
<meta charset="utf-8" />
<title> Ciro Samuel Pascasio - Home Page</title>
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

<table style="background:black;">
<tr style="color:black;">
<h2 style="background-color:black;color:blue; width:%100">
    <a name="Ciro's Formulary"></a>
    Formulary
 </h2>
  <style type="text/css"> </style>
</tr>
</table>

<nav align="center" style="background:#101010;">
<ul>
        <li><a href="index.html">Pgm1</a>
           <ul>
             <li><a href="index.html">Home</a>/<li>
             <li><a href="musicPage.html">Music</a></li>
             <li><a href="videoPage.html">Videos</a></li>
             <li><a href="mProduction.html">Music Productions</a></li>
             <li><a href="hotKeys.html">Life Saving Hot Keys</a></li>
	   </ul>    
    	</li> 
     <li><a href="Pgm2.php">Pgm2</a></li>
     <li><a href="includes/Pgm3.php">Pgm3</a></li>
     <li><a href="index.html">Home</a></li>
	
 </ul>
</nav>
</tr>


       <form action="includes/Controller2.php" method="post"
        
<tr> 
        <h3 align="center" style="font-family: helvetica;"> Song Production Requests </h3>
</tr>
	<div align="center" style="font-size: 20px;"></div>
         <br>
         <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
            <tr>
               <td style="width: 5%; text-align: left;">Telephone &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Telephone #" value="" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: left;">First Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="FirstName" value="" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Last Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="LastName" value="" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Email &nbsp; </td>
               <td style="width: 20%;">
                  <input id="Email" type="text" name="Email" value="" style="width: 100%;">
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Type of Request &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                   <select name="RequestType" style="width: 100%;">
                      <option value="Song Production">   Song Production   </option>
                      <option value="Song Mixing"> Song Mixing </option>
                      <option value="Intellectual Property Request for use"> Intellectual Property Use Request </option>
                      <option value="Online one on one lessons"> Online one on one lesson </option>
                      <option value="Midi Drum Library substitution"> Midi Drum Library substituion </option>
                      <option value="Special Request"> Special Request </option>
                   </select>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Interest &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                  <table style="margin: 0px auto;">
                     <tr>
                        <td text-align: left> <input type="radio" name="Interest" value="For Commercial Purposes"> For Commercial Purposes &nbsp; &nbsp; </td>
                        <td text-align: left> <input type="radio" name="Interest" value="For a Personal Project">  For a Personal Project &nbsp; &nbsp; </td>
	                <td text-align: left> <input type="radio" name="Interest" value="Other"> Other &nbsp; &nbsp; </td>
                     </tr>
                  </table>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 5%; text-align: left">Contact Preferences &nbsp; </td>
               <td style="width: 20%;">
                  <table>
                     <tr>
                        <td "text-align: left"> <input type="checkbox" name="Cellular"          value="">Cell &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; </td>
                        <td> <input type="checkbox" name="Text"          value="">Text     &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                        <td> <input type="checkbox" name="E-Mail"    value="">E-Mail &nbsp; &nbsp; </td>
                     </tr>
                  </table>
               </td>
            </tr>


            <tr>
               <td style="width: 5%; text-align: left;">Provided Media &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Provided Media" value="" style="width: 100%;">
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 5%; text-align: left;">Main Message &nbsp; </td>
               <td style="width: 20%;">
                  <div>
                     <textarea name="Main Message" style="width: 100%; height: 50px;"></textarea>
                  </div>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
               <td style="width: 15%;"> </td>
               <td style="width: 20%;" align=center>
               $message
	       </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>


            <tr>
               <td style="width: 15%;"> </td>
               <td style="width: 20%;" align=center>
                  <input type="submit" name="submit" value="Submit">
                  <input type="submit" name="save"   value="Save">
                  <input type="submit" name="modify" value="Modify">
                  <input type="submit" name="delete" value="Delete">
                  <input type="reset" name="clear"  value="Clear">
               </td>
            </tr>

         </table>
      </form>

<nav align="center" style="background:#101010">
<ul>
        <li><a href="index.html">Pgm1</a>
           <ul>
            <li><a href="index.html">Home</a></li>
             <li><a href="musicPage.html">Music</a></li>
             <li><a href="videoPage.html">Videos</a></li>
             <li><a href="mProduction.html">Music Productions</a></li>
             <li><a href="hotKeys.html">Life Saving Hot Keys</a></li>
             <li><a href="Pgm2.php">Pgm2</a></li>i
	   </ul>
	   </li>
	      <li><a href="Pgm2.php">Pgm2</a></li>
	      <li><a href="includes/Pgm3.php">Pgm3</a></li>
	      <li><a href="index.html">Home</a></li> 

</ul>
</nav>
</body>
</html>
