<?php

#Creamos Pizzas
include './modelo/pizza.php';
$margarita = new Pizza('Margarita',8.5,array('queso','tomate'),'fina',False,'');
$proscuito = new Pizza('Proscuito',9.5,array('queso','tomate','jamon dulce'),'fina',False,'');
$cuatroQuesos = new Pizza('cuatroQuesos',9.5,array('elemental','gorgonzola','roquefort','parmesano'),'fina',True,'');
$barbacoa = new Pizza('Barbacoa',10,array('tomate','carne picada'),'gorda',True,'');

?>