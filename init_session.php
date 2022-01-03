<?php

     ini_set("session.use_cookies", 0);
     ini_set("session.use_only_cookies", 0);
     ini_set("session.use_trans_sid", 1);
     ini_set("session.cache_limiter", "");
     session_start();
     $_SESSION["nom"] = "toto";
     $nom = $_SESSION["nom"];
     print("bienvenue ".$nom);
/*session_start();
$_SESSION["nom"] = "toto";
$_SESSION["age"] = 17;
$nom = $_SESSION["nom"];
print("bienvenue ".$nom); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload=open_infos()>
    
</body>
</html>
<script type="text/javascript">
              
                        function open_infos()
                        {
                                window.open('pageb.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');
                        
                                
                        
                        
                        }
</script>
<a href="recup_session.php" target="_blank">cliquez ici</a>