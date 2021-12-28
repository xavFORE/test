<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
=======
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
>>>>>>> origin/revisionX
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

    var numHaz = getRND( ???? )
    var nrbCase = 0;

    function setBoard( )
    {
<<<<<<< HEAD
        print( "<tr>\n");
        for( $j=0 ; $j < $colone ; $j++ )
        {
            //if ( $i % 2 == 0 && $j % 2 == 0)
            if ( ($i+$j) % 2 == 0 )
                $class="class='noir'";
            else
                $class="class='blanc'";
            //print( "<td $class>\n");
            print( "<td onclick='testCase( $compteur )' $class>\n");
            print( "</td>\n");
            $compteur++;
        }
        print( "</tr>\n");
         
    }

?>
</table>
=======
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
                }
        );
    }
>>>>>>> origin/revisionX


<<<<<<< HEAD
<script>
    
   /* function getNumberRandom1()
    {   let number = 0; 
        $.get(
            // premier param URL qui fournit les données
            "http://localhost/work/testold/GetNumberBack.php",
            // deuxieme param fonction callBack qui traite les données 
            function( data, status )
            {
                    number = JSON.parse( data );
            }   
        );
        return number; 
    }*/
    var numHaz =getNumberRandom(<?=$compteur?>);
    
=======
>>>>>>> origin/revisionX
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
    function getNumberRandom(compteur)
    {    
        //console.log(compteur); 
        let dictTXT = $.ajax({ 
                        type: "GET",   
                        url: "http://localhost/work/testold/GetNumberBack.php?compteur=" + compteur,   
                        async: false
                      }).responseText;
             dictVal = JSON.parse(dictTXT);
            console.log(dictVal); 
            let numHaz = dictVal['numHaz']; 

<<<<<<< HEAD
            console.log(numHaz);
            return numHaz;      
    } 
=======
    function getNumberRandom( nbrCase  )
    {
        let dictTXT =  $.ajax(
            {
                type: "POST",
                url: 'http://localhost/work/test/getRandom.php',
                async: false
            }).responseText;

        dictVAL = JSON.parse( dictTXT );
        let hazard = dictVAL[ 'valeurHazard' ]; 
        return hazard;
    }
>>>>>>> origin/revisionX


</script>
        <div id="res"></div>
        <input type=range></input>
</body>
</html>