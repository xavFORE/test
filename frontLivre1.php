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
    function listEmprunteurs()
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
        xhttp.open("GET", "donneEmprunteurs.php");
        // j'envoie l'url
        xhttp.send();
    }

    function listLivres()     
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
            // console.log(this.responseText );
            let tab =  JSON.parse( this.responseText );
            document.getElementById("affiche1").innerHTML = "";

            for ( let ligne of tab) 
            {
                // console.log( ligne )
                document.getElementById("affiche1").innerHTML += ligne+"<br>";
            }
        }

        // je prépare l'appel de l'URL
        xhttp.open("GET", "donneLivresList.php");
        // j'envoie l'url
        xhttp.send();
    }

    function listLivresSortis() 
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
            // console.log( this.responseText );
            let tab =  JSON.parse( this.responseText );
            document.getElementById("affiche1").innerHTML = "";

            for ( let ligne of tab) 
            {
                // console.log( ligne )
                document.getElementById("affiche1").innerHTML += ligne+"<br>";
            }
        }

        // je prépare l'appel de l'URL
        xhttp.open("GET", "donneLivresListSortis.php");
        // j'envoie l'url
        xhttp.send();
    }

    function listLivresDispos() 
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
            // console.log(this.responseText );
            let tab =  JSON.parse( this.responseText );
            document.getElementById("affiche1").innerHTML = "";

            for ( let ligne of tab) 
            {
                // console.log( ligne )
                document.getElementById("affiche1").innerHTML += ligne+"<br>";
            }
        }

        // je prépare l'appel de l'URL
        xhttp.open("GET", "donneLivresListDispos.php");
        // j'envoie l'url
        xhttp.send();
    }
</script>
<button onclick="listEmprunteurs()">EMPRUNTEURS</button>
<button onclick="listLivres()">LIVRES</button>
<button onclick="listLivresSortis()">LIVRES SORTIS</button>
<button onclick="listLivresDispos()">LIVRES DISPOS</button>
<br>
<div id='affiche1' class="aff"></div>



</body>
</html>