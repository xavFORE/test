<?php
    // creer un table nom et pw
            
       require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from nellyfea;";

       // execute la requete
       $res = $mysqli->query( $query );

       print("<table>\n");
       while ( ($ligne = $res->fetch_assoc()))
       {
            print("<tr>\n");
            foreach ($ligne as $key => $values)
            {
                print("<td>\n");
                    print($values);
                print("</td>\n");
            }
            print("</tr>\n");
        }
        
       print("</table>\n");

       print("<br><br>");

       //execute le requete
       $res = $mysqli->query("select avg(age) as moy from nellyfea;");
       //print_r($res);
       $ligne = $res->fetch_assoc();
       //print_r($ligne);
       $moyenne = $ligne["moy"];

       print("La moyenne d'âge est de : $moyenne<br>");

        //fermer la DB
        $mysqli->close();
    
?>
