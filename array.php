<?php

// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$arr1 = ["Rabu", "Juni", 30, true];

// menampilkan array var_dump() / print_r()
var_dump($arr1);
echo "<br>";

// menampilkan satu elemen array
echo $arr1[1];
echo "<br>";

// menambahkan elemen baru pada array
$hari[] = "Kamis";
$hari[] = "jumat";
var_dump($hari);
echo "<br>";

// menampilkan semua array ke user
foreach ($hari as $h) {
    echo "$h <br>";
}

$siswa = [
    'nama' => 'nisa',
    'umur' => 16,
    'email' => 'nisa@gmail.com'

];
foreach ($siswa as $b) {
    echo "$b <br>";
}
echo $siswa['umur'] + 2 . '<br>';

$angka = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $angka[2][2] . '<br>';
foreach ($angka as $a) {
    // cara pertama
    echo $a[0] . '<br>';
    echo $a[1] . '<br>';
    echo $a[2] . '<br>';
    // cara kedua
    foreach ($a as $x) {
        echo $x . '<br>';
    };
    echo '<br>';
};

$siswa = [
    ['nama' => 'Muhamad', 'umur' => 16, 'hobi' => 'futsal'],
    ['nama' => 'Muhamad', 'umur' => 16, 'hobi' => 'futsal'],
    ['nama' => 'Muhamad', 'umur' => 16, 'hobi' => 'futsal']
];

foreach ($siswa as $sis) {
    echo "Nama: " . $sis['nama'] . '<br>' . " Umur: " . $sis['umur'] . '<br>' .  " hobi: " . $sis['hobi'] . '<br>' . '<br>';
};
?>









<?php
$angka = [1, 2, 3, 4, 5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++): ?>
        <div class="kotak">
            <?= $angka[$i]; ?>
        </div>
        <?php
    endfor;
    ?>
    <div class="clear"></div>

    <?php foreach ($angka as $a): ?>
        <div class="kotak">
            <?= $a; ?>
        </div>
    <?php endforeach; ?>
</body>

</html>