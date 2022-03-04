<?php

#Creamos Pizzas
include './modelo/pizza.php';
$margarita = new Pizza('Margarita',8.5,array('queso','tomate'),'fina',False,'');
$proscuito = new Pizza('Proscuito',9.5,array('queso','tomate','jamon dulce'),'fina',False,'');
$cuatroQuesos = new Pizza('4quesos',9.5,array('elemental','gorgonzola','roquefort','parmesano'),'fina',True,'');
$barbacoa = new Pizza('Barbacoa',10,array('tomate','carne picada'),'gorda',True,'');

$listaPizzas = array('Margarita' => $margarita, 'Proscuito' => $proscuito, '4quesos' => $cuatroQuesos,'Barbacoa' =>$barbacoa);

?>