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
<body onload=open_windows()>
    
</body>
</html>
<script type="text/javascript">
              
        function open_windows()
        {
             var myWindow = window.open("", "MsgWindow", "resizable=yes,top=500,left=500,width=200,height=200");
             myWindow.document.write("<p>voulez vous accepter les cookies <input onclick='with_cookies()'>oui</button>ou<input onclick='without_cookies()'>non</button></p>");
        
            function with_cookies()
            {
                window.close(); 
            }
            function without_cookies()
            {

            }
        
        }

       


</script>
<a href="recup_session.php" target="_blank">cliquez ici</a>