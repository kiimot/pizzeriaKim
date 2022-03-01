<?php

class Kebab extends Producto{
    //Atributos

    private $tipo;
    private $salsas;


    public function __construct($precio,$ingredientes,$tipo,$salsas){
        parent::__construct($precio,$ingredientes);
        $this->tipo = $tipo;
        $this->salsas = $salsas;
    }


    public function extraIngrediente($ingrediente){
      $this->ingredientes[] = $ingrediente;
      $this->precio = $this->precio + 1;
    }

    
}


?>