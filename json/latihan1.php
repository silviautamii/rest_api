<?php 

// $mahasiswa =[
//   [

// "nama" => "Silvia Utami Putri",
// "nim" => "2217020150",
// "email" => "utamisilviaputri@gmail.com"

//   ],
//    [

// "nama" => "Silvia Utami Putri",
// "nim" => "2217020150",
// "email" => "utamisilviaputri@gmail.com"
//    ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=surat_masuk','root','');
$db = $dbh->prepare('SELECT * FROM tb_arsip');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>