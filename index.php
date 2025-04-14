<?php

echo '<h1>Challenge 1: Multiplication Table</h1>';

for($i = 1; $i<=10;$i++){
    for($j = 1; $j<=10;$j++){
        echo $i . ' x ' . $j ." = " .$i*$j . "</br>";
    }
    echo "</br>";
}

echo '<h1>Challenge 2: Get The Sum Of An Array</h1>';

$numbers = [2, 3, 4, 5, 6, 7];

$total_sum = 0;

foreach($numbers as $number){
    $total_sum += $number;
}

echo "The total sum is: " . $total_sum . "</br>";
echo "</br>";



echo '<h1>Challenge 3: Student Average Grade</h1>';

$students = 
[
    [
        'name' => "Marcos",
        'grade' => [4, 5]
    ],
    [
        'name' => "Gabriela",
        'grade' => [9, 10]
    ],
    [
        'name' => "Pietra",
        'grade' => [8, 7]
    ],
    [
        'name' => "Henriquetta",
        'grade' => [10, 10]
    ],
    [
        'name' => "Iris",
        'grade' => [4, 1]
    ],
    [
        'name' => "Paulo",
        'grade' => [10, 9]
    ],
    
];


foreach($students as $student){
    $average_grade = ($student['grade'][0] + $student['grade'][1]) / 2;

    echo "Name of the student: " . $student['name'] . "</br>";
    echo "Average grade: " . $average_grade . '</br>';

    echo "</br>";
}

?>