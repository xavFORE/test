<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        function getData(url) {
            // new creation d'un objet XMLHttpRequest 
            const xhttp = new XMLHttpRequest();

            // je defini la fonction qui sera utilisé une fois les données chargées
            xhttp.onload = function() {
                //console.log( this.responseText );
                let tableauData = JSON.parse(this.responseText);
                let chaine = "<table>";
                for (ligne of tableauData) {
                    chaine += "<tr><td>" + ligne['nom'] + "</td></tr>";;
                }
                chaine += "</table>";
                //console.log( chaine );
                document.getElementById("aff").innerHTML = chaine;
            }
            // je prépare l'appel de l'URL
            xhttp.open("GET", url);
            // j'envoie l'url
            xhttp.send();
        }

        function sendData(url) {
            // new creation d'un objet XMLHttpRequest 
            const xhttp = new XMLHttpRequest();

            // je prépare l'appel de l'URL
            // enregistreLivre.php?nom=martine à la plage
            xhttp.open("GET", url);
            // j'envoie l'url
            xhttp.send();
        }


        function enregistre(tables) {
            let nom = document.getElementById("saisie").value;
            let url = "enregistreAS.php?nom=" + encodeURIComponent(nom)+"&tables="+tables;
            //console.log( url );
            sendData(url);
        }

        
    </script>
    <input type="text" id="saisie" placeholder="saisie">
    <br>
    <button onclick="enregistre('livres')">LIVRE</button>
    <button onclick="enregistre('auteurs')">AUTEUR</button>
    <button onclick="enregistre('emprunteurs')">EMPRUNTEUR</button>
    <br>
    <br>

    <button onclick='getData("listEmprunteurs.php")'>EMPRUNTEURS</button>
    <button onclick='getData("listLivres.php")'>LIVRES</button>
    <button onclick='getData("livresSortis.php")'>LIVRES SORTIS</button>
    <button onclick='getData("livresDispos.php")'>LIVRES DISPOS</button>
    <button onclick='getData("listAuteurs.php")'>AUTEURS</button>
    <br>



    <div id="aff"></div>
</body>

</html>