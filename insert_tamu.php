<?php
include "koneksi_tamu.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "insert into bukutamu (nama,alamat,email,pesan) values ('$nama','$alamat','$email','$pesan');";
$hasil = mysqli_query($conn, $sql);

if (!$hasil){
    echo ("query error");
}
else{
    header("location:buku_tamu.php");
} ?>