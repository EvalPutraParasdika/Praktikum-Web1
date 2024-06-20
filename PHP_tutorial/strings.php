<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Strings</h2>
  <?php echo "Hello";
echo 'Hello';

$x = "John";
echo "Hello $x";
$x = "John";
echo 'Hello $x';
?>

<h2>String Length</h2>
<?php 
echo strlen("Hello world!"); 
?>

<h2>Word Count</h2>
<?php echo str_word_count("Hello world!");
 ?>

<h2>Search For Text Within a String</h2>
<?php echo strpos("Hello world!", "world");  ?>

<h1>PHP - Modify Strings
</h1>
<h2>Upper Case</h2>
<?php $x = "Hello World!";
echo strtoupper($x); ?>

<h2>Lower Case</h2>
<?php $x = "Hello World!";
echo strtolower($x);
 ?>

 <h2>Replace String</h2>
 <?php $x = "Hello World!";
echo str_replace("World", "Dolly", $x);
 ?>

 <h2>Reverse a String</h2>
 <?php $x = "Hello World!";
echo strrev($x); ?>

<h2>Remove Whitespace</h2>
<?php $x = " Hello World! ";
echo trim($x); ?>

<h2>Convert String into Array</h2>
<?php $x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/ ?>



</body>
</html>