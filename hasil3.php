<?php  

require_once 'latihan3.php';

$data = new merk('kawasaki','honda','yamaha','bajaj');

echo 'merk motor ninja = '.$data->nama."<br>";
echo ' merk motor supra = '.$data->namaor."<br>";
echo 'merk motor mio = '.$data->ttl."<br>";
echo 'merk motor fulsar = ' .$data->kelas."<br>";
?>