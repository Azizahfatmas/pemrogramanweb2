<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper"> 
<?php
require_once 'class_persegipanjang.php';
$persegiPanjang1 = new PersegiPanjang(10, 6);
$persegiPanjang2 = new PersegiPanjang(11, 4);
echo "<br/>";

echo "<br/>Luas Persegi Panjang I adalah = " .$persegiPanjang1->getLuas();
echo "<br/>Luas Persegi Panjang II adalah = " .$persegiPanjang2->getLuas();
echo "<br/>";

echo "<br/>Keliling Persegi Panjang I adalah = " .$persegiPanjang1->getKeliling();
echo "<br/>Keliling Persegi Panjang II adalah = " .$persegiPanjang2->getKeliling();
?>
</div>
<?php
include_once 'footer.php';
?>
