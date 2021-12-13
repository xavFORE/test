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
    function getData( )
    {
      url = 'https://www.data.gouv.fr/fr/datasets/zones-de-maree/'
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                //console.log( this.responseText );
                let receivedData = JSON.parse( this.responseText );  

                console.log( receivedData );

               tableau = receivedData.records;


                let chaine = '<table>';
                for( ligne of tableau )
                {
                    
                    nbvelosdispo =  ligne.fields.nbvelosdispo;
                    adresse = ligne.fields.adresse
                    //adresse =  parking.fields.adresse;
                    console.log( nbvelosdispo + " " + adresse );
                    chaine += "<tr><td>"+nbvelosdispo + "</td><td>"+adresse + "</td></tr>";
                }
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