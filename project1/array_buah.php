<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper"> 
<?php
$ar_buah = ["Pepaya","Mangga", "Pisang", "Jambu"];
//cetak buah index ke 1
echo $ar_buah[1];
//cetak jumlah buah
echo'<br>Jumlah Buah ' . count($ar_buah);
//cetak seluruh buah
echo '<ol>';
foreach($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo '</ol>';
// tambahkan buah
$ar_buah [] = "Durian";
// hapus buah index ke 1
unset ($ar_buah[1]);
//ubah buah index 2 menjadi manggis
$ar_buah[2] = "manggis";
//cetak seluruh buah dengan index nya
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li> buah index ke - $k adalah $v </li>";
}
echo "</ul>"
?>
</div>
<?php
include_once 'footer.php';
?>