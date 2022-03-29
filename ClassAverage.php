<?php 

/* 

    Author: Coy Bailey
    Date: 9/16/21

*/

// Part 1

echo "Part 1</br>";

$className1 = "CMSC1212";
$s0 = 4;
$s1 = 1;
$s2 = 3;
$s3 = 3;
$s4 = 2;
$s5 = 3;
$s6 = 4;
$s7 = 2;
$s8 = 3;
$s9 = 3;
$average1 = (($s0 + $s1 + $s2 + $s3 + $s4 + $s5 + $s6 + $s7 + $s8 + $s9) / 10);

echo "Class $className1 has an average grade of $average1</br></br>";

?>

<?php // Part 2

echo "Part 2</br>";

$className2 = "CMSC1255";
$grades = array(4,1,3,4,2,4,4,3,2,3);
$add = 0;

for ($count = 0; $count <= 10; $count++)
{
    $add = $add + $grades[$count];
}
$average2 = $add / 10;

echo "Class $className2 has an average grade of $average2</br></br>";

?>

<?php // Part 3

echo "Part 3</br>";
$class1grade;
$class2grade;

switch ($average1)
{
    case ($average1 < 1);
        $class1grade = "F";
        break;
    case ($average1 >= 1) AND ($average1 < 2);
        $class1grade = "D";
        break;
    case ($average1 >= 2) AND ($average < 3);
        $class1grade = "C";
        break;
    case ($average1 >= 3) AND ($average1 < 4);
        $class1grade = "B";
        break;
    case ($average1 >= 4);
        $class1grade = "A";
        break;
}

echo "Class $className1 has a letter grade of $class1grade</br>";

switch ($average2)
{
    case ($average2 < 1);
        $class2grade = "F";
        break;
    case ($average2 >= 1) AND ($average2 < 2);
        $class2grade = "D";
        break;
    case ($average2 >= 2) AND ($average2 < 3);
        $class2grade = "C";
        break;
    case ($average2 >= 3) AND ($average2 < 4);
        $class2grade = "B";
        break;
    case ($average2 >= 4);
        $class2grade = "A";
        break;
}

echo "Class $className2 has a letter grade of $class2grade</br></br>";

?>

<?php // Part 4

echo "Part 4</br>";

if ($class1grade == "A" OR $class1grade == "B")
    {
        echo "Class $className1 Passed</br>";
    }
else
    {
        echo "Class $className1 Failed</br>";
    }

if ($class2grade == "A" OR $class2grade == "B")
    {
        echo "Class $className2 Passed</br>";
    }
else
    {
        echo "Class $className2 Failed</br>";
    }

?>