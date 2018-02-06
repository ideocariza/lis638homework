<html>
<body>

<h1>Homework 1</h1>
    <h3>Challenge 1</h3>
    <h4>Correct Change <i>totalling $2.87</i></h4>

<p>
<!-- CHALLENGE 1 ----------------------------------------------------------------- -->

<?php
    
        /* Step 1. Define the change due in cents, and create a variable for each denomination of change
        */
    
        $change = 287;
        $dollars = 0;
        $quarters = 0;
        $dimes = 0;
        $nickels = 0;
        $pennies = 0;
  
    
        /* Step 2. Subtract 100 from the change due as many times as that can be done, and count how many times that is as the number dollars due. Once denominations of 100 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 3.
        */ 
        
        while ($change >= 100) {
            $change -= 100;
            $dollars += 1;
        }
    
        /* Step 3. Subtract 25 from the remaining change due as many times as that can be done, and count how many times that is as the number of  quarters due. Once denominations of 25 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 4.
        */
        
        while ($change >= 25) {
            $change -= 25;
            $quarters += 1;
        }
        
        /* Step 4. Subtract 10 from the remaining change due as many times as that can be done, and count how many times that is as the number of dimes due. Once denominations of 10 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 5.
        */
    
        while ($change >= 10) {
            $change -= 10;
            $dimes += 1;
        }
    
        /* Step 5. Subtract 5 from the remaining change due as many times as that can be done, and count how many times that is as the number of nickels due. Once denominations of 5 can no longer be subtracted from the change due, the remaining value of the change due is pushed to step 6.
        */
    
        while ($change >= 5) {
            $change -= 5;
            $nickels += 1;
        }
    
        /* Step 6. Subtract 1 from the remaining change due as many times as that can be done, and count how many times that is as the number of pennies due. 1 can be subtracted from any remaining value of the change due until the value equals 0.
        */
    
        while ($change >- 1) {
            $change -= 1;
            $pennies += 1;
        }
    
        /* Step 7. Print out, "Your change is: X dollar(s), X quarter(s), X dime(s), X nickel(s), and X cent(s)."
        */
        echo "Your change is: $dollars dollars, $quarters quarters, $dimes dimes, $nickels nickels, and $pennies cents."
?>
    </p>


<h3>Challenge 2a</h3>
<h4>99 Bottles of Beer</h4>
<!-- CHALLENGE 2a ----------------------------------------------------------------- -->
    
<?php
        /* Step 1. Establish variables.
        */
        
        for ($bottles = 99; $bottles > 0; -- $bottles)
        {
            $subbottles = $bottles-1;
            echo "$bottles bottles of beer on the wall, $bottles bottles of beer.<br>";
            echo "Take one down, pass it around, $subbottles bottles of beer on the wall.<p>";
        }
    
    
?>

    
    
</body>
</html>