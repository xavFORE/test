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
    include( "mapage.php");
}
else
{
    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
        <style>
            a.selected {
            background-color:#1F75CC;
            color:white;
            z-index:100;
            }

            .messagepop {
            background-color:#FFFFFF;
            border:1px solid #999999;
            cursor:default;
            display:none;
            margin-top: 15px;
            position:absolute;
            text-align:left;
            width:394px;
            z-index:50;
            padding: 25px 25px 20px;
            }

            label {
            display: block;
            margin-bottom: 3px;
            padding-left: 15px;
            text-indent: -15px;
            }

            .messagepop p, .messagepop.div {
            border-bottom: 1px solid #EFEFEF;
            margin: 8px 0;
            padding-bottom: 8px;
            }
        </style>

      <script>
      function deselect(e) {
        $('.pop').slideFadeToggle(function() {
            e.removeClass('selected');
        });    
        }

        $(function() {
        $('#contact').on('click', function() {
            if($(this).hasClass('selected')) {
            deselect($(this));               
            } else {
            $(this).addClass('selected');
            $('.pop').slideFadeToggle();
            }
            return false;
        });

        $('.close').on('click', function() {
            deselect($('#contact'));
            return false;
        });
        });

        $.fn.slideFadeToggle = function(easing, callback) {
        return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
        };
</script>
  </head>
  <body>
      
  </body>
  </html>
  
  veuillez accepter les cookies
    <div class="messagepop pop">
        <form action="#" method="POST" id="new_message">
            <button type="submit" name="ok">OK</button>
            <button type="cancel" name="cancel">NO</button>
        </form>
    </div>
<?php

}
?>