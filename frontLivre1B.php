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
            console.log(this.responseText );
            let tableauData =  JSON.parse(  this.responseText );
            let chaine = "<table>";
            for (ligne of tableauData)
            {
                chaine +="<tr><td>"+ligne['nom']+"</tr></td>";
            }
            chaine +="</table>";
            document.getElementById("aff").innerHTML = chaine;
        }

        // je prépare l'appel de l'URL
        xhttp.open("GET", "listEmprunteurs.php");
        // j'envoie l'url
        xhttp.send();
    }

    function listLivres()     
    {
        const xhttp = new XMLHttpRequest();

        xhttp.onload = function() 
        {   
            let tableauData =  JSON.parse(  this.responseText );
            //console.log(tableauData);
            //console.log(tableauData.length);
            let chaine = "<table>";

            for (ligne of tableauData)
            {
                //console.log(ligne);
                chaine +="<tr><td>"+ligne['nom']+"</tr></td>";
            }
            chaine +="</table>";
            document.getElementById("aff").innerHTML = chaine;
        }
        xhttp.open("GET", "listLivres.php");
        xhttp.send();
    }
    function listLivresSortis() 
    { 
        const xhttp = new XMLHttpRequest();

        xhttp.onload = function() 
        {   
        let tableauData =  JSON.parse(  this.responseText );
            //console.log(this.responseText);
            //console.log(tableauData.length);
            let chaine = "<table>";

            for (ligne of tableauData)
            {
                //console.log(ligne);
                chaine +="<tr><td>"+ligne['nom']+"</tr></td>";
            }
            chaine +="</table>";
            document.getElementById("aff").innerHTML = chaine;
        }
        xhttp.open("GET", "listLivresSortis.php");
        xhttp.send();   
    }

    function listLivresDispos() 
    {}
</script>
<button onclick="listEmprunteurs()">EMPRUNTEURS</button>
<button onclick="listLivres()">LIVRES</button>
<button onclick="listLivresSortis()">LIVRES SORTIS</button>
<button onclick="listLivresDispos()">LIVRES DISPOS</button>
<br>
<div id="aff"></div>



</body>
</html>