<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Code Homework 1</title>

<?php
    echo "<link rel='stylesheet' type='text/css' href='style-hw1.css' />";
?>
 
    
</head>

<body>

<h1>Code Homework 2</h1>



<!-- CHALLENGE 1 -------------------------------------------------- -->

    <h3>Challenge 1</h3>
    <h4>ISBN Validation</h4>

<p>

<?php

/*

1. explode -- w/spaces
2. but terrible! didn't want to put spaces between each number, and doesn't separate numbers into arrays
3. looked up explode -- http://php.net/manual/en/funcref.php
    - strings > explode > see also str_split()
4. tried str_split()
*/

// Define ISBN variable





function isbn_validator ($isbn)
{


// Create an array that equals the result of str_splitting the ISBN variable
$arr1 = str_split($isbn);

//totalSum is defined as 0 before the for loop begins
$totalSum = 0;

/*this for loop:
1. $i=0
    i represents the position from the array that the loop will apply to. so this starts with position 0, but will continue only up to position 9, because...
2. $i<10
    ...i must be less than 10. because ISBNs have 10 digits starting at 0, the positions from the array end at 9) - this limits the loop to 10 iterations.
3. $i++
    each time that the loop executes, i will gain 1. this ensures that the next iteration of the loop will begin with $i=1. i will gain the value of 1 successively until the loop terminates.
4. $sum
    $sum represents the result of the current iteration of the first half of the for loop, e.g.
        if you were hardcoding this outside of a for loop for only one position, say position 5:
            position 5 of isbn 0747532699 is 3

            $sum = $arr1[3]*(6);

        6 is how much position 5 would be multiplied by according to ISBN validation rules.

    (10-$i)
        Because the ISBN validation rules first multiply the first digit by 10, then the next by 9, then the next by 8, etc... so:

                   array positions    0   2   3   4   5   6   6   7   8   9
                         with isbn    0   7   4   7   5   3   2   6   9   9
        what they're multiplied by    10  9   8   7   6   5   4   3   2   1

        So this subtracts 1 from the amount that the isbn positions are being multiplied by each iteration of the loop.
5. $totalSum
    $totalSum represents the sum of all of the sums, or
        (10*0)+(9*7)+(8*4)...etc. = $totalSum
        each value in the parenthesis above is a single $sum
    $sum+totalSum
        this executes with each iteration of the for loop, changing what the value of totalSum will begin as in the next iteration of the loop

*/

for ($i=0; $i<10; $i++)
{
    $sum = $arr1[$i]*(10-$i);

    $totalSum = $sum+$totalSum;
}


/*
1. $totalSum / 11
2. if $totalSum has no remainder, TRUE
3. if $totalSum has remainder, FALSE
*/

if ($totalSum % 11 == 0)
{
    echo "Number $isbn is a valid ISBN code.<p>";
}
    else
    {
        echo "Number $isbn is invalid.<p>";
    }



}


$isbn = "0747532699";

isbn_validator($isbn);


$isbn = "2345398237";

isbn_validator($isbn);

echo "$isbn";

?>


</p>


<!-- CHALLENGE 2 -------------------------------------------------- -->

<h3>Challenge 2</h3>
<h4>Coin Toss</i></h4>
<p>


<?php

/*
0 = heads
1 = tails
*/


function coin_toss ($flips)
{
    for ($i=1; $i<=$flips; $i++)
    {
       // $face= mt_rand (0,1);

        if (mt_rand (0,1) == 0)
        {
            echo "Heads";
            //echo '<img src="img\/hw2\/heads.png\/">';
        }
        else
        {
            echo "Tails";
            //echo '<img src="img\/hw2\/tails.png\/">';
        }
    }  
}


coin_toss (3);


?>

<!--CHALLENGE 2A --------------------------------------------------

<h4>A. 1, 3, 7, and 9 Flips.</i></h4>
<p> 

<?php
        

?>
</p>


CHALLENGE 2b ----------------------------------------------

<h4>B. Toss Until Two Heads In a Row</i></h4>
<p>

-->

<?php



?>
    
</body>
</html>