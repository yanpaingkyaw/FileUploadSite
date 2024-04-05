<?php
    $linkArr = array( 
        "nameLink1" => "hello",
        "nameLink2" => "controlstructure"
    
    );

    echo "<h2>MySite Landing page</h2>";

    
    $link1 = "hello.php";
    $link2 = "controlstructure.php";
    //echo $linkArr["nameLink2"]; 
    
    echo "<ul>";
    
    echo "<li>";
    echo "<a href='$link1'>" . $linkArr["nameLink1"] . "</a>";
    echo "</li>";
    echo "<li>";
    echo "<a href='$link2'>" . $linkArr["nameLink2"] . "</a>";
    echo "</li>";

    echo "</ul>";
    
?>