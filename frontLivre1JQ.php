<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .aff 
        {
            color:red;
            font-size: 30px;
            height: 40px;
            background-color: gray;
            border: 2px solid red;
        }
        .red 
        {
            color:red;
            font-size: 40px;
            background-color: gray;
            border: 2px solid red;
        }
    </style>
</head>

<body >
<script>
    $( document ).ready(
        function() 
        {
            $("#aff3").hide();
        });

    function test()
    {
        $(".red").
        text( "hello Coco").
        animate(
            {
                opacity: 0.25,
                top: "+=50",
                height: "toggle"
            }, 
            5000, 
            function() 
            {
                $("#aff2").text( "fin !");
            }
          );
    }

    function disparait()
    {
        $("#aff3").toggle();
    }

</script>
<button onclick="test()">test</button>
<br>

<div class="red" id="aff1"></div>
<br>
<div id="aff2"></div>
<br>
<button onclick="disparait()">ident</button>
<br>
<br>
<div class="red" id="aff3">
<input type="text" placeholder="login">
<input type="text" placeholder="password">
</div>

</body>
</html>