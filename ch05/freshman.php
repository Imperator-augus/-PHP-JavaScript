<?php
    $freshman = array(
        "David" => "Computer",
        "Alice" => "Math",
        "Elsa"  => "Physics",
        "Bob"   => "Music",
        "Chris" => "Electronics"
    );

    print_r($freshman);
    print "<br>";
    print $freshman["David"] . "<br>";
    print $freshman["Alice"] . "<br>";
    print $freshman["Elsa"] . "<br>";
    print $freshman["Bob"] . "<br>";
    print $freshman["Chris"] . "<br>";

    $freshman["Bob"] = "Dance";
    print "<br><br>";
    print $freshman["Bob"] . "<br>";

    $freshman["Frank"] = "History";
    print $freshman["Frank"] . "<br>";
    print_r($freshman);
?>