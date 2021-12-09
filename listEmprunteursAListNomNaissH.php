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
            color:black;
            font-size: 30px;
            height: 40px;
            background-color: pink;
            border: 2px solid red;
        }
        .list 
        {
            color:black;
            font-size: 10px;
            background-color: pink;
            border: 2px solid red;
        }
        .livre 
        {
            color:black;
            font-size: 10px;
            background-color: pink;
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
            let dict =  JSON.parse(  this.responseText );
            document.getElementById("affiche1").innerHTML = dict[ 'nom' ];
            document.getElementById("affiche2").innerHTML = dict[ 'dateNaiss' ];
            document.getElementById("livre").innerHTML = dict[ 'livres' ];

            for ( let ligne of dict['livre']) 
            {
                //console.log( ligne )
                document.getElementById("livre").innerHTML += ligne['nom']+"<br>"
            }
        
        }

        xhttp.open("GET", "donneEmprunteursListH.php");
        xhttp.send();
    }


</script>

                     
    <button onclick="chercherDataBackB1()">GO</button>
    <br>
    <div class="aff" id="affiche1">nom</div>
    <div class="aff" id="affiche2">date</div>
    <div  class="list" id="list"></div>
    <div  class="livre" id="livre">livre</div>

</body>
</html>