<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper"> 
<?php
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna)
    {
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br/>Nama Aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "Aku adalah sebuah strawberry atau pisang?";
    }
}
$buah = new Strawberry("Strawberry" , "Merah");
$buah->message();
$buah->intro();
?>
</div>
<?php
include_once 'footer.php';
?>