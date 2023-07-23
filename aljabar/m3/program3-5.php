<?php
// Matriks
$matriks = array(
array(1, 2, 3),
array(4, 5, 6)
);
// Ukuran matriks asli
$barisAsli = count($matriks);
$kolomAsli = count($matriks[0]);
// Membuat matriks transpose dengan ukuran kolomAsli x barisAsli
$matriksTranspose = array();
for ($i = 0; $i < $kolomAsli; $i++) {
for ($j = 0; $j < $barisAsli; $j++) {
$matriksTranspose[$i][$j] = $matriks[$j][$i];
}
}
// Menampilkan matriks asli
echo "Matriks asli:<br>";
for ($i = 0; $i < $barisAsli; $i++) {
for ($j = 0; $j < $kolomAsli; $j++) {
echo $matriks[$i][$j] . " ";
}
echo "<br>";
}
echo "<br>";
// Menampilkan matriks transpose
echo "Matriks transpose:<br>";
for ($i = 0; $i < $kolomAsli; $i++) {
for ($j = 0; $j < $barisAsli; $j++) {
echo $matriksTranspose[$i][$j] . " ";
}
echo "<br>";
}
?>
