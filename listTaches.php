<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma ToDoList</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="fonctions.js"></script>
    <link rel="stylesheet" href="fonctions.css">
    <script>
        $.(document).ready(function()
                        {
                            $.get("listTachesBack.php",
                                function( data, status )
                                {
                                    let tableau = JSON.parse( data );
                                    console.log( tableau ); 
                                    let chaine = "<table>";
                                    for ( ligne of tableau )
                                        chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                                    chaine += "</table>";
                                    $( "#aff" ).append( chaine );
                                }
                            );
                        });

        function dateTri()
        {
           
        }

        function prioriteTri()
        {

        }

        function statusTri()
        {

        }
    </script>
</head>

<body>
    <button onclick="dateTri()">Trier par date</button>
    <button onclick="prioriteTri()">Trier par priorité</button>
    <button onclick="statusTri()">Trier par statut</button>

    <div id="list">
        <div id="title">TITRE</div>
        <div id="edit">MODIFIER</div>
        <div id="delete">SUPPRIMER</div>
    </div>

    <button>Ajouter</button>
</body>
</html>