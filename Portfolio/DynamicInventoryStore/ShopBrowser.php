<!DOCTYPE html>
<html>
<?PHP
session_start();
if(!isset($_SESSION["manager"])){
  header("location: admin_login.php");
  exit();
}
//be sure to check that this manager SESSION value is in fact in the database
?>
<head>
 <!--css/js files are also supported, you can
 refer them using relative path.
 Save all files first, including html file
 to use this feature. -->

<link rel="stylesheet" href="shopv2.css">
	<style type="text/css">
	
    h1{
    color: #e2e2e2;
    }
    
    body{
    background-color: #black;
    
    }
    
    .site{
    	display: grid;
    	width: 100%;
    	height: 740px;
    	grid-template-columns: 1fr 2fr 2fr;
    	grid-template-rows: 100px 1fr 1fr 1fr 100px ;
    	grid-template-areas:
    		"title title title"
    		"sidebar main main"
    		"sidebar main main"
    		"sidebar main main"
    		"footer footer footer"
    		;
    	background-color: red;
    }
    
    .title{
    	color: white;
    	background-color: black;
    	grid-area: title;
    	font: 30px "Time's New Roman",Verdana, sans, times;
    	text-align: center;
    	vertical-align: middle;
    	line-height: 3.2;
	
	}
    
    .main{
    	color: black;
    	grid-area: main;
    	background-color: grey;
    	text-align: center;
    	font: 30px "Time's New Roman",Verdana, sans, times;
    	
    	
    }
    
    .sidebar{
    	color: red;
    	grid-area: sidebar;
    	background-color: yellow;
    	text-align: center;
    }
    
   .footer{
   	background-color: black;
   	grid-area: footer;
   	color: green;
   	text-align: center;
        vertical-align: middle;
    	font: 30px "Time's New Roman",Verdana, sans, times;
	line-height: 3.2;
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
            padding: 0 3px;
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
            color: grey; /* #ffffff; =2f1a2f #ff00ff; /*#fff; */ /*menu name color */
        }


        nav ul li a
        {
            display: block; padding: 0px 2px; /* menu height by witdh */
            color: white; /* main menu name #757575;*/ text-decoration: unset;

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
                /* sub menues colors #bfc1c6;= light gray #5f6975;=darker lightslategray */
                background: #black;  border-radius: 0px; padding: 0;
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
                color: whitesmoke; /* #fff; */
        }


        nav ul ul li a:hover
        {
                /* hovering submenu background color selections #4b545f; submenu */
                background: #A9A9A9;
        }


        nav ul ul ul
        {
                position: absolute; left: 100%; top:0;
        }
  
 *{
	margin: 0;
	padding: 0;
    }




<script> src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="rotate.js"></script>


    </style>
</head>

<body>

   <div class="site"> 
	

	<div class="title">
<nav id="mainmenu" align="center ;line-height:2">
<ul>
        <li><a id="titlefont" href="index.html">Mr.Money E-Interface</a></li>

             <li><a href="vPage.html">Browse Inventory</a></li>
             <li><a href="schedPage.html">Special Deals</a></li>
             <li><a href="cProduction.html">Contact Us</a></li>
             <li><a href="about.html">About Us</a></li>
         </ul>

</nav>
</div>
		

	<div class="main">
<div class="border">
	<script language="javascript">
	$(window).load(function(){
	$("view360").rotate((imageDir:"images',imageCount:43,imageExt:'jpg',canvasID:'img',canvasWidth:340,canvasHeight:480,autoRotate:false));
	});
	</script>
	<div id="view360">
	<a href="#" class="autorotate">Auto rotate</a>
	</div>
	<p>Click and drag to zoom the image</p>

</div>


    </div>

    <div class="sidebar">
	<a href="">Men</a><br>
	<a href="">Watches</a><br>
	<a href="">Rings</a><br>
	<a href="">Necklaces</a><br>
	<a href="">Repairs</a><br>
	<a href="">Women</a></br>
	<a href="">Sell your Gold/Jewels to Us</a></br>
	<a href="">P2P Sell Gold/Sell </a><br>
	<a href="">More About Us</a>
    </div>

    <div class="footer">
		Ftr
    </div>

      
</body>
</html>

     
