<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper"> 
<?php
require_once'libfungsi.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
$peringkat = grade($_nilai);
if ($_nilai <= 55){
    $lulus ="Anda tidak lulus";
}else{
   $lulus = "Selamat Anda Lulus";
}
if ($_nilai >= 85){
    $peringkat = "A";
}elseif($_nilai >= 70){
    $peringkat = "B";
}elseif($_nilai >= 56){
    $peringkat = "C";
}elseif($_nilai >= 36){
    $peringkat = "D";
}elseif($_nilai >= 10){
    $peringkat = "E";
}else{
    $peringkat = "I(tidak ada nilai)";
}

if(!empty($proses)){
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/> Peringkat : $peringkat";
//echo "<br/> Keterangan : $lulus";
echo "<br/> Keterangan : $hasil_ujian";
echo "<br/> Data telah di $proses";
}
?>
</div>
<?php
include_once 'footer.php';
?>