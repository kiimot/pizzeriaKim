<?php

class Pizza extends Producto{
    //Atributos

    private $masa;
    private $medida;


    public function __construct($precio,$masa,$medida,$ingredientes){
        parent::__construct($precio,$ingredientes);
        $this->masa = $masa;
        $this->medida = $medida;

    }

    /**
     * Get the value of masa
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Set the value of masa
     */
    public function setMasa($masa): self
    {
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get the value of medida
     */
    public function getMedida()
    {
        return $this->medida;
    }

    /**
     * Set the value of medida
     */
    public function setMedida($medida): self
    {
        $this->medida = $medida;

        return $this;
    }

    public function extraIngrediente($ingrediente){
      $this->ingredientes[] = $ingrediente;
      $this->precio = $this->precio + 1;
    }
}


?>