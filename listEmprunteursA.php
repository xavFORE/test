<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div 
        {
            color:red;
            font-size: 30px;
            height: 50px;
            background-color: pink;
            border: 2px solid;
        }
    </style>
</head>

<body>
<script>
    function chercherDataBackB1()
    {
        const xhttp = new XMLHttpRequest();
        
        xhttp.onload = function() {
                document.getElementById("affiche1, affiche2").innerHTML =
                this.responseText;
        }

        xhttp.open("GET", "donneEmprunteurs.php");
        xhttp.send();
    }


</script>


    <button onclick="chercherDataBackB1()">GO</button>
    <br>
    <div id="affiche1">Nom</div>
    <div id="affiche2">Date de naissance</div>





</body>
</html>