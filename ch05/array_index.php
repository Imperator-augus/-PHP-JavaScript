<?php
    $numbers = array(10, 20, 5=>30, 40);

    print_r($numbers);
    print "<br>";
    print "count : " . count($numbers) . "<br>";

    $numbers[4] = 30;

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i] . "<br>";
    }
    print "--끝--<br>";

    foreach($numbers as $is)
    {
        print $is . "<br>";
    }
?>