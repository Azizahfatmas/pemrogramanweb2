<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    function set_volume($vol){
        return $this->volume = $vol;
    }

    function set_hargaSegelas($harlas){
        return $this->hargaSegelas = $harlas;
    }

    function get_volumeGelas(){
        return self::volumeGelas;
    }

    function set_namaMinuman($nami){
        return $this->namaMinuman = $nami;
    }

    function get_volumeSekarang(){
        return $this->volume - self::volumeGelas;
    }
} 
$minuman = new Dispenser();
echo 'Nama Minuman ' .$minuman ->set_namaMinuman('Aqua');
echo "<hr/>";
echo "<br />";
echo 'Volume Galonnya Adalah ' .$minuman->set_volume(1000) .' ML';
echo "<br />";
echo 'Harga Segelasnya Adalah ' .$minuman->set_hargaSegelas('3000 Rupiah');
echo "<br />";
echo 'Andi beli 1 gelas yang volumenya ' .$minuman-> Get_volumeGelas() .' Ml';
echo '<br/>Hasil Volume Sekarang Adalah ' .$minuman -> get_volumeSekarang() .' Ml';
?>
