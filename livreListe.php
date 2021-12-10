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
            background-color: ;
            border: 2px solid red;
        }
    </style>
</head>

<body>
<script>
    function chercherDataBackB1()
    {
        const xhttp = new XMLHttpRequest();
        
        xhttp.onload = function() 
        {
            console.log(this.responseText );
            let tab =  JSON.parse(  this.responseText );
            //document.getElementById("affiche1").innerHTML = dict[ 'nom' ];
            //document.getElementById("affiche2").innerHTML = dict[ 'dateNaiss' ];
            document.getElementById("list").innerHTML = " ";
            for ( let ligne of tab) 
            {
                //console.log( ligne )
                document.getElementById("list").innerHTML += ligne['nom']+"<br>"
            }
        
        }

<<<<<<< HEAD:livreListe.php
        xhttp.open("GET", "donneLivresList.php");
=======
        titre  = document.getElementById( 'nom' ).value;
        auteur = document.getElementById( 'auteur' ).value;

        url = "addLivreAuteur.php?titre="+titre+"&"+"auteur="+auteur;
        console.log( url );
        xhttp.open("GET", url);
>>>>>>> biblioX:addLivreAuteurA.php
        xhttp.send();
    }


</script>

                     
    <button onclick="chercherDataBackB1()">GO</button>
    <br>
  
    <div  class="list" id="list">list</div>





</body>
</html>