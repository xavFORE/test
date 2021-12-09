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
    function chercherDataBackB1()
    {
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
            console.log(this.responseText );
            let dict =  JSON.parse(  this.responseText );
            document.getElementById("affiche1").innerHTML = dict[ 'nom' ];
            document.getElementById("affiche2").innerHTML = dict[ 'dateNaiss' ];
            document.getElementById("list").innerHTML = array[ 'nom' ];

        }

        // je prépare l'appel de l'URL
        xhttp.open("GET", "donneEmprunteursList.php");
        // j'envoie l'url
        xhttp.send();
    }


</script>


    <button onclick="chercherDataBackB1()">GO</button>
    <br>



    <div class="aff" id="affiche1">nom</div>
    <div class="aff" id="affiche2">date</div>
    <div  class="list" id="list">list</div>







</body>
</html>