<?php
class Persegipanjang {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar)
    {
     $this->panjang = $panjang;
     $this->lebar = $lebar;

    }   
    function Luas() {
        return $this->luas = $this->panjang * $this->lebar;
    }
    function Keliling() {
        return $this->keliling = 2 * ($this->panjang + $this->lebar);
    }
}
?>