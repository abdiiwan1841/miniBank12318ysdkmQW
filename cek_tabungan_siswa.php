<?php 
include 'sanitasi.php';
include 'db.php';

$keakun = stringdoang($_POST['keakun']);

$select = $db->query("SELECT SUM(jumlah) AS total_tabungan FROM detail_penyetoran WHERE dari_akun = '$keakun' ");
$jumlah = mysqli_fetch_array($select);

$select1 = $db->query("SELECT SUM(jumlah) AS total_tabungan1 FROM detail_penarikan WHERE ke_akun = '$keakun' ");
$jumlah1 = mysqli_fetch_array($select1);


echo $total = $jumlah['total_tabungan'] - $jumlah1['total_tabungan1'];


 ?>