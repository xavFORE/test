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
        //  https://opendata.lillemetropole.fr/explore/embed/dataset/disponibilite-parkings/map/?location=11,50.6677,3.12012&basemap=jawg.streets
//url = 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=disponibilite-parkings&q=&facet=libelle&facet=ville&facet=etat'
//url = 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&lang=fr&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion';
url = "https://public.opendatasoft.com/api/records/1.0/search/?dataset=arome-0025-sp1_sp2&q=";
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
                for( parking of tableau )
                {
                    temperature= parking.fields['2_metre_temperature'];
                    temperature_max =  parking.fields.nom;
                    nbplacesdispo =  parking.fields.nbplacesdispo;
                    nbvelosdispo = parking.fields.nbvelosdispo;
                    adresse = parking.fields.adresse;
                    console.log( "temperature= "+temperature );
                    chaine += "<tr><td>temperature= "+temperature+"</td></tr>";
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