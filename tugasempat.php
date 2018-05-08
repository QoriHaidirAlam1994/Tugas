<html>
<head>
<title>Hasil kembalian </title>
</head>
<body>
Hasil Kembalian <br>
<?php

$harga = 21500;
$uang  = 50000;

$hasil = $uang - $harga;
echo $hasil;
echo '<br />';

$hitung  = 0;
$counter = 0;
for ($i = 0; $hasil >= $hitung; $i++) {
    if ($hasil <= $hitung) {
        goto berakhir;
    }
    $hitung  = $hitung + 500;
    $counter = $counter + 1;
    
}

berakhir:

echo '<br /><br />Total:<br /><br />' . $counter . ' koin 500 atau:<br /><br />';

if ($counter >= 100) {
    echo "Selembar 50.000<br />";
    $counter = $counter - 100;
}

if ($counter >= 40) {
    echo "Selembar 20.000<br />";
    $counter = $counter - 40;
}

if ($counter >= 20) {
    echo "Selembar 10.000<br />";
    $counter = $counter - 20;
}

if ($counter >= 10) {
    echo "Selembar 5.000<br />";
    $counter = $counter - 10;
}

if ($counter >= 4) {
    echo "Selembar 2.000<br />";
    $counter = $counter - 4;
}

if ($counter >= 2) {
    echo "Selembar 1.000<br />";
    $counter = $counter - 2;
}

if ($counter >= 1) {
    echo "koin 500<br />";
    $counter = $counter - 1;
}
?>
</body>
</html>
