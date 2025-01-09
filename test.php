<?php
require_once 'model/paket_model.php';
require_once 'model/role_model.php';
require_once 'model/user_model.php';
require_once 'model/paket_model.php';
// require_once 'model/struk_model.php';

// // Inisialisasi model
// $testPaket = new ModelStruk();

// // // Tes getAllPaket
// // $pakets = $testPaket->getAllPaket();
// // echo "<pre>getAllPaket:\n";
// // print_r($pakets);
// // echo "</pre>";

// // $pakets = $testPaket->createStruk('denis','boboho@gmail.com',1,'2023-03-18',NULL);
// // echo "<pre>getAllPaket:\n";
// // print_r($pakets);
// // echo "</pre>";

// // $pakets = $testPaket->updateStruk('adit','aditkucing@gmail.com',1,'2023-03-18',282290,5);
// // echo "<pre>Paket diperbarui:\n";
// // print_r($pakets);
// // echo "</pre>";

// // $pakets = $testPaket->deleteStruk(5);
// // echo "<pre>Paket dihapus:\n";
// // print_r($pakets);
// // echo "</pre>";

// $pakets = $testPaket->getStrukById(2);
// echo "<pre>Struk by ID:\n";
// print_r($pakets);
// echo "</pre>";

// $pakets = new ModelUser();
// $testPaket = $pakets->createUser('denis','931','ucaac@gmail.com','admin');
// echo "<pre>Role by ID:\n";
// print_r($testPaket);
// echo "</pre>";
$pakets = new ModelPaket();
$testPaket = $pakets->createPaket('asolole',1,1000,7,'gym.jpg');
echo "<pre>Role by ID:\n";
print_r($testPaket);
echo "</pre>";
