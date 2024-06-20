<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Getting the Data Type</h2>
  <?php 
  $x = 5;
  var_dump($x);
  ?>

<h2>PHP String</h2>
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
?>

<h2>PHP Integer</h2>
<?php 
$x = 5985;
var_dump($x);
?>

<h2>PHP Float</h2>
<?php 
$x = 10.365;
var_dump($x);
?>

<h2>PHP Boolean</h2>
<?php 
$x = true;
var_dump($x);
?>

<h2>PHP Array</h2>
<?php 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

<h2>PHP Object</h2>
<?php 
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

?>

<h2>PHP NULL Value</h2>
<?php $x = "Hello world!";
$x = null;
var_dump($x);
 ?>

 <h2>Change Data Type</h2>
 <?php $x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

$x = 5;
$x = (string) $x;
var_dump($x);

 ?>

 <h2>PHP Resource</h2>
</body>
</html>