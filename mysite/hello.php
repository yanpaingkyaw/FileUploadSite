<?php
    //for($i=1; $i <=5; $i++) {
        //echo "Hello World"; // + $i;

    //}
    echo "<h2>Hello Page</h2><br/>" ;
    for ($i = 1; $i <= 3; $i++) {
        sleep(1);
        echo "Hello World:  " . $i . "-" . date('h:i:s') . " <br/>";
        
    }

?>