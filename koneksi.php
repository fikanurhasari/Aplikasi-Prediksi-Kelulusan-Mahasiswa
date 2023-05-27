<?php
$koneksi = mysqli_connect('localhost','root','','uas_pkb');
if(!$koneksi){
    echo "Gagal terhubung".mysqli_error()."-".mysqli_errno();
}