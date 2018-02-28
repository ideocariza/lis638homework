<!doctype html>
<html>
<head>
<meta charset="utf-8" />

<title>In-Class Lab - 02-21</title>

<link rel='stylesheet' type='text/css' href='style.css' />
    
</head>

<body>

<div class="topalign">
<nav>
<header>
<h2>LIS-638/SP18: Web Development</h2>
<h3>Dr. Monica Maceli, Pratt Institute<br>
Isabella Deocariza</h3><br>
<h1>Code Homework</h1>
</header>
        <ul>
        <li><a href="codehw1.php">1: Correct Change / 99 Bottles</a></li>
        <li><a href="codehw2.php">2: ISBN Validation / Coin Toss</a></li>
        <li class="selected"><a>Arrays: In-Class Lab</a></li>
        <li><a href="codehw3.php">3: Book Lists / Coin Toss, Continued</a></li>
        </ul>
</nav>
</div>

<div class="content">

<h1>Arrays: In-Class Lab</h1>


<?php

$weather = array("sunny",8000);

//to change array element:

$weather[0] = "cloudy";


echo "$weather[0] <p>";



//ASSOCIATIVE ARRAY

$another_weather = array(
"sky_state" => "cloudy",
"temp_f" => 8000
);

//change associative array element

$another_weather["sky_state"] = "70 degrees";

echo $another_weather["sky_state"];

echo "<p>array_push pushes things onto the end of an array</p>";
?>

<h2>Name compiler with numeric array</h2><hr>
<?php
    $fullName = array("Isabella","Byars","Deocariza");

    //echo middle name from array
    echo $fullName[1];

    // remove middle name from array
    unset ($fullName[1]);

    //put middle name back in array
    $fullName = "Byars";
?>

<p>&nbsp</p>

<h2>Name compiler with associative array</h2><hr>
<?php
    $fullAssName = array(
    'first' => "Isabella",
    'middle' => "Byars",
    'last' => "Deocariza"
    );

    //echo middle name from array
    echo $fullAssName["middle"];

    // remove middle name from array
    unset ($fullAssName["middle"]);

    //put middle name back in array
    $fullAssName = "middle";
?>

<p>&nbsp</p>

<h2>Foreach: Student ids associative</h2><hr>
<?php
    $classGrades = array(
    '233255435' => "95.9%",
    '234832893' => "82.33%",
    '238385555' => "85.2%",
    '272727237' => "72.0%",
    '334844855' => "86.5%",
    );

    //Foreach. as = tells where to place the values

    Foreach($classGrades as $studentid => $grade) 
        {
            echo "student $studentid got a $grade<p>";
        }
?>

<p>&nbsp</p>

<h2>Multidimensional Arrays - internal array box are numeric</h2><hr>
<?php
    $multiDimArray = array(
    array("cloudy",11),
    array("rainy",44),
    array("sunny",10),
    );

/*
MULTIDIM ARRAY NUMERIC PULLS -  COORDINATES (Index Position: first, initial array, then position within that array) / MATRIX, X/Y
*/
    echo $multiDimArray[0][0];

?>

</div>
    
</body>
</html>