<?php
// Fungsi untuk menghitung hasil transformasi linear matriks A terhadap vektor (3, 4)
function transformasiLinear($matriks, $vektor)
{
$hasilTransformasi = array();
$hasilTransformasi[0] = $matriks[0][0] * $vektor[0] + $matriks[0][1] * $vektor[1];
$hasilTransformasi[1] = $matriks[1][0] * $vektor[0] + $matriks[1][1] * $vektor[1];
return $hasilTransformasi;
}
// Matriks A
$matriksA = array(
array(2, 1),
array(1, -1)
);
// Vektor (3, 4)
$vektorV = array(3, 4);
// Memanggil fungsi untuk melakukan transformasi linear
$hasilTransformasi = transformasiLinear($matriksA, $vektorV);
// Menampilkan matriks A
echo "Matriks A:<br>";
for ($i = 0; $i < 2; $i++) {
for ($j = 0; $j < 2; $j++) {
echo $matriksA[$i][$j] . " ";
}
echo "<br>";
}
echo "<br>";
// Menampilkan vektor V
echo "Vektor (3, 4):<br>";
echo "| " . $vektorV[0] . " |<br>";
echo "| " . $vektorV[1] . " |<br>";
echo "<br>";
// Menampilkan hasil transformasi
echo "Hasil Transformasi A * (3, 4):<br>";
echo "| " . $hasilTransformasi[0] . " |<br>";
echo "| " . $hasilTransformasi[1] . " |<br>";
?>
