<?php
    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];
        print( "bonjour ".$nom."<br>" );
     
        $mail = $_POST["mail"];
        print( "mail : ".$mail."<br>" );
        //exit();

        $pw = $_POST["pw"];
        print( "mot de passe : ".$pw."<br>" );
        //exit();

        $age = $_POST["age"];
        print( "tu as : ".$age." ans<br>" );
        exit();
    }
        $mail="";

    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            print "L'adresse e-mail est valide";
      }
      else{
             print ("L'adresse e-mail n'est pas valide");
      }
      
      function check_mdp_format($mdp)
      {
            $majuscule = preg_match('@[A-Z]@', $mdp);
            $minuscule = preg_match('@[a-z]@', $mdp);
            $chiffre = preg_match('@[0-9]@', $mdp);
          
          if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
          {
              return false;
          }
          else 
              return true;
      }
      
      if (check_mdp_format("1Formatik") != true)
      {
          print ("Format non correct");	
      }
      else 
          print ("Format correct");


?>




<form action="#" method="post">

<input type="text" name="nom" placeholder="ton nom">
<br>
<input type="text" name="mail" placeholder="ton mail">
<br>
<input type="text" name="pw" placeholder="ton mot de passe">
<br>
<input type="text" name="age" placeholder="ton age">
<br>
<button type="submit">OK</button>

</form>
