<?php
/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

    1. Create an array of students with their names and grades (0 - 100)
        john 85,90,92,88
        jane 95,88,91,87
        joe  75,82,79,88

    2. Iterate over the students array with a foreach loop
    3. Calculate the average grade for each student

*/


//Your solution goes here....
$sum = 0;
$avg = 0.0;
$students = [
    
    ['name' => 'John', 'grades' => ['85', '90', '92', '88']],
    ['name' => 'Jane', 'grades' => ['95', '88', '91', '87']],
    ['name' => 'Joe', 'grades' => ['75', '82', '79', '88']]

];

echo "Average Grade" . "<br>";

foreach($students as $student)
{
    echo $student['name'] . " Average Grade = ";
    foreach($student['grades'] as $grade)
    {
        $sum += $grade;
        //echo $sum . "<br>";
    }

    $avg = $sum / count($student['grades']);
    
    echo $avg . "<br>";
    
    $sum = 0;
    
    
}

//var_dump($student['grades']);
//var_dump($students);















/* Sample output to be display

Average Grade
John: Average Grade = 88.75
Jane: Average Grade = 90.25
Joe: Average Grade = 81

*/
?>