<?php 

session_start(); 
error_reporting(0); 
if (isset($_SESSION["login"])) {
    header('location: login.php');
    exit;

}

?>
<marquee>Selamat Datang di Halaman Utama PERPUSTAKAAN EL RAHMA</marquee>
<!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: black;">Admin PERPUSTKAAN</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                 
                $mahasiswa= mysqli_query($mysqli,"SELECT * FROM tb_anggota");
                 
                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                ?>
                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Anggota</p></b>
                <a href="?page=anggota">
                    <p class="text-muted">Lihat Detail</p></a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                 
                $mahasiswa= mysqli_query($mysqli,"SELECT * FROM tb_buku");
                 
                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                ?>
                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Buku</p></b>
                    <a href="?page=buku">
                    <p class="text-muted">Lihat Detail</p></a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-database"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                 
                $mahasiswa= mysqli_query($mysqli,"SELECT * FROM tb_transaksi");
                 
                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                ?>
                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Transaksi</p></b>
                <a href="?page=transaksi">
                    <p class="text-muted">Lihat Details</p></a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                 
                $mahasiswa= mysqli_query($mysqli,"SELECT * FROM tb_user");
                 
                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                ?>
                <a href="?page=admin">
                <p class="text-muted">Lihat Details</p></a>
                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> User</p></b>
                

                </div>
             </div>
		     </div>
			</div>


    <div class="row" style="margin-top: 30px;">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Anggota Terlambat Pengembalian Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $transaksi = $mysqli->query("SELECT * FROM tb_transaksi WHERE status='pinjam'");
                                            $no = 0;
                                            while( $t = $transaksi->fetch_assoc()){
                                            $no++;
                                         ?>

                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $t["nama"]; ?></td>
                                            <td><?= $t["tgl_pinjam"]; ?></td>
                                            <td><?= $t["tgl_kembali"]; ?></td>
                                            <td>
                                                <?php

                                                $denda = 5000;

                                                $tgl_deadline = $t['tgl_kembali'];
                                                $tgl_kembali = date('Y-m-d');

                                                $lambat = terlambat($tgl_deadline,$tgl_kembali);
                                                $denda1 = $lambat*$denda;

                                                if ($lambat>0) {
                                                    echo"<font color='red'>$lambat hari<br>(Rp. $denda1)</font>";
                                                }else{
                                                    echo " ".$lambat." hari";
                                                }
                                                ?>
                                             </td>
                                            <td><?= $t["status"]; ?></td>
                                          <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                           <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                    </div>
                </div>
            </div>
        </div>    
            <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            El Rahma Library
                        </div>
                        <div class="panel-body">
                            <pu><center>Selamat datang di PERPUSTAKAAN EL RAHMA <br>
                            Sebuah perpustakaan digital yang memudahkan admin mengelola perpustakan STIKOM EL RAHMA</p></center>
                        </div>
                        <div class="panel-footer">
                            Introduction
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Admin
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($admin as $admin): ?>
                                        <?php 
                                        include "function.php";
                                        $admin= getAdminData();
                                        ?>

                                            <!-- $admin = $mysqli->query($sql = "SELECT * FROM `admin`;");
                                            $id = 0;
                                            while( $t = $admin->fetch_assoc())
                                            $id++;
                                         ?> -->

                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $t["id"]; ?></td>
                                            <td><?= $t["username"]; ?></td>
                                            <td><?= $t["nama"]; ?></td>
                                            <td><?= $t["level"]; ?></td>
                                            <td><?= $t["foto"]; ?></td>
                                            <td>
                                    </tr>
                                    <?php endforeach; ?>

            <?php include "koneksi.php"; ?>