<?php
    if ( $_POST )
    {
        if (  isset($_POST[ 'cancel']) )
        {
            ini_set("session.use_only_cookies", 0);
            ini_set("session.use_trans_sid", 1);
            ini_set("session.cache_limiter", "");
        }
