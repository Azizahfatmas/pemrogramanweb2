<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function set_volume($vol){
        return $this->volume = $vol;
    }

    public function set_hargaSegelas($harlas){
        return $this->hargaSegelas = $harlas;
    }

    public function set_volumeGelas($volgel){
        return $this->volumeGelas = $volgel;
    }

    public function set_namaMinuman($nami){
        return $this->namaMinuman = $nami;
    }
    function volumeSekarang(){
        return $this->volume - $this->volumeGelas;
    }
} 
$minuman = new Dispenser();
echo $minuman->set_namaMinuman('Nama Minuman Aqua');
echo "<hr/>";
echo "<br />";
echo $minuman->set_volume('Volume galonnya adalah 1000 ML');
echo "<br />";
echo $minuman->set_hargaSegelas('Harga Segelasnya Adalah 3000 Rupiah');
echo "<br />";
echo $minuman->set_volumeGelas('Andi beli 1 gelas yang volumenya 250 ML');
echo "<br />";
echo $minuman->volumeSekarang('Hasil Volume Sekarang adalah 750 ML');
?>
