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
            color:blue;
            font-size: 30px;
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
    function clic(requete)
    {
         // new creation d'un objet XMLHttpRequest 
         const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
            // console.log( this.responseText );
            let tab = JSON.parse( this.responseText );
            // console.log( tab );
            document.getElementById("affiche1").innerHTML = "";

            for ( let ligne of tab) 
            {
                // console.log( ligne )
                document.getElementById("affiche1").innerHTML += ligne+"<br>";
            }
        }

        // je prépare l'appel de l'URL
        xhttp.open("GET", "donneEmprunteursV2.php?requete="+requete);
        // j'envoie l'url
        xhttp.send();
    }

</script>
<button onclick="clic('select * from emprunteurs;')">EMPRUNTEURS</button>
<button onclick="clic('select * from livres;')">LIVRES</button>
<button onclick="clic('select livres.nom, livres.id from livres, emprunts where livres.id=emprunts.idl and emprunts.dateFin is NULL;')">LIVRES SORTIS</button>
<button onclick="clic('select nom from livres where absent=0;')">LIVRES DISPOS</button>
<button onclick="clic('select * from auteurs;')">AUTEURS</button>
<button onclick="clic('select * from genres;')">GENRES</button>
<br>
<div id='affiche1' class="aff"></div>

</body>
</html>