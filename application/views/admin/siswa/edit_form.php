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
                  <a href="<?php echo site_url('admin/siswa/') ?>"><i class="fas fa-arrow-left"></i>Back</a>
        </div>
            <div class="card-body">
            	<form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $siswa->nomor_induk_siswa?>" />
            		<div class="form-group">
            			<label for="nomor_induk_siswa">Nomor Induk Siswa*</label>
            			<input class="form-control <?php echo form_error('nomor_induk_siswa') ? 'is-invalid':'' ?>" type="number" name="nomor_induk_siswa" value="<?php echo $siswa->nomor_induk_siswa?>" />
            			  <div class="invalid-feedback">
            			  	  <?php echo form_error('nomor_induk_siswa') ?>
            			  </div>
            	    </div>
                          <div class="form-group">
                          <label for="nama_siswa">Nama Siswa*</label>
                          <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>" type="text" name="nama_siswa" min="0" value="<?php echo $siswa->nama_siswa?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('nama_siswa') ?>
                      </div>
                    </div>

                    <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin*</label>
                          <select class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>" 
                          type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                                                <option value="">~ Pilih Jenis Kelamin ~</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                          <div class="invalid-feedback"> ~ Pilih Jenis Kelamin ~ </div>
                    </div>

                 <div class="form-group">
                          <label for="kelas">Kelas*</label>
                          <input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>" 
                          type="text" name="kelas" value="<?php echo $siswa->kelas?>"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('kelas') ?>
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
</div>
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










