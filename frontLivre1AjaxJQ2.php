<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .aff 
        {
            color:red;
            font-size: 30px;
            height: 40px;
            background-color: gray;
            border: 2px solid red;
        }

        .list 
        {
            color:red;
            font-size: 10px;
            background-color: gray;
            border: 2px solid red;
        }
    </style>
</head>

<body>
<script>
    function sendData( url )
    {
        $( "#aff" ).text( "" );

        $.get(
            // premier param URL qui fournit les données
            url,
            // deuxieme param fonction callBack qui traite les données 
            function( data, status )
            {
                let tableau = JSON.parse( data );
                // console.log( tableau ); 
                let chaine = "<table>";

                for ( ligne of tableau )
                    chaine += "<tr><td>"+ligne['nom']+"</td></tr>";

                chaine += "</table>";
                $( "#aff" ).append( chaine );
            }   
        );
    }

    function listEmprunteurs()
    {
        sendData("listEmprunteurs.php");
    }

    function listLivres()
    {
        sendData("listLivres.php");
    }

    function listLivresSortis()
    {
        sendData("livresSortis.php");
    }

    function listLivresDispos()
    {
        sendData("livresDispos.php");
    }

    function listAuteurs()
    {
        sendData("listAuteurs.php");
    }

    function addLivre()
    {
        if($('#saisie').val() != "")
        {
            $.post("enregistreLivre.php",
                {
                    'nom' : $('#saisie').val()
                },
                function(data,status)
                {}
            );
        }
        else
            alert("Champ vide !!!");
    }
</script>
<input type="text" id="saisie" placeholder="saisie">
<br>
<!-- https://www.w3schools.com/jquery/jquery_ajax_get_post.asp -->
<button onclick="addLivre()">ADD LIVRE</button>
<br>
<br>
<br>

<button onclick="listEmprunteurs()">EMPRUNTEURS</button>
<button onclick="listLivres()">LIVRES</button>
<button onclick="listLivresSortis()">LIVRES SORTIS</button>
<button onclick="listLivresDispos()">LIVRES DISPOS</button>
<button onclick="listAuteurs()">AUTEURS</button>
<br>

<div  id="aff"></div>
</body>
</html>