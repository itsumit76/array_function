<?php

$str = "MONU";

$len= strlen($str);

for($i=0; $i<=$len; $i++)
{
    //inner loop
    for($j=0; $j<=$i; $j++)
    {
        echo " $str[$j] ";
    }
    echo "<br/>";

    
}
      

?>