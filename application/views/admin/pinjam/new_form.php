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
                  <a href="<?php echo site_url('admin/pinjam/') ?>"><i class="fas fa-arrow-left"></i> Back</a></div>
            <div class="card-body">
            	<form action="<?php echo site_url('admin/pinjam/add') ?>" method="post" enctype="multipart/form-data" >
            		<div class="form-group">
            			<label for="nomor_induk_siswa">Nomor Induk Siswa*</label>
            			<input class="form-control <?php echo form_error('nomor_induk_siswa') ? 'is-invalid':'' ?>" type="number" name="nomor_induk_siswa" placeholder="Nomor Induk Siswa" />
            			  <div class="invalid-feedback">
            			  	  <?php echo form_error('nomor_induk_siswa') ?>
            			  </div>
            	    </div>
                          <div class="form-group">
                          <label for="nama_siswa">Nama Siswa*</label>
                          <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid':'' ?>" type="text" name="nama_siswa"  placeholder="Nama Siswa"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('nama_siswa') ?>
                      </div>
                    </div>

                 <div class="form-group">
                          <label for="kelas">Kelas*</label>
                          <input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>" 
                          type="text" name="kelas" placeholder="Kelas"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('kelas') ?>
                      </div>
                    </div>

                <div class="form-group">
                          <label for="no_buku">Nomor Buku*</label>
                          <input class="form-control <?php echo form_error('no_buku') ? 'is-invalid':'' ?>" 
                          type="number" name="no_buku" placeholder="Nomor Buku"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('no_buku') ?>
                      </div>
                    </div>

                <div class="form-group">
                          <label for="judul_buku">Judul Buku*</label>
                          <input class="form-control <?php echo form_error('judul_buku') ? 'is-invalid':'' ?>" 
                          type="text" name="judul_buku" placeholder="Judul Buku"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('judul_buku') ?>
                      </div>
                    </div>

                <div class="form-group">
                          <label for="penerbit">Penerbit*</label>
                          <input class="form-control <?php echo form_error('penerbit') ? 'is-invalid':'' ?>" 
                          type="text" name="penerbit" placeholder="Penerbit"/>
                          <div class="invalid-feedback">
                          <?php echo form_error('penerbit') ?>
                      </div>
                    </div>

                    <div class="form-group">
                          <label for="tahun_terbit">Tahun Terbit*</label>
                          <input class="form-control <?php echo form_error('tahun_terbit') ? 'is-invalid':'' ?>" 
                          type="date" name="tahun_terbit"/>
                          <div class="invalid-feedback">
                            <?php echo form_error('tahun_terbit') ?>
                          </div>
                        </div>

                     <div class="form-group">
                            <label for="jenis_buku">Jenis Buku*</label>
                            <select class="form-control <?php echo form_error('jenis_buku') ? 'is-invalid':'' ?>" 
                            type="text" name="jenis_buku" placeholder="Jenis Buku" required/>
                                                  <option value="">~ Pilih Jenis Buku ~</option>
                                                  <option value="1">Buku Pelajaran</option>
                                                  <option value="2">Ensiklopedia</option>
                                                  <option value="3">Novel</option>
                                                  <option value="4">Majalah</option>
                                              </select>
                            <div class="invalid-feedback"> ~ Pilih Jenis Buku ~ </div>
                      </div>

                <div class="form-group">
                          <label for="tanggal_peminjaman">Tanggal Peminjaman*</label>
                          <input class="form-control <?php echo form_error('tanggal_peminjaman') ? 'is-invalid':'' ?>" 
                          type="date" name="tanggal_peminjaman"/>
                          <div class="invalid-feedback">
                            <?php echo form_error('tanggal_peminjaman') ?>
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










