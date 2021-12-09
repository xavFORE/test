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
        xhttp.onload = function() 
        {
            console.log(this.responseText );
            let tab =  JSON.parse(  this.responseText );
            document.getElementById("list").innerHTML = '';
            for ( let ligne of tab) 
            {
                //console.log( ligne )
                document.getElementById("list").innerHTML += ligne['nom']+"<br>"
            }
        }

        xhttp.open("GET", "donneLivresList.php");
        xhttp.send();
    }


</script>

        

    <input type="text" id="nom" placeholder="titre livre">
    <button onclick="chercherDataBackB1()">GO</button>
    <br>





</body>
</html>