<?php
$kondisi = 0;
// Variabel mean
$mean_usia_tepat = 25.14;// mean usia lulus
$mean_status_mahasiswa_tepat = 1;// mean status_mahasiswa lulus
$mean_status_menikah_tepat = 1;// mean status_menikah lulus
$mean_aktif_organisasi_tepat = 1;// mean aktif_organisasi lulus
$mean_ips1_tepat = 4.0;// mean ips1 lulus
$mean_ips2_tepat = 4.0;// mean ips2 lulus
$mean_ips3_tepat = 4.0;// mean ips3 lulus
$mean_ips4_tepat = 4.0;// mean ips4 lulus
$mean_ips5_tepat = 4.0;// mean ips5 lulus
$mean_ips6_tepat = 4.0;// mean ips6 lulus
$mean_ips7_tepat = 4.0;// mean ips7 lulus
$mean_ips8_tepat = 4.0;// mean ips8 lulus
$mean_ipk_tepat = 4.0;// mean ipk lulus
$array_mean_tepat = array('TEPAT WAKTU',round($mean_usia_tepat,13),round($mean_status_mahasiswa_tepat,13),round($mean_status_menikah_tepat,13),
round($mean_aktif_organisasi_tepat,13),round($mean_ips1_tepat,13),round($mean_ips2_tepat,13),round($mean_ips3_tepat,13),round($mean_ips4_tepat,13),
round($mean_ips5_tepat,13),round($mean_ips6_tepat,13),round($mean_ips7_tepat,13),round($mean_ips8_tepat,13),round($mean_ipk_tepat,13));

$mean_usia_terlambat = 25.14;// mean usia tidak lulus
$mean_status_mahasiswa_terlambat = 1;// mean status mahasiswa tidak lulus
$mean_status_menikah_terlambat = 1;// mean status menikah tidak lulus
$mean_aktif_organisasi_terlambat = 1;// mean aktif organisasi tidak lulus
$mean_ips1_terlambat = 2.42333;// mean ips1 tidak lulus
$mean_ips2_terlambat = 2.25;// mean ips2 tidak lulus
$mean_ips3_terlambat = 2.33;// mean ips3 tidak lulus
$mean_ips4_terlambat = 2.21667;// mean 1ps4 tidak lulus
$mean_ips5_terlambat = 2.37;// mean ips5 tidak lulus
$mean_ips6_terlambat = 2.3;// mean ips6 tidak lulus
$mean_ips7_terlambat = 2.48;// mean ips7 tidak lulus
$mean_ips8_terlambat = 2.23333;// mean ips8 tidak lulus
$mean_ipk_terlambat = 2.32541667;// mean ipk tidak lulus

$array_mean_terlambat = array('TERLAMBAT',round($mean_usia_terlambat,13),round($mean_status_mahasiswa_terlambat,13),round($mean_status_menikah_terlambat,13),
round($mean_aktif_organisasi_terlambat,13),round($mean_ips1_terlambat,13),round($mean_ips2_terlambat,13),round($mean_ips3_terlambat,13),round($mean_ips4_terlambat,13),
round($mean_ips5_terlambat,13),round($mean_ips6_terlambat,13),round($mean_ips7_terlambat,13),round($mean_ips8_terlambat,13),round($mean_ipk_terlambat,13));

// Variabel standar deviasi
$sd_usia_tepat = 2.294625486;// standar deviasi usia lulus
$sd_status_mahasiswa_tepat = 1;// standar deviasi status mahasiswa lulus
$sd_status_menikah_tepat = 1;// standar deviasi status menikah lulus
$sd_aktif_organisasi_tepat = 1;// standar deviasi aktif organisasi lulus
$sd_ips1_tepat = 0.45013;// standar deviasi ips1 lulus 
$sd_ips2_tepat = 0.47654;// standar deviasi ips2 lulus
$sd_ips3_tepat = 0.4996;// standar deviasi ips3 lulus 
$sd_ips4_tepat = 0.44292;// standar deviasi ips4 lulus 
$sd_ips5_tepat = 0.42432;// standar deviasi ips5 lulus
$sd_ips6_tepat = 0.39919;// standar deviasi ips6 lulus 
$sd_ips7_tepat = 0.41903;// standar deviasi ips7 lulus
$sd_ips8_tepat = 0.46547;// standar deviasi ips8 lulus 
$sd_ipk_tepat = 0.370609785;// standar deviasi ipk lulus

