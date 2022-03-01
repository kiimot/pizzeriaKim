<?php

abstract class Producto{
    protected $precio;
    protected $ingredientes;

    public function __construct($precio,$ingredientes){
        $this->precio = $precio;
        $this->ingredientes = $ingredientes;
    }

    

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of ingredientes
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set the value of ingredientes
     */
    public function setIngredientes($ingredientes): self
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    public abstract function extraIngrediente($ingrediente);
}

?>