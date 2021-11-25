<?php
    // creer un table nom et pw
 if ($_GET)
 {
     $nomRoot = $_GET["nom"];
     $pwRoot = $_GET["pw"];

 }
        // connecter à votre DB
        $servername = "localhost";
        $database = "toto";
        $username = "root";
        $password = "";
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from personnes;";
        // un print bien utile pour débugger
        print( $query );

        // execute la requete
        $res = $mysqli->query( $query );


print "<table><tr>";

while($mysql_query_fields = mysqli_fetch_field($mysql_query))
{
 print ("<tr>");








 print ("<tr>");










$mysql_fields[] = $mysql_query_fields->name;
echo "<th>".ucfirst($mysql_query_fields->name)."</th>";
}
echo "</tr>";

while($mysql_rows = mysqli_fetch_array($mysql_query))
{
echo "<tr>";
foreach($mysql_fields as $fields)
{
echo "<td>".$mysql_rows[$fields]."</td>";
}
echo "</tr>";
}

echo "</table>";
?>