$array_sd_tepat = array('TEPAT WAKTU',round($sd_usia_tepat,13),round($sd_status_mahasiswa_tepat,13),round($sd_status_menikah_tepat,13),
round($sd_aktif_organisasi_tepat,13),round($sd_ips1_tepat,13),round($sd_ips2_tepat,13),round($sd_ips3_tepat,13),round($sd_ips4_tepat,13),
round($sd_ips5_tepat,13),round($sd_ips6_tepat,13),round($sd_ips7_tepat,13),round($sd_ips8_tepat,13),round($sd_ipk_tepat,13));

$sd_usia_terlambat = 2.48;// standar deviasi usia tidak lulus
$sd_status_mahasiswa_terlambat = 1;// standar deviasi status mahasiswa tidak lulus
$sd_status_menikah_terlambat = 1;// standar deviasi status menikah tidak lulus
$sd_aktif_organisasi_terlambat = 1;// standar deviasi aktif organisasi tidak lulus
$sd_ips1_terlambat = 0.1484;// standar deviasi ips1 tidak lulus
$sd_ips2_terlambat = 0.2273;// standar deviasi ips2 tidak lulus 
$sd_ips3_terlambat = 0.1631;// standar deviasi ips3 tidak lulus
$sd_ips4_terlambat = 0.16519;// standar deviasi ips4 tidak lulus
$sd_ips5_terlambat = 0.05715;// standar deviasi ips5 tidak lulus 
$sd_ips6_terlambat = 0.12356;// standar deviasi ips6 tidak lulus
$sd_ips7_terlambat = 0.04967;// standar deviasi ips7 tidak lulus 
$sd_ips8_terlambat = 0.06236;// standar deviasi ips8 tidak lulus
$sd_ipk_terlambat = 0.002917708;// standar deviasi ipk tidak lulus 


$array_sd_terlambat = array('TERLAMBAT',round($sd_usia_terlambat,13),round($sd_status_mahasiswa_terlambat,13),round($sd_status_menikah_terlambat,13),
round($sd_aktif_organisasi_terlambat,13),round($sd_ips1_terlambat,13),round($sd_ips2_terlambat,13),round($sd_ips3_terlambat,13),round($sd_ips4_terlambat,13),
round($sd_ips5_terlambat,13),round($sd_ips6_terlambat,13),round($sd_ips7_terlambat,13),round($sd_ips8_terlambat,13),round($sd_ipk_terlambat,13));

// Probrabilitas kelulusan
$probabilitas_tepat = 0.941666667;
$probabilitas_terlambat = 0.058333333;
$total_probabilitas = $probabilitas_tepat+$probabilitas_terlambat;


// kelas lulus
$tes_usia_tepat = 0;
$tes_status_mahasiswa_tepat = 0;
$tes_status_menikah_tepat = 0;
$tes_aktif_organisasi_tepat = 0;
$tes_ips1_tepat = 0;
$tes_ips2_tepat = 0;
$tes_ips3_tepat = 0;
$tes_ips4_tepat = 0;
$tes_ips5_tepat = 0;
$tes_ips6_tepat = 0;
$tes_ips7_tepat = 0;
$tes_ips8_tepat = 0;
$tes_ipk_tepat = 0;


// kelas tidak lulus
$tes_usia_terlambat = 0;
$tes_status_mahasiswa_terlambat = 0;
$tes_status_menikah_terlambat = 0;
$tes_aktif_organisasi_terlambat = 0;
$tes_ips1_terlambat = 0;
$tes_ips2_terlambat = 0;
$tes_ips3_terlambat = 0;
$tes_ips4_terlambat = 0;
$tes_ips5_terlambat = 0;
$tes_ips6_terlambat = 0;
$tes_ips7_terlambat = 0;
$tes_ips8_terlambat = 0;
$tes_ipk_terlambat = 0;

$kelas_tepat = 0;
$kelas_terlambat = 0;

