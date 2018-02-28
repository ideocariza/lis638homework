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
        <li class="selected"><a>Book List / Coin Toss, Continued</a></li>
        </ul>
</nav>
</div>

<div class="content">

<h3>Challenge 1: Book Lists</h3>
<hr>
<br>


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


for ($i=0 ; $i < count($books); $i++)
    {
    $total_price=0;
    $total_price=$total_price + $books[$i][5];
    }


for ($i = 0; $i < count($books); $i++)
    {
        for($c = 0; $c < count($books[$i]); $c++)
            {
            echo $books[$i][$c];
            echo "<p>";
            }
    }

echo $total_price;

?>

</div>
    
</body>
</html>