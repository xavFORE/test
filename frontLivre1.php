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
    function listEmprunteurs()
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
                    chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                }
                chaine += "</table>";
                //console.log( chaine );
                document.getElementById("aff").innerHTML = chaine;
        }
        // je prépare l'appel de l'URL
        xhttp.open("GET", "listEmprunteurs.php");
        // j'envoie l'url
        xhttp.send();
    }
</script>
<script>
    function listLivres()
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                //console.log( this.responseText );
                let tableauLivres = JSON.parse( this.responseText );  
                let chaine = "<table>";
                for ( ligne of tableauLivres )
                {
                    chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                }
                chaine += "</table>";
                //console.log( chaine );
                document.getElementById("affLivres").innerHTML = chaine;
        }
        // je prépare l'appel de l'URL
        xhttp.open("GET", "listLivres.php");
        // j'envoie l'url
        xhttp.send();
    }
</script>

<script>
    function listLivresSortis()
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                console.log( this.responseText );
                let tableauLivresSortis = JSON.parse( this.responseText );  
                let chaine = "<table>";
                for ( ligne of tableauLivresSortis )
                {
                    chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                }
                chaine += "</table>";
                //console.log( chaine );
                document.getElementById("affLivresSorties").innerHTML = chaine;
        }
        // je prépare l'appel de l'URL
        xhttp.open("GET", "listLivresSortis.php");
        // j'envoie l'url
        xhttp.send();
    }
</script><script>
    function listLivresDispos()
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                console.log( this.responseText );
                let tableauLivresDispos  = JSON.parse( this.responseText );  
                let chaine = "<table>";
                for ( ligne of tableauLivresDispos )
                {
                    chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                }
                chaine += "</table>";
                //console.log( chaine );
                document.getElementById("afflivresDispos").innerHTML = chaine;
        }
        // je prépare l'appel de l'URL
        xhttp.open("GET", "livresDispos.php");
        // j'envoie l'url
        xhttp.send();
    }
</script>

<button onclick="listEmprunteurs()">EMPRUNTEURS</button>
<button onclick="listLivres()">LIVRES</button>
<button onclick="listLivresSortis()">LIVRES SORTIS</button>
<button onclick="listLivresDispos()">LIVRES DISPOS</button>
<br>
<div  id="aff"></div>
<br>
<div id="affLivres"></div>
<br>
<div id="affLivresSorties"></div>
<br>
<div id="afflivresDispos"></div>


</body>
</html>