$hasil_klasifikasi = "Kosong";
// Hitung jika tombol submit sudah di klik
if(isset($_POST['submit'])){
    if($_POST['usia']!="" || $_POST['status_mahasiswa']!="" || $_POST['status_menikah']!="" || $_POST['aktif_organisasi']!="" || 
    $_POST['ips1']!="" || $_POST['ips2']!="" || $_POST['ips3']!="" || $_POST['ips4']!="" || $_POST['ips5']!="" || $_POST['ips6']!="" || 
    $_POST['ips7']!="" || $_POST['ips8']!="" || $_POST['ipk']!=""){

        // Tangkap value dari form
        $tes_usia = $_POST['usia'];
        $tes_status_mahasiswa = $_POST['status_mahasiswa'];
        $tes_status_menikah = $_POST['status_menikah'];
        $tes_aktif_organisasi = $_POST['aktif_organisasi'];
        $tes_ips1 = $_POST['ips1'];
        $tes_ips2 = $_POST['ips2'];
        $tes_ips3 = $_POST['ips3'];
        $tes_ips4 = $_POST['ips4'];
        $tes_ips5 = $_POST['ips5'];
        $tes_ips6 = $_POST['ips6'];
        $tes_ips7 = $_POST['ips7'];
        $tes_ips8 = $_POST['ips8'];
        $tes_ipk = $_POST['ipk'];

        // perhitungan probabilitas tiap kelas dengan rumus distribusi gaus
        // kelas lulus
        $tes_usia_tepat = 1/sqrt(2*3.14*$sd_usia_tepat)*exp(-((pow($tes_usia-$mean_usia_tepat,13))/(2*pow($sd_usia_tepat,13))));
        $tes_status_mahasiswa_tepat = 1/sqrt(2*3.14*$sd_status_mahasiswa_tepat)*exp(-((pow($tes_status_mahasiswa-$mean_status_mahasiswa_tepat,13))/(2*pow($sd_status_mahasiswa_tepat,13))));
        $tes_status_menikah_tepat = 1/sqrt(2*3.14*$sd_status_menikah_tepat)*exp(-((pow($tes_status_menikah-$mean_status_menikah_tepat,13))/(2*pow($sd_status_menikah_tepat,13))));
        $tes_aktif_organisasi_tepat = 1/sqrt(2*3.14*$sd_aktif_organisasi_tepat)*exp(-((pow($tes_aktif_organisasi-$mean_aktif_organisasi_tepat,13))/(2*pow($sd_aktif_organisasi_tepat,13))));
        $tes_ips1_tepat = 1/sqrt(2*3.14*$sd_ips1_tepat)*exp(-((pow($tes_ips1-$mean_ips1_tepat,13))/(2*pow($sd_ips1_tepat,13))));
        $tes_ips2_tepat = 1/sqrt(2*3.14*$sd_ips2_tepat)*exp(-((pow($tes_ips2-$mean_ips2_tepat,13))/(2*pow($sd_ips2_tepat,13))));
        $tes_ips3_tepat = 1/sqrt(2*3.14*$sd_ips3_tepat)*exp(-((pow($tes_ips3-$mean_ips3_tepat,13))/(2*pow($sd_ips3_tepat,13))));
        $tes_ips4_tepat = 1/sqrt(2*3.14*$sd_ips4_tepat)*exp(-((pow($tes_ips4-$mean_ips4_tepat,13))/(2*pow($sd_ips4_tepat,13))));
        $tes_ips5_tepat = 1/sqrt(2*3.14*$sd_ips5_tepat)*exp(-((pow($tes_ips5-$mean_ips5_tepat,13))/(2*pow($sd_ips5_tepat,13))));
        $tes_ips6_tepat = 1/sqrt(2*3.14*$sd_ips6_tepat)*exp(-((pow($tes_ips6-$mean_ips6_tepat,13))/(2*pow($sd_ips6_tepat,13))));
        $tes_ips7_tepat = 1/sqrt(2*3.14*$sd_ips7_tepat)*exp(-((pow($tes_ips7-$mean_ips7_tepat,13))/(2*pow($sd_ips7_tepat,13))));
        $tes_ips8_tepat = 1/sqrt(2*3.14*$sd_ips8_tepat)*exp(-((pow($tes_ips8-$mean_ips8_tepat,13))/(2*pow($sd_ips8_tepat,13))));
        $tes_ipk_tepat = 1/sqrt(2*3.14*$sd_ipk_tepat)*exp(-((pow($tes_ipk-$mean_ipk_tepat,13))/(2*pow($sd_ipk_tepat,13))));

        // kelas tidak lulus
        $tes_usia_terlambat = 1/sqrt(2*3.14*$sd_usia_terlambat)*exp(-((pow($tes_usia-$mean_usia_terlambat,13))/(2*pow($sd_usia_terlambat,13))));
        $tes_status_mahasiswa_terlambat = 1/sqrt(2*3.14*$sd_status_mahasiswa_terlambat)*exp(-((pow($tes_status_mahasiswa-$mean_status_mahasiswa_terlambat,13))/(2*pow($sd_status_mahasiswa_terlambat,13))));
        $tes_status_menikah_terlambat = 1/sqrt(2*3.14*$sd_status_menikah_terlambat)*exp(-((pow($tes_status_menikah-$mean_status_menikah_terlambat,13))/(2*pow($sd_status_menikah_terlambat,13))));
        $tes_aktif_organisasi_terlambat = 1/sqrt(2*3.14*$sd_aktif_organisasi_terlambat)*exp(-((pow($tes_aktif_organisasi-$mean_aktif_organisasi_terlambat,13))/(2*pow($sd_aktif_organisasi_terlambat,13))));
        $tes_ips1_terlambat = 1/sqrt(2*3.14*$sd_ips1_terlambat)*exp(-((pow($tes_ips1-$mean_ips1_terlambat,13))/(2*pow($sd_ips1_terlambat,13))));
        $tes_ips2_terlambat = 1/sqrt(2*3.14*$sd_ips2_terlambat)*exp(-((pow($tes_ips2-$mean_ips2_terlambat,13))/(2*pow($sd_ips2_terlambat,13))));
        $tes_ips3_terlambat = 1/sqrt(2*3.14*$sd_ips3_terlambat)*exp(-((pow($tes_ips3-$mean_ips3_terlambat,13))/(2*pow($sd_ips3_terlambat,13))));
        $tes_ips4_terlambat = 1/sqrt(2*3.14*$sd_ips4_terlambat)*exp(-((pow($tes_ips4-$mean_ips4_terlambat,13))/(2*pow($sd_ips4_terlambat,13))));
        $tes_ips5_terlambat = 1/sqrt(2*3.14*$sd_ips5_terlambat)*exp(-((pow($tes_ips5-$mean_ips5_terlambat,13))/(2*pow($sd_ips5_terlambat,13))));
        $tes_ips6_terlambat = 1/sqrt(2*3.14*$sd_ips6_terlambat)*exp(-((pow($tes_ips6-$mean_ips6_terlambat,13))/(2*pow($sd_ips6_terlambat,13))));
        $tes_ips7_terlambat = 1/sqrt(2*3.14*$sd_ips7_terlambat)*exp(-((pow($tes_ips7-$mean_ips7_terlambat,13))/(2*pow($sd_ips7_terlambat,13))));
        $tes_ips8_terlambat = 1/sqrt(2*3.14*$sd_ips8_terlambat)*exp(-((pow($tes_ips8-$mean_ips8_terlambat,13))/(2*pow($sd_ips8_terlambat,13))));
        $tes_ipk_terlambat = 1/sqrt(2*3.14*$sd_ipk_terlambat)*exp(-((pow($tes_ipk-$mean_ipk_terlambat,13))/(2*pow($sd_ipk_terlambat,13))));

        // Kalikan semua kelas label yang lulus dan tidak
        $kelas_tepat = $tes_usia_tepat*$tes_status_mahasiswa_tepat*$tes_status_menikah_tepat*$tes_aktif_organisasi_tepat*$tes_ips1_tepat*
        $tes_ips2_tepat*$tes_ips3_tepat*$tes_ips4_tepat*$tes_ips5_tepat*$tes_ips6_tepat*$tes_ips7_tepat*$tes_ips8_tepat*$tes_ipk_tepat*$probabilitas_tepat;

        $kelas_terlambat = $tes_usia_terlambat*$tes_status_mahasiswa_terlambat*$tes_status_menikah_terlambat*$tes_aktif_organisasi_terlambat*$tes_ips1_terlambat*
        $tes_ips2_terlambat*$tes_ips3_terlambat*$tes_ips4_terlambat*$tes_ips5_terlambat*$tes_ips6_terlambat*$tes_ips7_terlambat*$tes_ips8_terlambat*
        $tes_ipk_terlambat*$probabilitas_terlambat;

        // Cek nilai kelas label untuk mengetahui masuk klasifikasi lulus atau tidak
        if($kelas_tepat > $kelas_terlambat){
            $hasil_klasifikasi = "TEPAT WAKTU";
        }else $hasil_klasifikasi = "TERLAMBAT";
        $kondisi=1;
    }
    else{
        header("location:klasifikasi.php");
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php include '../_partials/headNb.php';?>
    <title>Naïve Bayes</title>
</head>
<body>
<?php 
    session_start();
    if($_SESSION['status'] != "login"){
        header('location:../index.php?pesan=belumlogin');
    }
    $nama = $_SESSION['username'];
?>
<?php include '../_partials/navbarNb.php'?>
<div class="wrapper container-fluid">
    <?php include '../_partials/sidebarNb.php'?>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h4>Perhitungan Klasifikasi Naïve Bayes</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- MEAN-->
                    <div class="col-md-4">
                        <h6>Mean</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                            <th>Status Kelulusan</th>
                                            <th>Usia</th>
                                            <th>Status Mahasiswa</th>
                                            <th>Status Menikah</th>
                                            <th>Aktif Organisasi</th>
                                            <th>IPS 1</th>
                                            <th>IPS 2</th>
                                            <th>IPS 3</th>
                                            <th>IPS 4</th>
                                            <th>IPS 5</th>
                                            <th>IPS 6</th>
                                            <th>IPS 7</th>
                                            <th>IPS 8</th>
                                            <th>IPK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                foreach($array_mean_tepat as $array){
                                                    echo "<td>".$array."</td>";
                                                } 
                                            ?>
                                        </tr>
                                        <tr>
                                            <?php 
                                                foreach($array_mean_terlambat as $array){
                                                    echo "<td>".$array."</td>";
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->

                    <!-- STANDAR DEVIASI-->
                    <div class="col-md-4">
                        <h6>Standar Deviasi</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                            <th>Status Kelulusan</th>
                                            <th>Usia</th>
                                            <th>Status Mahasiswa</th>
                                            <th>Status Menikah</th>
                                            <th>Aktif Organisasi</th>
                                            <th>IPS 1</th>
                                            <th>IPS 2</th>
                                            <th>IPS 3</th>
                                            <th>IPS 4</th>
                                            <th>IPS 5</th>
                                            <th>IPS 6</th>
                                            <th>IPS 7</th>
                                            <th>IPS 8</th>
                                            <th>IPK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                foreach($array_sd_tepat as $array){
                                                    echo "<td>".$array."</td>";
                                                } 
                                            ?>
                                        </tr>
                                        <tr>
                                            <?php
                                                foreach($array_sd_terlambat as $array){
                                                    echo "<td>".$array."</td>";
                                                } 
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->

                    <!-- PROBABILITAS KELAS LABEL-->
                    <div class="col-md-4">
                        <h6>Probabilitas</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <thead>
                                        <tr>
                                        <th>Status Kelulusan</th>
                                        <th>Nilai</th>
                                        <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TEPAT WAKTU</td>
                                            <td><?php echo round($probabilitas_tepat,4);?></td>
                                            <td rowspan="2" class="rowspan"><?php echo $total_probabilitas;?></td>
                                        </tr>
                                        <tr>
                                            <td>TERLAMBAT</td>
                                            <td><?php echo round($probabilitas_terlambat,4);?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->
                </div><!--./row-->


                <div class="card-body">
                <div class="row">
                    <!-- MEAN-->
                    <div class="col-md-4">
                        <h6>Data Testing</h6>
                        <table class="table bg-light">
                            <div class="table-responsive">
                            <tbody>
                                <tr>
                                    <td>
                                    <form action="" method="POST" onSubmit="validasi()">
                                        <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Usia</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="usia" id="usia" class="form-control">
                                        </div>
                                        </div><!--./form-row--> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Status Mahasiswa</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="status_mahasiswa" id="status_mahasiswa" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Status Menikah</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="status_menikah" id="status_menikah" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Aktif Organisasi</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="aktif_organisasi" id="aktif_organisasi" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                </tbody>
                                </table>
                            </div><!--./table-responsive-->
               
                 

                    
                    <div class="col-md-4">
                        <h6>Data Testing</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <tbody>
                                    <tr>
                                    <td>
                                    <form action="" method="POST" onSubmit="validasi()">
                                        <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">IPS 1</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ips1" id="ips1" class="form-control">
                                        </div>
                                        </div><!--./form-row--> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPS 2</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ips2" id="ips2" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPS 3</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ips3" id="ips3" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPS4</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ips4" id="ips4" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">IPS 5</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ips5" id="ips5" class="form-control">
                                        </div>
                                        </div><!--./form-row--> 
                                    </td>
                                </tr>
                                    </tbody>
                                </table>
                                           
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->
                    

                    <div class="col-md-4">
                        <h6>Data Testing</h6>
                            <div class="table-responsive">
                                <table class="table bg-light">
                                    <tbody>
                                    
                                <tr>
                                    <td>
                                    <form action="" method="POST" onSubmit="validasi()">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPS 6</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ips6" id="ips6" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPS 7</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ips7" id="ips7" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPS 8</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ips8" id="ips8" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">IPK</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ipk" id="ipk" class="form-control">
                                            </div>
                                        </div><!--./form-row-->
                                        
                                        </td>
                                </tr>
                                    </tbody>
                                </table>
                                           
                            </div><!--./table-responsive-->
                    </div><!--./col-md-4-->
                    </div><!--./row-->
                    <input type="submit" class="btn btn-info btn-sm btn-block" name="submit" value="Hitung &radic;">
                                               

                            <div class="col-md-12">
                                <p class="lead"><b>Hasil Klasifikasi </b></p>
                                <?php
                                    if($kondisi==1){
                                        if($hasil_klasifikasi=='TEPAT WAKTU'){
                                            echo "<p class='hasil-klasifikasi alert alert-success'>".$hasil_klasifikasi."</p>";
                                        }
                                        else{
                                            echo "<p class='hasil-klasifikasi alert alert-danger'>".$hasil_klasifikasi."</p>";
                                        }
                                    }
                                    else{
                                        echo "<p class='hasil-klasifikasi alert alert-dark'>".$hasil_klasifikasi."</p>";
                                    }
                                ?>
                                <a href="klasifikasi.php" class="btn btn-danger btn-sm btn-block reset">reset</a>
                            </div>
                        </div><!--./row-->
                        </div><!--./jumbotron-->
                    </div><!--./col-md-8-->
                </div><!--./row-->
            </div><!--./card-body-->
        </div><!--./card-->
    </div><!--./content-->
    <div class="clear-both"></div>
</div>
</body>
<script type="text/javascript">
    function validasi(){
        var usia = document.getElementById("usia").value;
        var status_mahasiswa = document.getElementById("status_mahasiswa").value;
        var status_menikah = document.getElementById("status_menikah").value;
        var aktif_organisasi = document.getElementById("aktif_organisasi").value;
        var ips1 = document.getElementById("ips1").value;
        var ips2 = document.getElementById("ips2").value;
        var ips3 = document.getElementById("ips3").value;
        var ips4 = document.getElementById("ips4").value;
        var ips5 = document.getElementById("ips5").value;
        var ips6 = document.getElementById("ips6").value;
        var ips7 = document.getElementById("ips7").value;
        var ips8 = document.getElementById("ips8").value;
        var ipk = document.getElementById("ipk").value;
        if(usia!="" && status_mahasiswa!="" && status_menikah!="" && aktif_organisasi!="" && ips1!="" && ips2!="" 
        && ips3!="" && ips4!="" && ips5!="" && ips6!="" && ips7!="" && ips8!="" && ipk!=""){
            return true;
        }else{
            alert("Form tidak boleh kosong");
            return false;
        }
    }
</script>
</html>