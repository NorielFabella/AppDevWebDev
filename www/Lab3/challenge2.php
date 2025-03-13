<?php
/*
 Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop. 
*/


$numbers = [1, 2, 3, 4, 5]; //sum using foreach loop
$numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];  //sum using for loop

//solution goes here

$sum = 0;

foreach($numbers as $number)
{
    $sum += $number;
}

echo "Sum array using foreach loop" . "<br>";
echo $sum . "<br>" . "<br>";

$sum = 0;

for($counter = 0; $counter < count($numbers2); $counter++)
{
    $sum += $numbers2[$counter];
}

echo "Sum array using for loop" . "<br>";
echo $sum;

/* sample output
Sum array using foreach loop
15
Sum array using for loop
64

*/

?>