<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    var numHaz; 
    getRNDCB( 64 );
    var nrbCase = 0;

    function setBoard( )
    {
        newBoard( 8 );
    }

    function newBoard( sizex )
    {
        console.log( sizex );
        $.post(  
                'http://localhost/work/test/createBoard.php',
                {
                    size : sizex
                },
                function( datas, status)
                {
                    $( "#board").html( datas );
                    getRNDCB( sizex * sizex ); 
                }
        );
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

    function getRND( nbrCase  )
    {
        let dictTXT =  $.ajax(
            {
                type: "POST",
                url: 'http://localhost/work/test/getRandom.php',
                async: false,
                data : { max : nbrCase }
            }).responseText;

        dictVAL = JSON.parse( dictTXT );
        let hazard = dictVAL[ 'valeurHazard' ]; 
        console.log( "hazard : " + hazard );
        return hazard;
    }

    function getRNDCB( nbrCase  )
    {
        $.post(
                'http://localhost/work/test/getRandom.php',
                { 
                    max : nbrCase 
                },
                function( datas, status )
                {
                    dictVAL = JSON.parse( datas );
                    let hazard = dictVAL[ 'valeurHazard' ]; 
                    console.log( "hazard : " + hazard );
                    numHaz = hazard;
                }
        );
    }
</script>

</body>
</html>