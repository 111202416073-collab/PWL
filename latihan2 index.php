<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();
$makul_2 = new MataKuliah();

$makul_1->setData("A11.12306", "Pemrograman Berbasis Web");
$makul_2->setData("A11.12358", "Pemrograman Web Lanjut");

$mahasiswa_1->setData("A11.2024.16073", "Lita Ayu Rahmawati", [$makul_1, $makul_2]);

echo "<pre>";
print_r($mahasiswa_1);
print_r($mahasiswa_1->nama);
print_r($mahasiswa_1->nim);
echo "</pre>";
?>
