
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data admin</title>
</head>
<body>
<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " ><i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
											<th>Username</th>
											<th>Nama</th>
											<th>Level</th>
											<!-- <th>Program Studi</th>
											<th>Alamat</th>
											<th>Foto</th>
											<th>Aksi</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
										 	$admin = $mysqli->query("SELECT * FROM tb_admin ");
										 	$id = 0;
										 	while( $m = $admin->fetch_assoc()){
											$id++;
										 ?>

                                    	<tr>
                                    		<th scope="row"><?= $id; ?></th>
										  	<td><?= $m["id"]; ?></td>
										  	<td><?= $m["username"]; ?></td>
										  	<td><?= $m["nama"]; ?></td>
										  	<td><?= $m["level"]; ?></td>
										  	<td><?= $m["foto"]; ?></td>
										  	<td><img src="images/anggota/<?= $m["gambar"]; ?>" height="70"></td>
										  	<td>
										  		<a href="?page=admin&aksi=details&id=<?php echo $m['id'];?>" class="btn btn-success">Details <i class="fa fa-info-circle text-white"></i></a></button>
										  		<a href="?page=admin&aksi=edit&id=<?php echo $m['id'];?>" class="btn btn-info">Edit <i class="fa fa-edit text-white"></i></a></button>
												<a href="?page=admin&aksi=delete&id=<?php echo $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini?');">Hapus <i class="fa fa-trash text-white"></i></a>
										  	</td>
										  <?php } ?>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <a href="./laporan/laporan_anggota_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a> -->
</body>
</html>



