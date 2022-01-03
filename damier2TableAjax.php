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
            color: black; 
            text-align: center; 
        }
        .noir
        {
            width: 50px;
            height: 50px;
            background-color: black;
            color: white; 
            text-align: center;
        }
    </style>
</head>
<body onload="setBoard()">

<div id="board"></div>
<input type="range" min='2' max='8' onchange="newBoard( this.value ) ">
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
                let ligne = sizex;
                let colone = sizex;
                let compteur=0;    
                let chaine =" ";
                 chaine="<table>\n";
                for( let i=0 ; i<ligne ; i++ )
                {
                    chaine+="<tr>\n";
                    for( let j=0 ; j < colone ; j++ )
                    {
                        if ( (i+j) % 2 == 0 )
                            couleur="noir";
                        else
                            couleur="blanc";
                        chaine+='<td onclick="testCase('+ compteur +')" class =' + couleur+ '>'+(compteur+1)+'\n';
                        chaine+= "</td>\n";
                        compteur++;
                    }
                    chaine+= "</tr>\n";
                }
                    chaine+= "</table>\n";
                    console.log(chaine); 
                    //document.getElementById( "board").innerHTML = chaine;
                    $( "#board" ).html( chaine );
                    getRNDCB( sizex * sizex ); 
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

  

    function getRNDCB( nbrCase  )
    {
        $.post(
                'http://localhost/work/testold/getRandom.php',
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
        )
    };
</script>

        
</body>
</html>