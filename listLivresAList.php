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
    function chercherDataBackB2()
    {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() 
        {
            console.log(this.responseText );
            let tab =  JSON.parse(  this.responseText );
            document.getElementById("list2").innerHTML = '';
            for ( let ligne of tab) 
            {
                //console.log( ligne )
                document.getElementById("list2").innerHTML += ligne['nom']+"<br>"
            }
        }

        xhttp.open("GET", "donneLivresList.php");
        xhttp.send();
    }


</script>

                     
    <button onclick="chercherDataBackB2()">GO</button>
    <br>
    <div  class="list" id="list2">list</div>



</body>
</html>