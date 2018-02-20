<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Code Homework 1</title>

<link rel='stylesheet' type='text/css' href='style.css' /> 
    
</head>

<body>

<div class="topalign">
<nav>
<header><h1>LIS-638: Web Development</h1></header>
    <ul>
    <li><a href="index.html">About LIS-638</a></li>
    <li class="selected"><a href="codehw1.php">Homework 1</a></li>
    <li><a href="codehw2.php">Homework 2</a></li>
    </ul>
</nav>
    </div>

<div class="content">

<h1>Code Homework 1</h1>
    <h3>Challenge 1</h3>
    <h4>Correct Change <i>totalling $2.37</i></h4>

<p>
<!-- CHALLENGE 1 -------------------------------------------------- -->

<?php
    

    
        /* 
        Think of "while" as having the same meaning as "whenever"
        
        Step 1. Define the change due in cents, and create a variable for each denomination of change
        */
    
        $change = 237;
        $dollars = 0;
        $quarters = 0;
        $dimes = 0;
        $nickels = 0;
        $pennies = 0;
  
    
        /* Step 2. Subtract 100 from the change due as many times as that can be done, and count how many times that is as the number dollars due. Once denominations of 100 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 3.
        */ 
        
        while ($change >= 100) 
        {
            $change -= 100;
            $dollars += 1;
        }
    
        /* Step 3. Subtract 25 from the remaining change due as many times as that can be done, and count how many times that is as the number of  quarters due. Once denominations of 25 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 4.
        */
        
        while ($change >= 25) 
        {
            $change -= 25;
            $quarters += 1;
        }
        
        /* Step 4. Subtract 10 from the remaining change due as many times as that can be done, and count how many times that is as the number of dimes due. Once denominations of 10 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 5.
        */
    
        while ($change >= 10) 
        {
            $change -= 10;
            $dimes += 1;
        }
    
        /* Step 5. Subtract 5 from the remaining change due as many times as that can be done, and count how many times that is as the number of nickels due. Once denominations of 5 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 6.
        */
    
        while ($change >= 5) 
        {
            $change -= 5;
            $nickels += 1;
        }
    
        /* Step 6. Subtract 1 from the remaining change due as many times as that can be done, and count how many times that is as the number of pennies due. 1 can be subtracted from any remaining value of the change due until the value equals 0.
        */
    
        while ($change >= 1) 
        {
            $change -= 1;
            $pennies += 1;
        }
    
        /* Step 7. Print out, "Your change is: X dollar(s), X quarter(s), X dime(s), X nickel(s), and X cent(s)." 
        
        Added if/elseif/else statements to account for plural/singular exceptions
        */
    
        if ($dollars == 1) 
        {
            echo "Your change is: $dollars dollar, ";
        }
        elseif ($dollars == 0)
        {
            echo " ";
        }
        else 
        {
            echo "Your change is: $dollars dollars, ";
        }
        if ($quarters == 1) 
        {
            echo "$quarters quarter, ";
        }
        elseif ($quarters == 0)
        {
            echo " ";
        }
        else 
        {
            echo "$quarters quarters, ";
        }
        if ($dimes == 1) 
        {
            echo "$dimes dime, ";
        }
        elseif ($dimes == 0)
        {
            echo " ";
        }
        else 
        {
            echo "$dimes dimes, ";
        }
        if ($nickels == 1) 
        {
            echo "$nickels nickel, ";
        }
        elseif ($nickels == 0)
        {
            echo " ";
        }
        else 
        {
            echo "$nickels nickels, ";
        }
        if ($pennies == 1) 
        {
            echo "and $pennies cent.";
        }
        elseif ($pennies == 0)
        {
            echo " ";
        }
        else 
        {
            echo "and $pennies cents.";
        }
    

?>

    </p>


<h3>Challenge 2a</h3>
<h4>99 Bottles of Beer <i>starting with 99 bottles</i></h4>
<!-- CHALLENGE 2a -------------------------------------------------- -->
<p> 
<?php
        /* Initially I did this as a while loop, but couldn't figure out how to make $subbottles = $bottles -- 1 for each iteration. Original while loop:
        
        while ($bottles > 0) {
            echo "$bottles bottles of beer on the wall, $bottles bottles of beer.<br>"
            $bottles -= 1;
            echo "Take one down, pass it around, GOT STUCK HERE
            
        }
        
        imagine for loops with following analogous relationship:
        - for ($bottles = 99; $bottles > 0; -- $bottles) : 
        - during (condition 1: initial condition (declarative); condition 2: condition that must be met for the loop to continue; "operator [space] variable" that executes if condition 2 is met)
        */
        
        for ($bottles = 99; $bottles > 0; -- $bottles) 
        { 
            $subbottles = $bottles-1;
            
            if ($bottles == 2) 
            {
                echo "$bottles bottles of beer on the wall, $bottles bottles of beer!<br>";
                echo "Take one down, pass it around, $subbottles bottle of beer on the wall!<p>";
            }
            
            /* In the case of bottles being equal to 1 */
            elseif ($bottles == 1)
            {    
                echo "$bottles bottle of beer on the wall, $bottles bottle of beer!<br>";
                echo "Take one down, pass it around, $subbottles bottles of beer on the wall!<p>";
            }
            
            /*  In any other case than bottles being equal to 2 or 1 */
            else
            {
            echo "$bottles bottles of beer on the wall, $bottles bottles of beer!<br>";
            echo "Take one down, pass it around, $subbottles bottles of beer on the wall!<p>";
            }
        }

?>
</p>


<h3>Challenge 2b</h3>
<h4>99 Bottles of Beer <i>starting with 11 bottles</i></h4>


<!-- CHALLENGE 2b ----------------------------------------------- -->
    
<?php
        for ($bottles = 11; $bottles > 0; -- $bottles) 
        { 
            $subbottles = $bottles-1;
            
            if ($bottles == 2) 
            {
                echo "$bottles bottles of beer on the wall, $bottles bottles of beer!<br>";
                echo "Take one down, pass it around, $subbottles bottle of beer on the wall!<p>";
            }
            
            elseif ($bottles == 1)
            {    
                echo "$bottles bottle of beer on the wall, $bottles bottle of beer!<br>";
                echo "Take one down, pass it around, $subbottles bottles of beer on the wall!<p>";
            }
            
            else
            {
            echo "$bottles bottles of beer on the wall, $bottles bottles of beer!<br>";
            echo "Take one down, pass it around, $subbottles bottles of beer on the wall!<p>";
            }
        }    
?>

</div>

</body>
</html>