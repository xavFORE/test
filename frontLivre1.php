<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

function getData( url )
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                //console.log( this.responseText );
                let tableauData = JSON.parse( this.responseText );  
                let chaine = "<table>";
                for ( ligne of tableauData )
                {
                    chaine += "<tr><td>"+ligne['nom']+"</td></tr>";
                }
                chaine += "</table>";
                //console.log( chaine );
                document.getElementById("aff").innerHTML = chaine;
        }
        // je prépare l'appel de l'URL
        xhttp.open("GET", url );
        // j'envoie l'url
        xhttp.send();
    } 

    function listEmprunteurs()
    {
        getData("listEmprunteurs.php");
    }

    function listLivres()
    {
        getData("listLivres.php");
    }

    function listLivresSortis()
    {
        getData("livresSortis.php");
    }

    function listLivresDispos()
    {
        getData( "livresDispos.php");
    }

    function listAuteurs()
    {
        getData( "listAuteurs.php");
    }




</script>
<button onclick="listOnclic('select * from emprunteurs;')">EMPRUNTEURS</button>
<button onclick="listOnclic('select * from livres;')">LIVRES</button>
<button onclick="listLivresSortis()">LIVRES SORTIS</button>
<button onclick="listLivresDispos()">LIVRES DISPOS</button>
<button onclick="listAuteurs()">AUTEURS</button>

<br>
<div  id="aff"></div>
</body>
</html>