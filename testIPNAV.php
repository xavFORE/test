<?php
 function getIp(){
   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
     $ip = $_SERVER['HTTP_CLIENT_IP'];
   }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
   }else{
     $ip = $_SERVER['REMOTE_ADDR'];
   }
   return $ip;
 }


   print( "mon adresse ip est : $IP<br>");
   // print( "mon adresse navigator : $nav<br>");
?>