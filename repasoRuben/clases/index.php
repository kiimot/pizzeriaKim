<?php 
require_once 'producto.php';
require_once 'pizza.php';

$margarita = new Pizza(8.3,'fina','mediana',array('tomate','queso'));
$margarita->extraIngrediente('chorizo');

echo 'La pizza creada tiene los siguientes ingredientes :';
$ingredientes = $margarita->getIngredientes();
foreach ($ingredientes as $ingrediente){
    echo '<br>';
    echo $ingrediente;
}

$margarita->extraIngrediente('chorizo');

echo '<br>';
echo $margarita->getPrecio();

 ?>





