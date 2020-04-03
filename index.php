<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>steflink segurity login</title>
 
    <!-- DINO -->
    <link href="view/dino/dino_css/dino.css" rel="stylesheet" media="screen">
     <!-- STEFLINK3.1 -->
    <link href="view/css/steflink.css" rel="stylesheet" media="screen">
   
    
  </head>
  <body>

<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
session_start();
$_SESSION['urla']=$_SERVER['REQUEST_URI'];
include ("controller/index.php");
?>


<!-- DINO -->	
	<script src="view/dino/dino_js/dino.js"></script>
<!-- AJAX -->	
	<script src="view/ajax/ajax.js"></script>		
  </body>
</html>	
