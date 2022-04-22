<?php
class PersegiPanjang{
    private $panjang;
    private $lebar;

    function __construct($pjg, $lbr){
        $this->panjang = $pjg;
        $this->lebar = $lbr;
    }

    function getluas(){
        return $this->panjang * $this->lebar;
    }
    
    function getkeliling(){
        return 2 * $this->panjang + $this->lebar;
    }
} 
?>

