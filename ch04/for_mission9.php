<?php
    /*
    만약에 star값이 3이면
    *
    **
    ***
    만약에 star값이 6
    *
    **
    ***
    ****
    *****
    ******
    */
    $star = rand(3, 10);
    print "star : $star <br>";
    for($i=0; $i<$star; $i++)
    {
        for($z=0; $z<=$i; $z++)
        {
            print "*";
        }
        print "<br>";
    }
?>