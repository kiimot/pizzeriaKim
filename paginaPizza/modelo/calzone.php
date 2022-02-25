<?php
include 'producto.php';

class Calzone extends Producto{
    protected $forma;
    protected $especial;

    public function __construct($nombre,$precio,$ingredientes,$forma,$especial,$img){
        Parent::__construct($nombre,$precio,$ingredientes,$img);
        $this->forma= $forma;
        $this->especial = $especial;

    }

    



    /**
     * Get the value of forma
     */
    public function getForma()
    {
        return $this->forma;
    }

    /**
     * Set the value of forma
     */
    public function setForma($forma): self
    {
        $this->forma = $forma;

        return $this;
    }

    /**
     * Get the value of especial
     */
    public function getEspecial()
    {
        return $this->especial;
    }

    /**
     * Set the value of especial
     */
    public function setEspecial($especial): self
    {
        $this->especial = $especial;

        return $this;
    }

    public function calculaPrecio(){
        if ($this->especial){
            $this->precio += 3;
        }
    }

}


?>