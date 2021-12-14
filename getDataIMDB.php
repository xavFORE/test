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
        img 
        {
            height: 300px;
            width: 200px;
        }
    </style>
</head>

<body>
<script>
    function getData( )
    {
        url = 'https://imdb-api.com/en/API/Posters/k_9e5xbgg3/tt137566/name/?name=funes'
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                //console.log( this.responseText );
                let receivedData = JSON.parse( this.responseText );  

                console.log( receivedData );

                fullTitle = receivedData.fullTitle;
                posters = receivedData.posters;

                
                let chaine = '<table>';
                poster = posters[0];
                    height = poster.height;
                    width = poster.width;
                    link = poster.link;
                    console.log( link  );
                    chaine += "<img src='"+link+"'>";
                chaine += '</table>';   
                document.getElementById("aff").innerHTML = chaine;
        }
        // je prépare l'appel de l'URL
        xhttp.open("GET", url );
        // j'envoie l'url
        xhttp.send();
    } 
</script>

<button onclick="getData()">GET</button>
<br>

<div  id="aff"></div>
</body>
</html>