<?php
$ar_buah = ["p" => "pepaya","a"=> "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
// array sort mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
// arsort mengurutkan array dalam urutan menurun sesuai dengan nilainya
arsort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
echo "<hr>";
?>
<!-- ====================== -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_pop($tims);
foreach ($tims as $person){
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims, "farhan");
foreach ($tims as $person){
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_shift($tims);
foreach ($tims as $person){
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims, "muhammad","ismail");
foreach ($tims as $person){
    echo "$person <br/>";
}
echo "<br>";
?>