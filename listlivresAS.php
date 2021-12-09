<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>

<body>
    <script>
        function chercherDataBackB1() {
            const xhttp = new XMLHttpRequest();

            xhttp.onload = function() {
                console.log(this.responseText);
                let dict = JSON.parse(this.responseText);
                document.getElementById("list").innerHTML = "";
                for (let ligne of dict) {
                    //console.log( ligne )
                    document.getElementById("list").innerHTML += ligne['nom'] + "<br>"
                }

            }

            xhttp.open("GET", "donneLivresAS.php");
            xhttp.send();
        }
    </script>


    <button onclick="chercherDataBackB1()">GO</button>
    <br>
    <div class="list" id="list"></div>

</body>

</html>