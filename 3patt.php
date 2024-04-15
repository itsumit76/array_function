<?php

// for($row=1; $row<=4; $row++)
// {
//    for($clm=1; $clm<=5; $clm++){
//     echo "$clm".' ';
    
//    }
//   echo "<br>";
// }

$str = '';
$str .= '<table border="1">';
for ($row = 1; $row <= 3; $row++) {
 $str .= '<tr>';
 for ($column = 1; $column <= 5; $column++) {
 $str .= '<td>'.$column.'</td>';
 }
 $str .= '</tr>';
}
$str .= '</table>';
echo $str;
?>