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
        function de_base(para) {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                //console.log(this.responseText );
                let tab = JSON.parse(this.responseText);
                document.getElementById("aff").innerHTML = '';
                for (let ligne of tab) {
                    //console.log(ligne)
                    document.getElementById("aff").innerHTML += ligne['nom'] + "<br>"
                }
            }

            xhttp.open("GET", para);
            xhttp.send();
        }
    </script>
    <button onclick='de_base("testsql01.php?requet=select * from emprunteurs;")'>EMPRUNTEURS</button>
    <button onclick='de_base("testsql01.php?requet=select * from livres;")'>LIVRES</button>
    <button onclick='de_base("testsql01.php?requet=select livres.nom, livres.id from livres, emprunts where livres.id=emprunts.idl and emprunts.dateFin is NULL;")'>LIVRES SORTIS</button>
    <button onclick='de_base("testsql01.php?requet=select nom from livres where livres.absent = 0;")'>LIVRES DISPOS</button>
    <button onclick='de_base("testsql01.php?requet=select * from genres;")'>Genres</button>
    <br>
    <div id="aff" class="aff"></div>



</body>

</html>