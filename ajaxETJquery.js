<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        div {
            height : 50px;
            font-size: 30px;
            background-color: gray;
            margin: 4px;
        }

        #affichage1 {
            color: red;
        }

        #affichage2 {
            color: blue;
        }

        .maDiv {
            background-color: black;
        }

        .taDiv {
            background-color: pink;
        }
    </style>


</head>

<body>
    <script>

        function JA() {
            $("#affichage3").text("joyeux noel Leon ");
            $("#affichage4").text("M't gouliche Bonne Année");
            $("p").css("background-color", "yellow");


            function klickj() {
                $(".maDiv").text("On s'amuse comme on peut !");
                JA();
            }

            function cache() {
                $(".taDiv").toggle();
            }

            function effet() {
                /*
                var p = $(".maDiv").css("background-color", "yellow");
                p.hide(1500).show(1500);
                p.queue( function() {
                p.css("background-color", "red");
                });
                */
                //$( ".maDiv" ).hide(500).show(500);

                //$(".maDiv").animate({fontSize: '50px'}, "slow").animate({fontSize: '30px'}, "slow");


                $(".maDiv").animate
                    (
                        {
                            opacity: '0.5',
                        },
                        1500,
                        // fonction callback
                        JA
                    );
                    
            }

          
        

        

    </script>

    <button onclick="klickj()">JA</button>
    <button onclick="cache()">cache</button>
    <button onclick="effet()">effet</button>
    <br>
    <div class="maDiv" id="affichage1"></div>
    <div class="maDiv" id="affichage2"></div>
    <div class="taDiv" id="affichage3"></div>
    <div class="taDiv" id="affichage4"></div>

</body>

</html>