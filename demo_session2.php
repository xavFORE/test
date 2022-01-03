<?php
if($_GET && $_GET['PHPSESSID']){
    $id=$_GET['PHPSESSID'];
    session_id($id);
}

session_start();

?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "ton nom est " . $_SESSION["nom"] . ".<br>";
echo " ton prenom est " . $_SESSION["prenom"] . ".";
?>



<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
</body>
</html>