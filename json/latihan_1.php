<?php

// // Mengubah Array menjadi JSON
// $mahasiswa = [
//   [
//     "nama" => "Anggit Septiansyah",
//     "nim" => "11753102086",
//     "email" => "anggitseptiansyah@gmail.com"
//   ],
//   [
//     "nama" => "Budi Doang",
//     "nim" => "11753102086",
//     "email" => "budi@gmail.com"
//   ]
  
// ];

// $data = json_encode($mahasiswa);
// echo $data;


$dbh = new PDO('mysql:host=localhost;dbname=ci_app', 'root', '');
$db = $dbh->prepare('SELECT * FROM tb_mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;