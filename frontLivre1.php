<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aff 
        {
            color:red;
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
   
    function requete(url){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            console.log(this.responseText );
            let tab =  JSON.parse( this.responseText );
            document.getElementById("aff").innerHTML = '';
            for ( let ligne of tab) 
            {
                //console.log( ligne )
                document.getElementById("aff").innerHTML += ligne["nom"]+"<br>";
            }
        }
             xhttp.open("GET",url);
        // j'envoie l'url
             xhttp.send();
                 }

</script>
<button onclick="requete('list.php?query=select * from emprunteurs;')">EMPRUNTEURS</button>
<button onclick="requete('list.php?query=select * from livres;')">LIVRES</button>
<button onclick="requete('list.php?query=select nom from livres where absent = 1;')">LIVRES SORTIS</button>
<button onclick='requete("list.php?query=update livres set absent=0;update emprunts, livres set livres.absent=1 where livres.id = emprunts.idl and emprunts.dateFin is NULL; livres, select id, nom from livres where absent=0;")'>LIVRES DISPOS</button>
<br>
<div id="aff"></div>



</body>
</html>