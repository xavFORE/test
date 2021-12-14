<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .aff {
            color: red;
            font-size: 30px;
            height: 40px;
            background-color: gray;
            border: 2px solid red;
        }

        .list {
            color: red;
            font-size: 10px;
            background-color: gray;
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <script>
        function list(lien) {
            $.get(
                // premier param URL qui fournit les données
                lien,
                // deuxieme param fonction callBack qui traite les données 
                function(data, status) {
                    $("#aff").text("");
                    let tableau = JSON.parse(data);
                    console.log(tableau);
                    let chaine = "<table>";
                    for (ligne of tableau)
                        chaine += "<tr><td>" + ligne['nom'] + "</td></tr>";;
                    chaine += "</table>";
                    $("#aff").append(chaine);
                }
            );
        }
    </script>
    <button onclick="list('listEmprunteurs.php')">EMPRUNTEURS</button>
    <button onclick="list('listLivres.php')">LIVRES</button>
    <button onclick="list('livresSortis.php')">LIVRES SORTIS</button>
    <button onclick="list('livresDispos.php')">LIVRES DISPOS</button>
    <button onclick="list('listAuteurs.php')">AUTEURS</button>
    <br>
    <div id="aff"></div>
</body>

</html>