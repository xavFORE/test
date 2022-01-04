<?php
if ($_GET && $_GET ['PHPSESSID'])
{
 $sessionID = $_GET ['PHPSESSID'];
  session_id ($sessionID);
}
session_start();
$plat       = $_SESSION[ 'plat'];
$boisson    = $_SESSION[ 'boisson'];
print( "mon plat préféré $plat avec $boisson");
?>
