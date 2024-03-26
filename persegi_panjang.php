<?php
class PersegiPanjang {
    //property
    public $panjang;
    public $lebar;
    


    //method
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;

    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }

    
    function getKeliling(){
        return 2 * ($this->panjang + $this->lebar);

}

}

// instance object
$persegi_panjang = new PersegiPanjang(10, 5);
echo "<br>Luas PersegiPanjang = " . $persegi_panjang->getLuas();
echo "<br>Keliling PersegiPanjang = " . $persegi_panjang->getKeliling();