<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tanggalahir = $_POST['tl'];
$hobi = $_POST['hobi'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $tanggalahir . "|F|".
        $hobi . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah disimpan!";