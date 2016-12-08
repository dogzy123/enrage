<?php
 try{
   include 'mydb.php';
   session_start();
   if(!isset($_SESSION['id'])){
      header('Location: index.php');
   }
   $uid = $_SESSION['id'];
   $result = $link->query("SELECT `login` FROM `users` WHERE `id` = $uid");
   $row = $result->fetch_array();
   $login = $row['login']; 
 } catch(Exception $e){
     echo $e->getMessage();
 }

?>