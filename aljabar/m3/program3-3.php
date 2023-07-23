<!DOCTYPE html>
<html>
<head>
<title>Perkalian Matriks</title>
</head>
<body>
<h2>Perkalian Matriks</h2>
<?php
// Fungsi untuk melakukan perkalian dua matriks 2x2
function perkalianMatriks($matriks1, $matriks2)
{
$hasilPerkalian = array();
$hasilPerkalian[0][0] = $matriks1[0][0] * $matriks2[0][0] + $matriks1[0][1] * $matriks2[1]
[0];
$hasilPerkalian[0][1] = $matriks1[0][0] * $matriks2[0][1] + $matriks1[0][1] * $matriks2[1]
[1];
$hasilPerkalian[1][0] = $matriks1[1][0] * $matriks2[0][0] + $matriks1[1][1] * $matriks2[1]
[0];
$hasilPerkalian[1][1] = $matriks1[1][0] * $matriks2[0][1] + $matriks1[1][1] * $matriks2[1]
[1];
return $hasilPerkalian;
}
// Cek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Ambil data dari form
$matriks1 = array(
array($_POST['m11'], $_POST['m12']),
array($_POST['m21'], $_POST['m22'])
);
$matriks2 = array(
array($_POST['m31'], $_POST['m32']),
array($_POST['m41'], $_POST['m42'])
);
// Memanggil fungsi untuk melakukan perkalian matriks
$hasilPerkalian = perkalianMatriks($matriks1, $matriks2);
}
?>
<!-- Form input untuk matriks -->
<form method="POST" action="">
<label>Matriks Pertama:</label><br>
<input type="number" name="m11" required>
<input type="number" name="m12" required><br>
<input type="number" name="m21" required>
<input type="number" name="m22" required><br><br>
<label>Matriks Kedua:</label><br>
<input type="number" name="m31" required>
<input type="number" name="m32" required><br>
<input type="number" name="m41" required>
<input type="number" name="m42" required><br><br>
<button type="submit">Hitung</button>
</form>
<?php
// Jika hasil perkalian matriks telah dihitung
if (isset($hasilPerkalian)) {
// Menampilkan matriks pertama
echo "Matriks Pertama:<br>";
for ($i = 0; $i < 2; $i++) {
for ($j = 0; $j < 2; $j++) {
echo $matriks1[$i][$j] . " ";
}
echo "<br>";
}
echo "<br>";
// Menampilkan matriks kedua
echo "Matriks Kedua:<br>";
for ($i = 0; $i < 2; $i++) {
for ($j = 0; $j < 2; $j++) {
echo $matriks2[$i][$j] . " ";
}
echo "<br>";
}
echo "<br>";
// Menampilkan hasil perkalian matriks
echo "Hasil Perkalian Matriks:<br>";
for ($i = 0; $i < 2; $i++) {
for ($j = 0; $j < 2; $j++) {
echo $hasilPerkalian[$i][$j] . " ";
}
echo "<br>";
}
}
?>
</body>
</html>
