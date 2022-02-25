<?php
include 'producto.php';

class Pizza extends Producto{
    protected $masa;
    protected $especial;

    public function __construct($nombre,$precio,$ingredientes,$masa,$especial,$img){
        Parent::__construct($nombre,$precio,$ingredientes,$img);
        $this->masa= $masa;
        $this->especial = $especial;

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

    public function calculaPrecio(){
        if ($this->especial){
            $this->precio += 2;
        }
    }
}
?>