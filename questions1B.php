
<?php

if ( $_POST )
{
    if (  isset($_POST[ 'cancel']) )
    {
        ini_set("session.use_cookies", 0);
        ini_set("session.use_only_cookies", 0);
        ini_set("session.use_trans_sid", 1);
        ini_set("session.cache_limiter", "");
    }
    session_start();
}
else
{
?>
    
    <div class="pop">
        veuillez accepter les cookies
        <form action="#" method="POST">
            <button type="submit" name="ok">OK</button>
            <button type="cancel" name="cancel">NO</button>
        </form>
    </div>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button
    {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
    }
   
    </style>
<body>
    
</body>
</html>