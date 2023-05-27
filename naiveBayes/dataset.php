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
            <h4>Dataset : Nilai Mahasiswa</h4>
        </div>
        <div class="card-body">
        
        <?php 
            if(isset($_GET['berhasil'])){
                echo "<p class='text-success'>".$_GET['berhasil']."Data berhasil ditemukan</p>";
            }
        ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th width="12%">Nama</th>
                            <th class="text-center" width="10%">jenis_kelamin</th>
                            <th class="text-center" width="10%">usia</th>
                            <th class="text-center" width="10%">status_mahasiswa</th>
                            <th class="text-center" width="10%">status_menikah</th>
                            <th class="text-center" width="10%">aktif_organisasi</th>
                            <th class="text-center" width="10%">ips1</th>
                            <th class="text-center" width="10%">ips2</th>
                            <th class="text-center" width="10%">ips3</th>
                            <th class="text-center" width="10%">ips4</th>
                            <th class="text-center" width="10%">ips5</th>
                            <th class="text-center" width="10%">ips6</th>
                            <th class="text-center" width="10%">ips7</th>
                            <th class="text-center" width="10%">ips8</th>
                            <th class="text-center" width="10%">ipk</th>
                            <th class="text-center" width="10%">status_kelulusan</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include '../koneksi.php';
                            $sql = "SELECT * FROM dataset";
                            $query = mysqli_query($koneksi,$sql);
                            $i=1;
                            while($nilai = mysqli_fetch_array($query))
                            {?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $nilai['nama'];?></td>
                                <td><?php echo $nilai['jenis_kelamin'];?></td>
                                <td class="text-center"><?php echo $nilai['usia'];?></td>
                                <td><?php echo $nilai['status_mahasiswa'];?></td>
                                <td><?php echo $nilai['status_menikah'];?></td>
                                <td><?php echo $nilai['aktif_organisasi'];?></td>
                                <td class="text-center"><?php echo $nilai['ips1'];?></td>
                                <td class="text-center"><?php echo $nilai['ips2'];?></td>
                                <td class="text-center"><?php echo $nilai['ips3'];?></td>
                                <td class="text-center"><?php echo $nilai['ips4'];?></td>
                                <td class="text-center"><?php echo $nilai['ips5'];?></td>
                                <td class="text-center"><?php echo $nilai['ips6'];?></td>
                                <td class="text-center"><?php echo $nilai['ips7'];?></td>
                                <td class="text-center"><?php echo $nilai['ips8'];?></td>
                                <td class="text-center"><?php echo $nilai['ipk'];?></td>
                                <td><?php echo $nilai['status_kelulusan'];?></td>
                            </tr>
                            <?php } ?>
                            <?php 
                                $cek = mysqli_num_rows($query);
                                if($cek<=0){
                            ?>
                            <tr><td colspan="8">Data Kosong</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div><!--./card-body-->
    </div><!--./card-->
    </div><!--./content-->
    <div class="clear-both"></div>
</div>
</body>
</html>