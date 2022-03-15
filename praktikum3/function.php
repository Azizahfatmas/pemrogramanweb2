<?php
//contoh function tidak menggunakan parameter
function nama (){
    $nama = "Azizah Fatma Sunardi";
    echo "Nama Saya Adalah $nama";
};
//contoh function menggunakan parameter
function umur_kelas($age){
    $umur = $age - 2023;
    $kelas = "SI10";
    echo "<br/> Umur Saya Sekarang adalah $umur <br/> Saya Kelas $kelas";
};
nama();
umur_kelas(2004);
?>