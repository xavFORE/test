<?php
function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}



$IP = getUserIP();
$nav = get_browser(null, true);;
//$_SERVER['HTTP_USER_AGENT'];

print( "mon adresse ip est : $IP<br>");
print_r( $nav);

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

?>