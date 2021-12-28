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
<input type="range" min='2' max='8' onchange="newBoard( this.value )">
<div id="mess"></div>

<script>

    var numHaz = getRND( 0 );
    var nrbCase = 0;

    function setBoard( )
    {
        newBoard( 8 );
    }

    function newBoard( sizex )
    {
        $.post(  
                'createBoard.php',
                {
                    size : sizex
                },
                function( datas, status)
                {
                    $( "#board").html( datas ); 
                }
        );
    }

    function getRND(v)
    {
        
    }

    function testCase( numCase )
    {
        console.log( "je suis la case : " + numCase);
        let message = "";
        if ( numCase > numHaz  )
            message = "trop grand !!!!";
        else 
        if ( numCase < numHaz )
            message = "trop petit !!!!";
        else
            message = "gagné !!!!";

        document.getElementById( "mess").innerHTML = message;
    }

    function getNumberRandom( nbrCase  )
    {
        let dictTXT =  $.ajax(
            {
                type: "POST",
                url: 'getRandom.php',
                async: false
            }).responseText;

        dictVAL = JSON.parse( dictTXT );
        let hazard = dictVAL[ 'valeurHazard' ]; 
        return hazard;
    }
</script>

</body>
</html>