
<?php
include 'html_lib.php';

    echo "<h2>Control Structure Page</h2>";

    $rand_val = rand(1,5);
    echo_br("our predefine value is : 4");

    if($rand_val == 4) {
        echo_br("Random value: " . $rand_val);
        echo "Match with Random value!!!";
    }
    else {
        echo_br("Random value: " . $rand_val);
        echo "Mismatch with Random value!!!";
    }
?>