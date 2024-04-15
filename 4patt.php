<?php
$num=4;
$count=1;
for($i=1; $i<=$num; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo " $count ";
        $count++;
    }
    echo "</br>";
}

?>