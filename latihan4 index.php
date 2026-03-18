<?php
include "Mahasiswa.php";
include "MahasiswaTransfer.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();
$makul_2 = new MataKuliah();

$daftar_nilai = [
    "1" => ["sks" => 2, "nilai" => "A"],
    "2" => ["sks" => 3, "nilai" => "B"],
    "3" => ["sks" => 2, "nilai" => "C"],
];

$mahasiswa_1 = new MahasiswaTransfer($daftar_nilai);

$makul_1->setData("A11.12306", "Pemrograman Berbasis Web");
$makul_2->setData("A11.12358", "Pemrograman Web Lanjut");

$mahasiswa_1->setData("A11.2024.16073", "Lita Ayu Rahmawati", [$makul_1, $makul_2], "2005-08-14");

echo "<pre>";
print_r($mahasiswa_1->getData());
echo "</pre>";
?>
