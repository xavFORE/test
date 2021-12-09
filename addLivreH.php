<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<script>
    function chercherDataBackB1()
    {
        const xhttp = new XMLHttpRequest();
        {
           titre = document.getElementById("titre").innerHTML =
          this.responseText;
        }

        xhttp.open("GET", "addLivre.php?titre="+titre);
        xhttp.send();
    }


</script>

    <input type="text" id="nom" placeholder="titre livre">
    <button onclick="chercherDataBackB1()">GO</button>
    





</body>
</html>