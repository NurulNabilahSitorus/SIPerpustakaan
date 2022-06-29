<?php $this->load->view("admin/_partials/head.php")?>
<?php $this->load->view("admin/_partials/sidebar.php")?>
<?php $this->load->view("admin/_partials/navbar.php")?>
    <!-- Begin Page Content -->
         <div class="container-fluid">
    <!-- Page Heading -->
         <div class="d=sm-flex align-items-center justify-content-between mb-4">
         	<h1 class="h3 mb-0 text-gray-800">
<?php $this->load->view("admin/_partials/breadcrumb.php")?>
            </h1>
        </div>
    <!-- /.container-fluid -->
        <div class="card mb-3">
             <div class="card-header">
                  <a href="<?php echo site_url('admin/denda/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
            <div class="card-body">
            	<form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $denda->denda_id?>" />
            		<div class="form-group">
            			<label for="nomor_induk_siswa">Nomor Induk Siswa*</label>
            			<input class="form-control <?php echo form_error('nomor_induk_siswa') ? 'is-invalid':'' ?>" type="number" name="nomor_induk_siswa" value="<?php echo $denda->nomor_induk_siswa?>" />
            			  <div class="invalid-feedback">
            			  	  <?php echo form_error('nomor_induk_siswa') ?>
            			  </div>
            	    </div>
                          <div class="form-group">
                          <label for="nama_siswa">Nama Siswa*</label>
                          <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>" type="text" name="nama_siswa" min="0" value="<?php echo $denda->nama_siswa?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('nama_siswa') ?>
                      </div>
                    </div>

                 <div class="form-group">
                          <label for="kelas">Kelas*</label>
                          <input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>" 
                          type="text" name="kelas" value="<?php echo $denda->kelas?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('kelas') ?>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="no_buku">Nomor Buku*</label>
                        <input class="form-control <?php echo form_error('no_buku') ? 'is-invalid':'' ?>" type="number" name="no_buku" value="<?php echo $denda->no_buku?>" />
                          <div class="invalid-feedback">
                              <?php echo form_error('no_buku') ?>
                          </div>
                    </div>

                <div class="form-group">
                          <label for="tanggal_peminjaman">Tanggal Peminjaman*</label>
                          <input class="form-control <?php echo form_error('tanggal_peminjaman') ? 'is-invalid':'' ?>" 
                          type="date" name="tanggal_peminjaman" value="<?php echo $denda->tanggal_peminjaman?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('tanggal_peminjaman') ?>
                      </div>
                    </div>

                <div class="form-group">
                          <label for="tanggal_pengembalian">Tanggal Pengembalian*</label>
                          <input class="form-control <?php echo form_error('tanggal_pengembalian') ? 'is-invalid':'' ?>" 
                          type="date" name="tanggal_pengembalian" value="<?php echo $denda->tanggal_pengembalian?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('tanggal_pengembalian') ?>
                      </div>
                    </div>

                <div class="form-group">
                          <label for="lama_keterlambatan">Lama Keterlambatan*</label>
                          <input class="form-control <?php echo form_error('lama_keterlambatan') ? 'is-invalid':'' ?>" 
                          type="text" name="lama_keterlambatan" value="<?php echo $denda->lama_keterlambatan?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('lama_keterlambatan') ?>
                      </div>
                    </div>

                    <div class="form-group">
                          <label for="jumlah_denda">Jumlah Denda*</label>
                          <input class="form-control <?php echo form_error('jumlah_denda') ? 'is-invalid':'' ?>" 
                          type="text" name="jumlah_denda" value="<?php echo $denda->jumlah_denda?>"/>
                          <div class="invalid-feedback">
                            <?php echo form_error('jumlah_denda') ?>
                          </div>
                        </div>

                      <input class="btn btn-success" type="submit" name="btn" value="Save" />
                </form>

          </div>

              <div class="card-footer small text-muted">
              	* required fields
              </div>
    </div>
        <!-- /.container-fluid -->
    </div>  
        <!-- End of Main Content -->   

        <!-- Footer -->
<footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center text-white my-auto">
        			<span>Copyright &copy; Sistem Informasi Perpustakaan SMA Nusantara</span>
        		</div>
        	</div>
        </footer>
                 <!-- End of Footer -->

            </div>
            <!-- End if Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

<?php $this->load->view("admin/_partials/js.php")?>










