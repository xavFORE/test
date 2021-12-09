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
        const xhttp = new XMLHttpRequest();

        let titre = document.getElementById('livre').value;
        let nom = document.getElementById('auteur').value;
        
        xhttp.onload = function() 
        {
            document.getElementById("aff").innerHTML = this.responseText;
        }

        xhttp.open("GET", "addLivre.php?titre="+titre+"&auteur="+nom);
        xhttp.send();
    }
</script>

    <input type="text" id="livre" placeholder="ajouter livre">
    <input type="text" id="auteur" placeholder="ajouter auteur">
    <button onclick="chercherDataBackB1()">GO</button>
    <br>
    <div id='aff'></div>

</body>
</html>