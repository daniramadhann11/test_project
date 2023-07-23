<?php
// Matriks
$matriks = array(
array(1, 2),
array(3, 4)
);
// Skalar
$k = 3;
// Perkalian skalar
for ($i = 0; $i < 2; $i++) {
for ($j = 0; $j < 2; $j++) {
$matriks[$i][$j] = $k * $matriks[$i][$j];
}
}
// Menampilkan matriks hasil perkalian skalar
echo "Matriks hasil perkalian skalar:<br>";
for ($i = 0; $i < 2; $i++) {
for ($j = 0; $j < 2; $j++) {
echo $matriks[$i][$j] . " ";
}
echo "<br>";
}
?>
