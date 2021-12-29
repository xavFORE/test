<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .blanc
        {
            width: 50px;
            height: 50px;
            background-color: white;
        }
        .noir
        {
            width: 50px;
            height: 50px;
            background-color: black;
        }
    </style>
</head>
<body onload="setBoard()">

<div id="board"></div>
<input type="range" min='2' max='12' onchange="newBoard( this.value )">
<div id="mess"></div>
<br>
<button onclick="rejouer()">Rejouer</button>

<script>
    var nbrCase = $("input").val()*$("input").val();
    var numHaz;
    var clic = 0;
    console.log("nbrCase : "+nbrCase);

    function rejouer()
    {
        nbrCase = $("input").val()*$("input").val();
        clic = 0;
        setBoard();
    }

    function setBoard( )
    {
        newBoard( nbrCase/$("input").val() );
        $("#mess").text(nbrCase/$("input").val());
    }

    function newBoard( sizex )
    {
        // $.post(  
        //         'createBoard.php',
        //         {
        //             size : sizex
        //         },
        //         function( datas, status)
        //         {
        //             $( "#board").html( datas ); 
        //         }
        // );
        
        let ligne = sizex;
        let colone = sizex;
        let compteur = 0;
        let classe = "";
        numHaz = getNumberRandom( sizex*sizex -1);
        console.log("numHaz : "+numHaz);
        console.log("size    : "+sizex);

        $("#mess").text(sizex);
        $("#board").text( "" );

        $("#board").append( "<table>\n");
        for( let i=0 ; i<ligne ; i++ )
        {
            $("#board").append( "<tr>\n");
            for( let j=0 ; j < colone ; j++ )
            {
                if ( (i+j) % 2 == 0 )
                    classe="class='noir'";
                else
                    classe="class='blanc'";
                    $("#board").append( "<td onclick='testCase( "+compteur+" )' "+classe+">\n");
                    $("#board").append( "</td>\n");
                compteur++;
            }
            $("#board").append( "</tr>\n");
        }
        $("#board").append( "</table>\n");
    }

    function testCase( numCase )
    {
        clic++;
        console.log( "je suis la case : " + numCase);
        let message = "";
        if ( numCase > numHaz  )
            message = "trop grand !!!!";
        else 
        if ( numCase < numHaz )
            message = "trop petit !!!!";
        else
        {
            $.post("sendDataDamier.php", { nbrClic: clic });
            message = "gagné !!!!";
        }
            
        $( "#mess").text(message);
    }

    function getNumberRandom( nbrCase  )
    {
        return $.ajax(
            {
                type: "POST",
                url: 'getRandom.php',
                data: { max: nbrCase },
                async: false
            }).responseText;

        // dictVAL = JSON.parse( dictTXT );
        // let hazard = dictVAL[ 'valeurHazard' ]; 
        // return hazard;
    }
</script>

</body>
</html>