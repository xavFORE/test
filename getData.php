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
        // url = 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=disponibilite-parkings&q=&facet=libelle&facet=ville&facet=etat'
        // url = 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&lang=fr&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion';
        // url = 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=previsions-meteo-france-metropole&q=';
        url = 'https://imdb-api.com/en/API/MostPopularMovies/k_z77iskfw';
        // new creation d'un objet XMLHttpRequest 
        const xhttp = new XMLHttpRequest();
        
        // je defini la fonction qui sera utilisé une fois les données chargées
        xhttp.onload = function() 
        {
                //console.log( this.responseText );
                let receivedData = JSON.parse( this.responseText );  

                console.log( receivedData );

                tableau = receivedData.items;
                css = " style='border:solid black;'";

                let chaine = '<table' + css + '>';
                for( parking of tableau )
                {
                    // ville = parking.fields.commune;
                    // nom =  parking.fields.nom;
                    // place =  parking.fields.nbplacesdispo;
                    // adresse = parking.fields.adresse;
                    // hm = parking.fields.relative_humidity;
                    // w = parking.fields.wind_speed;
                    // j = parking.fields['2_metre_temperature'];
                    p = parking.image;
                    t = parking.fullTitle;
                    n = parking.imDbRating;

                    chaine += "<tr><td><img src='"+ p +"'/></td><td>"+t+"</td><td>Note /10 : "+n+"</td></tr>";
                    // console.log( ville + " " + nom + " " + adresse + " (" + place + ")" );
                    // chaine += "<tr><td" + css + ">" + hm + "</td><td" + css + ">" + w + "</td><td" + css + ">" + j + "</td></tr>";
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