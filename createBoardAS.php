<?php
    $ligne = 8;
    $colone = 8;
    $compteur=0;    

    if ( $_POST)
    {
        $ligne = $colone = $_POST[ 'size' ];
    }

    print( "<table>\n");
    for( $i=0 ; $i<$ligne ; $i++ )
    {
        print( "<tr>\n");
        for( $j=0 ; $j < $colone ; $j++ )
        {
            if ( ($i+$j) % 2 == 0 )
                $class="class='noir'";
            else
                $class="class='blanc'";
            print( "<td onclick='testCase( $compteur )' $class>\n");
            print( "$compteur</td>\n");
            $compteur++;
        }
        print( "</tr>\n");
    }
    print( "</table>\n");
