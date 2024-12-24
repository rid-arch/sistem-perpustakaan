<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    	<form name="form_transaksi" action="?page=transaksi&aksi=create" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label for="nim">NIM</label>
												<input type="text" class="form-control" id="nim" placeholder="Masukkan Nim" name="nim" required>
											</div>

											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama" required>
											</div>

											<div class="form-group">
												<label for="judul">Judul</label>
												<input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Buku" name="judul" required>
											</div>

											<div class="form-group">
												<label for="tanggal_pinjam">Tanggal Pinjam</label>
												<input type="text" class="form-control" id="tahun_pinjam" placeholder="Masukkan Tanggal Pinjam" name="tahun_pinjam">
													<!-- <?php

														$tahun=2001;

														for ($i=$tahun;$i<=$tahun +19;$i++) { 
															echo "<option value='".$i."'>".$i."</option>";
														}
													?> -->
												</input>
											</div>

											<div class="form-group">
												<label for="tanggal_kembali">Tanggal Kembali</label>
												<input type="text" class="form-control" id="tanggal_kembali" placeholder="Masukkan Tanggal" name="tanggal_kembali" required>
											</div>

											<div class="form-group">
												<label for="status">Status</label>
												<input type="text" class="form-control" id="status" placeholder="Masukkan Status Transaksi" name="status" required>
											</div>

											<!--<div class="form-group">
												<label for="isbn">ISBN</label>
												<input type="text" class="form-control" id="isbn" placeholder="Masukan ISBN" name="isbn" required>
											</div>-->

											<!-- <div class="form-group">
												<label for="Gambar">Gambar</label>
												<input type="file" class="form-control" id="gambar" name="gambar" required>
											</div> -->

											<div class="form-group">
												<button type="reset" class="btn btn-danger">Reset</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>