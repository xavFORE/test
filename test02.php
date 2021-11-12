<?php
// page2.php

session_start();


echo $_SESSION['liste'];

// Vous pourriez utiliser la constante SID ici, tout comme dans la page page1.php
echo '<br /><a href="test01.php">page 1</a>';
?>