<?php
//Membuat class manusia
class Manusia{
    //Buat property
    var $nama;
    var $warna;

    //Buatlah method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah Azizah Fatma Sunardi';
    }
    function warna_kulit(){
        return '<br/>Kulit saya berwarna coklat';
    }
}
//Buat onject
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>