<?php
   
   //echo "you get it ~";
   
   if(isset($_GET['name'])){
   	   echo "GET: your name is ". $_GET['name'];
   }
   
   if(isset($_POST['name'])){
   	   echo "POST: your name is ". $_POST['name'];
   }
   
?>