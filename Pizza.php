<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PizzaDispenser</title>
</head>
<body>
<div id="formcontainer"></div>
<form>
    <input id="Bestellingbutton" type="button" onclick="Bestelling()" value="Rond bestelling af">
    <input id="Meerpizza" type="button" onclick= "AddPizza()" value="Meer Pizza">
    <input type="button" onclick= "CancelOrder()" value="Cancel bestelling">
</form>
<div id="Receiptcontainer"></div>
<p id="prijstotaal"></p>
<div id="betaalknop"></div>
<script>
  pizzaCount = 0;
  prijsTotaal = 0;
  function AddPizza(){
    var block_to_insert ;
    var container_block ;
    pizzaCount++;
    block_to_insert = document.createElement( 'div' );
    block_to_insert.innerHTML = ' <h1>Pizza '+pizzaCount+'</h1><form id="form1" action="Pizza.php"> <p>Type Pizza</p><select id="pizza'+pizzaCount+'" name="pizza1"><option value="Margharita">Margharita</option><option value="Hawaii">Hawaii</option><option value="Peperoni">Peperoni</option></select><br><p>Grootte Pizza</p><input type="radio" id="sizeGroot" name="size'+pizzaCount+'" value="Groot" checked> Groot<input type="radio" id="sizeKlein" name="size'+pizzaCount+'" value="Klein"> Klein<br><br></form>'
    container_block = document.getElementById( 'formcontainer' );
    container_block.appendChild( block_to_insert );
    block_to_insert.id = 'inserted_block_id' ;
  }
  function CancelOrder(){
    document.getElementById("formcontainer").innerHTML = "";
    document.getElementById("Receiptcontainer").innerHTML = "";
    document.getElementById("prijstotaal").innerHTML = "";
    document.getElementById("Bestellingbutton").removeAttribute("disabled", "");
    document.getElementById("Meerpizza").removeAttribute("disabled", "");
    document.getElementById('betaalknop').innerHTML = "";
    pizzaCount = 0;
    prijsTotaal = 0;
  }
  function Bestelling(){
    for(i = 1; i <= pizzaCount; i++){
      var pizza = document.getElementById('pizza'+i).value;
      var sizes = document.getElementsByName("size"+i);
      if(sizes[0].checked == true)
      {
        var block_to_insert ;
        var container_block ;
        pizzaCount++;
        block_to_insert = document.createElement( 'div' );
        block_to_insert.innerHTML = "Grote " + pizza + " Pizza : 10 euro"
        container_block = document.getElementById( 'Receiptcontainer' );
        container_block.appendChild( block_to_insert );
        block_to_insert.id = 'OrderedPizza'+i ;
        prijsTotaal += 10;
      }  
      else 
      {
        var block_to_insert ;
        var container_block ;
        pizzaCount++;
        block_to_insert = document.createElement( 'div' );
        block_to_insert.innerHTML = "Kleine " + pizza + " Pizza : 5 euro"
        container_block = document.getElementById( 'Receiptcontainer' );
        container_block.appendChild( block_to_insert );
        block_to_insert.id = 'OrderedPizza'+i ;
        prijsTotaal += 5;
      }
      document.getElementById('prijstotaal').innerHTML = "U moet in totaal " + prijsTotaal + " euro betalen";
      document.getElementById("Bestellingbutton").setAttribute("disabled", "true");
      document.getElementById("Meerpizza").setAttribute("disabled", "true");
      document.getElementById('betaalknop').innerHTML = "<form><input type='button' onclick='Betalen()' value='Betalen'></form>";
    }
    
  }
  function Betalen(){
    document.getElementById('betaalknop').innerHTML = "<p>Bedankt voor het betalen van "+prijsTotaal+" euro</p><p>Uw bestelling wordt nu bereid!</p><form><input type='button' onclick='CancelOrder()' value='Nieuwe Bestelling'></form>";
  }
</script>
</body>
</html>