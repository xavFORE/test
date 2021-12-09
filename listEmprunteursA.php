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
            height: 40px;
            background-color: gray;
            border: 2px solid red;
        }
    </style>
</head>

<body>
<script>
    function chercherDataBackB1()
    {
        const xhttp = new XMLHttpRequest();
        
        xhttp.onload = function() {
                document.getElementById("affiche1","affiche2").innerHTML =
                this.responseText;
        }

        xhttp.open("GET", "donneEmprunteurs.php");
        xhttp.send();
    }


</script>


    <button onclick="chercherDataBackB1()">GO</button>
    <br>
<<<<<<< HEAD
    <div id="affiche1"></div>
    <div id="affiche2"></div>
=======
    <div id="affiche1">nom</div>
    <div id="affiche2">date</div>
>>>>>>> biblioX





</body>
</html>