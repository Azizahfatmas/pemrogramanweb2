<?php
//buka class buah
class buah {
    //buat property
    public $name;
    protected $color;
    private $berat;

    // public function
    public function set_name($n){
        return $this->name = $n;
    }
    // contoh protected function
    public function set_color($c){
        return $this->color = $c;
    }
    // contoh private function
    public function set_berat($b){
        return $this->berat = $b;
    }
}
// buat object
$mangga = new buah();
echo $mangga ->set_name('Mangga');
echo "<br />";
echo $mangga->set_berat('300kg');
echo "<br />";
echo $mangga->set_color('hijau');
?>