<?php

// //outer loop
// for($row=1; $row<=10; $row++){
//         //inner loop
//     for($clm=1; $clm<=10; $clm++){
//         echo $clm * $row."&nbsp";
//         // echo "<br>";
//     }
//  echo "<br>";
// }
$row_length = 10;
$column_length = 10;
for ($row = 1; $row <= $row_length; $row++) {
 for ($column = 1; $column <= $column_length; $column++) {
 echo ($row * $column ) . "&nbsp;";
 }
 echo '<br>';
}












?>