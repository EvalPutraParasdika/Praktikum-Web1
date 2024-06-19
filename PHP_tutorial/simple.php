<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

<h2>PHP Case Sensitivity</h2>
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>
<?php  
//This is a single-line comment

#This is also a single-line comment

/*This is a
multi-line comment*/
?>

<h3>Creating (Declaring) PHP Variables</h3>
<?php 
$x = 5;
$y = "John";

$txt = "W3Schools.com";
echo "I love $txt!<br>";

$txt = "W3Schools.com";
echo "I love " . $txt . "!<br>";

$x = 5;
$y = 4;
echo  $x + $y. "<br>";

$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;
echo"<br>";

//Get the Type
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

//Assign Multiple Values
$x = $y = $z = "Fruit";
?>

<h3>PHP Variables Scope</h3>
<h3>Global and Local Scope</h3>
<?php 
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is:</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


?>

</body>
</html>