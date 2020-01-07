<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PizzaDispenser</title>
</head>
<body>
<?php
  function addPizza(int $pizza){
    echo "<p>Pizza " . $pizza . "<p>";
    echo'<form>
    <input type="radio" name="pizza" value="Hawaii" checked> Hawaii<br>
    <input type="radio" name="pizza" value="Margharita"> Margharita<br>
    <input type="radio" name="pizza" value="Peperoni"> Peperoni<br><br>
    <input type="submit" value="Submit">
    </form><br>';
  };
  addPizza(1);
  echo "U besteld een Pizza " . $_GET["pizza"]; 
?>
</body>
</html>