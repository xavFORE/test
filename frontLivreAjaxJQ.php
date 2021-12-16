<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    $(document).ready(
            function()
            {
               $("#emp").click(
                   function()
                   {
                       console.log( "click emprunteurs" );
                        let tableau = JSON.parse( 
                            $("#aff").load("listEmprunteurs.php"));
                        let chaine = "<table>";
                        for ( ligne of tableau )
                        {
                            chaine += "<tr><td>"+ligne['nom']+"</td></tr>";;
                        }
                        chaine += "</table>";
                        $( "#aff").text( chaine );
                        
                   }
                );
            });

</script>
<br>

<button id="emp">EMPRUNTEURS</button>
<button onclick="listLivres()">LIVRES</button>
<button onclick="listLivresSortis()">LIVRES SORTIS</button>
<button onclick="listLivresDispos()">LIVRES DISPOS</button>
<button onclick="listAuteurs()">AUTEURS</button>
<br>

<div  id="aff"></div>
</body>
</html>