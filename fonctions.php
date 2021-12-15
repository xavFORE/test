<?php
require_once "ressources.php";


function query( $q )
{
    GLOBAL $servername, $username, $password, $database;
    $mysqli = new mysqli($servername, $username, $password, $database);
    $res = $mysqli->query( $q );
    //print( $q );
    $mysqli->close();
    return $res;
}

function comboBox(  $table, $query="", $visibleAdd=1  )
{
    GLOBAL $servername, $username, $password, $database;

    print( "<select name='$table' id='$table' >\n");
    $mysqli = new mysqli($servername, $username, $password, $database);
    if ( $query == "")
        $query  = "select * from $table;";
    //print( $query."<br>");
    $res = $mysqli->query( $query );
    while(  ($ligne = $res->fetch_assoc()) )
    {
        $id  = $ligne[ 'id' ];
        $nom = $ligne[ 'nom' ];
        print( "<option value=$id> $nom</option>\n" );
    }
    $mysqli->close();
    print( "</select>\n");
    if ( $visibleAdd )
        print( "<div class='buttonCombo' onclick=\"addItem( '$table', 'ajout $table' )\" >+</div>\n");
}

function entete( $titre_page )
{
    $var = <<<TOTO123
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$titre_page</title>
        <link rel="stylesheet" href="fonctions.css">
        <script type="text/javascript" src="fonctions.js"></script>


    </head>
    <body>
TOTO123;
    print( $var );
}

function affTab( $tableau )
{
        print( "<table>\n");
        foreach(  $tableau as $key1 => $ligne )
        {
            print( "<tr>\n" );
            foreach( $ligne as $key => $values )
            {
                print("<td>\n" );
                    print( $values  );
                print("</td>\n" );
            }
            print( "</tr>\n" );
        }
        print( "</table>\n");
        print( "<br><br>");
}

function query2json( $query )
{
    $res = query( $query ); 
    $tableauData = [];

    while ( $ligne = $res->fetch_assoc())
    {
        $ligne[ 'nom' ] = utf8_encode( $ligne[ 'nom' ] );
        $tableauData[] = $ligne;
    } 
    print( json_encode( $tableauData ) );
}

?>