<?
session_start();
if(!isset($_SESSION["manager"])){
  header("location: admin_login.php");
  exit();
}

?>

<!doctype html PUBLIC "_//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTDxhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<meta http-equiv="Content-Type" content="text/html, charset=utf-8"/>
<style type="text/css">

</style>

</head>


<body>
<div align="center"id="mainWrapper">
<?php include_once("template_header.php");?>
<div id="pageContent"> </div>
<?php include_once("template_content.php");?>
<div id="pageFooter"> </div>
<?php include_once("template_footer.php");?>

</div>

</body>
<html>
