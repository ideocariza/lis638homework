<!doctype html>
<html>
<head>
<meta charset="utf-8" />

<title>Code Homework 3</title>

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
        <li><a href="inclass02-21.php">Arrays: In-Class Lab</a></li>
        <li class="selected"><a>3: Book Lists / Coin Toss, Continued</a></li>
        </ul>
</nav>
</div>

<div class="content">

<h3>Challenge 1: Book Lists</h3>
<hr>
<br>

<p>
<?php


$books = array 
    (
    array('PHP and MySQL Web Development', 'Luke', 'Welling', 144, 'Paperback', 31.63),
    array('Web Design with HTML, CSS, JavaScript and jQuery', 'Jon', 'Duckett', 135, 'Paperback', 41.23),
    array('PHP Cookbook: Solutions & Examples for PHP Programmers', 'David', 'Sklar', 14, 'Paperback', 40.88),
    array('JavaScript and jQuery: Interactive Front-End Web Development', 'Jon', 'Duckett', 251, 'Paperback', 22.09),
    array('Modern PHP: New Features and Good Practices', 'Josh', 'Lockhart', 7, 'Paperback', 28.49),
    array('Programming PHP', 'Kevin', 'Tatroe', 26, 'Paperback', 28.96),
    );

$total_price=0;
for ($i=0 ; $i < count($books); $i++)
    {
    $total_price=$total_price + $books[$i][5];
    }



for ($i = 0; $i < count($books); $i++)
    {
        for($e = 0; $e < count($books[$i]); $e++)
            {
            echo $books[$i][$e];
            echo "<p>";
            }
      
    }
  echo $total_price;

?>
</p>


<h3>Challenge 2: Coin Toss, Continued <i>until variable heads in a row are flipped</i></h3>
<hr>
<br>

<table>
        <tr>
                    <td width=10%>
                        <?php



function coin_toss($heads)
{

                        $headsCounter = 0;
                        $flipCounter = 0;

                        while ($headsCounter < $heads) 
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

                        }
                            echo "<p>Flipped $heads heads in a row in $flipCounter flips!</p>";
                        

                        //loop runs again until if is true twice -- while above est. that loop terminates once headsCounter has reached 2

}

coin_toss(8)
?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        ?>
                    </td>
                </tr>
            </table>
            </div>




</div>
    
</body>
</html>