<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Code Homework 2</title>

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
        <li class="selected"><a>2: ISBN Validation / Coin Toss</a></li>
        <li><a href="inclass02-21.php">Arrays: In-Class Lab</a></li>
        <li><a href="codehw3.php">Book List / Coin Toss, Continued</a></li>
        </ul>
</nav>
</div>



<table>
    <tr>
        <td>
            <div class="content">
            <!-- CHALLENGE 1 -------------------------------------------------- -->

            <h3>Challenge 1: ISBN Validation</h3>
            <hr>
            <br>

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

                               array positions    0   1   2   3   4   5   6   7   8   9
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
                echo "$isbn is the valid ISBN code of <a href=\"https://isbnsearch.org/isbn/1465459731\" target=\"_blank\">this title</a>. ";
            }
                else
                {
                    echo "$isbn is not a valid ISBN code.<p>";
                }
            }


            $isbn = "1465459731";

            isbn_validator($isbn);

            ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="content">
            <!-- CHALLENGE 2a -->
            <h3>Challenge 2a: Coin Toss <i>for 1, 3, 5, 7, and 9 flips</i></h3>
            <hr>


            <?php


            /*
            1. for loop
                a. $i=1. i is the # of times the loop has completed, beginning at 1 (flip).
                b. $i++. each iteration that the loop completes, i gains the value of 1.
                c. $i<=$flips. i must be less than or equal to the number of flips defined in the function call, e.g. coin_toss (# here).
            2. tails is 0; heads is 1. 0/1 = F/T values
            */


            function coin_toss ($flips)
            {
                for ($i=1; $i<=$flips; $i++)
                {

                    if (mt_rand (0,1))
                    {
                        echo "<div class=\"coin\"><img src=\"img/hw2/heads.jpg\"></div>";
                    }
                    else
                    {
                        echo "<div class=\"coin\"><img src=\"img/hw2/tails.jpg\"></div>";
                    }
                }  
            }
            ?>


            <table>
                <tr>
                    <td>
                        <p>One flip!</p>
                        <?php
                        coin_toss (1);
                        ?>
                    </td>
                </tr>
                <tr height=10px>
                    <td>
                        <hr style="height:1px; background-color:#c6c6c6; border:none;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Three flips!</p>
                        <?php
                        coin_toss (3);
                        ?>
                    </td>
                </tr>
                <tr height=10px>
                    <td>
                        <hr style="height:1px; background-color:#c6c6c6; border:none;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Five flips!</p>
                        <?php
                        coin_toss (5);
                        ?>
                    </td>
                </tr>
                <tr height=10px>
                    <td>
                        <hr style="height:1px; background-color:#c6c6c6; border:none;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Seven flips!</p>
                        <?php
                        coin_toss (7);
                        ?>
                    </td>
                </tr>
                <tr height=10px>
                    <td>
                        <hr style="height:1px; background-color:#c6c6c6; border:none;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nine flips!</p>
                        <?php
                        coin_toss (9);
                        ?>
                    </td>
                </tr>
            </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="content">
            <!-- CHALLENGE 2b  -->
            <h3>Challenge 2b: Coin Toss <i>until two heads in a row are flipped</i></h3>
            <hr>
            <br>

            <table>
                <tr>
                    <td width=10%>
                        <?php

                        $headsCounter = 0;
                        $flipCounter = 0;

                        while ($headsCounter < 2) 
                            {
                            $flip = mt_rand(0,1);
                            $flipCounter++;

                        //if only runs if mt_rand outcome TRUE (1 or heads). ++ adds tp headsCounter

                            if ($flip)
                                {
                                $headsCounter++;
                                echo "<div class=\"coin\"><img src=\"img/hw2/heads.jpg\"></div>";
                                }

                        //else resets value of headsCounter to 0

                            else
                                {
                                $headsCounter = 0;
                                echo "<div class=\"coin\"><img src=\"img/hw2/tails.jpg\"></div>";
                                }

                        //loop runs again until if is true twice -- while above est. that loop terminates once headsCounter has reached 2

                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "<p>Flipped two heads in a row in $flipCounter flips!</p>";
                        ?>
                    </td>
                </tr>
            </table>
            </div>



            <!-- The crazy way I attempted Challenge 2 initially, then started over...

            <h4>A. 1, 3, 7, and 9 Flips.</i></h4>
            <p> 

            <?php

            /*

            function coin_toss ()
            {
                do 
                {
                   
                    $count=0;   
                    $face1= mt_rand (0,1);
                    $face2= mt_rand (0,1);

                    if ($face1 == 0)
                    {
                        echo "Heads";
                        //echo '<img src="img\/hw2\/heads.png\/">';
                    }
                    else
                    {
                        echo "Tails";
                        //echo '<img src="img\/hw2\/tails.png\/">';
                } while ($face1 == 0 && $face2 == 0);


                    /*while ($face1 == 0 && $face2 == 0)
                    {
                        echo "Heads";
                        //'<img src="img\/hw2\/heads.png\/">';

                        exit (Flipped two heads in a row in $count flips!)
                    }*/



            ?>
            </p>
            -->
            </div>
        </td>
    </tr>
</table>
    
</body>
</html>