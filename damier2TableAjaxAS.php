<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .blanc {
            width: 50px;
            height: 50px;
            background-color: white;
            color: black;
            text-align: center;
        }

        .noir {
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
    <input type="range" min='2' max='8' onchange="newBoard( this.value )">
    <div id="mess"></div>

    <script>
        var nrbCase = 12;
        var numHaz = getNumberRandom(nrbCase);
        console.log(numHaz);
        
        

        function setBoard() {
            newBoard(8);
        }

        function newBoard(sizex) {
            
            nrbCase = sizex*sizex-1;
            
            $.post(
                'http://localhost/work/test01/test/createBoardAS.php', {
                    size: sizex
                },
                function(datas, status) {
                    $("#board").html(datas);
                }
            );
        }


        function testCase(numCase) {
            
            console.log("je suis la case : " + numCase);
            let message = "";
            if (numCase > numHaz)
                message = "trop grand !!!!";
            else
            if (numCase < numHaz)
                message = "trop petit !!!!";
            else
                message = "gagné !!!!";

            document.getElementById("mess").innerHTML = message;
        }

        function getNumberRandom(nbrCase) {
            console.log("nbrcase = "+ nrbCase);
            $.post(
                'http://localhost/work/test01/test/getRandomAS.php', 
                {
                    max: nbrCase
                },
                function(datas, status) {
                    console.log("datas = "+datas);
                }
            );
        }
    </script>

</body>

</html>