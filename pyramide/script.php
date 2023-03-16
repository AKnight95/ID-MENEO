<?php

    $number = $_POST['number'];

    for($i=1;$i<=$number;$i++){
        for($j=1;$j<=$number-$i;$j++){
            echo "&nbsp;&nbsp;";
        }
        for($k=1;$k<=$i;$k++){
            echo "X&nbsp;&nbsp;";
        }
            echo "<br />";
    }
    

?>