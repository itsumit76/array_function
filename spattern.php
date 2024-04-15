<?php
//outer loop
for($row=1; $row<=4; $row++){
    echo "Hello".$row. ' ';
//inner loop
    for($clm=1; $clm<=3; $clm++){
        echo "World".$clm.' ';
    }  
    echo "<br>";
}
?>