<?php
    $ip;
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

    //echo 'L adresse IP de l utilisateur est : '.getIp();


   print( "mon adresse ip est :".getIp());
   print("<br>");
   echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
   
   
   //
$agent = $_SERVER["HTTP_USER_AGENT"];

if( preg_match('/MSIE (\d+\.\d+);/', $agent) ) {
  echo "You're using Internet Explorer";
} else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent) ) {
  echo "You're using Chrome";
} else if (preg_match('/Edge\/\d+/', $agent) ) {
  echo "You're using Edge";
} else if ( preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent) ) {
  echo "You're using Firefox";
} else if ( preg_match('/OPR[\/\s](\d+\.\d+)/', $agent) ) {
  echo "You're using Opera";
} else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $agent) ) {
  echo "You're using Safari";
}

  // print( "mon adresse navigator : $nav<br>");
?>