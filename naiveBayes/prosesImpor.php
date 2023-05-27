<?php
// include koneksi ke database
include "../koneksi.php";
// include library excel reader
include "../excel_reader2.php";
?>
<?php
// upload file excel
$target = basename($_FILES['dataset']['name']);
move_uploaded_file($_FILES['dataset']['tmp_name'],$target);
// beri permisi agar file xls dapat di baca
chmod($_FILES['dataset']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['dataset']['name'],false);
// mennghitung jumlah baris yang ditemukan
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yg berhasil ditemukan
$berhasil = 0;
for($i=2; $i<$jumlah_baris; $i++){
    // menangkap data yang ditemukan
    $nama   = $data->val($i,2);
    $jenis_kelamin  = $data->val($i,3);
    $usia   = $data->val($i,4);
    $status_mahasiswa   = $data->val($i,5);
    $status_menikah = $data->val($i,6);
    $aktif_organisasi = $data->val($i,8);
    $ips1 = $data->val($i,9);
    $ips2 = $data->val($i,10);
    $ips3 = $data->val($i,11);
    $ips4 = $data->val($i,12);
    $ips5 = $data->val($i,13);
    $ips6 = $data->val($i,14);
    $ips7 = $data->val($i,15);
    $ips8 = $data->val($i,16);
    $ipk = $data->val($i,17);
    $status_kelulusan = $data->val($i,18);

    if($nama!="" && $jenis_kelamin!="" && $usia!="" && $status_mahasiswa!="" && $status_menikah!="" && $aktif_organisasi!="" 
    && $ips1!="" && $ips2!="" && $ips3!="" && $ips4!="" && $ips5!="" && $ips6!="" && $ips7!="" && $ips8!="" && $ipk!="" && $status_kelulusan!=""){
        // input data ke database
        $query = "INSERT INTO dataset (nama,jenis_kelamin,usia,status_mahasiswa,status_menikah,aktif_organisasi,ips1,ips2,ips3,ips4,ips5,ips6,ips7,ips8,ipk,status_kelulusan)
        VALUE ('$nama','$jenis_kelamin','$usia','$status_mahasiswa','$status_menikah','$aktif_organisasi','$ips1','$ips2','$ips3','$ips4','$ips5','$ips6','$ips7','$ips8','$ipk','$status_kelulusan')";
        $sql = mysqli_query($koneksi,$query);
        $berhasil++;
    }
}

// hapus kembali file xls yang di upload
unlink($_FILES['dataset']['name']);

// arahkan ke halaman dashboard
header("location:dataset.php?berhasil=$berhasil");