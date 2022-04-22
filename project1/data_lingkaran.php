<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper"> 
<?php
//memanggil file atau class_lingkaran.php
require_once 'class_lingkaran.php';
echo "NILAI PHI adalah = " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br/>";

//Menghitung luas lingkaran menggunakan getluas
echo "<br/>Luas Lingkaran I adalah = " .$lingkar1->getLuas();
echo "<br/>Luas Lingkaran II adalah = " .$lingkar2->getLuas();
echo "<br/>";

//Menghitung keliling lingkaran menggunakan fungsi getkeliling
echo "<br/>Keliling Lingkaran I adalah = " .$lingkar1->getKeliling();
echo "<br/>Keliling Lingkaran II adalah = " .$lingkar2->getKeliling();
?>
</div>
<?php
include_once 'footer.php';
?>