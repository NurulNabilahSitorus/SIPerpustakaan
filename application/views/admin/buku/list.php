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
 <!-- DataTables -->
     <div class="card mb-3">
          <div class="card-header">
               <a class="btn btn-primary" href="<?php echo site_url('admin/buku/add') ?>"><i class="fas fa-plus"></i>Add New</a>
        </div>

     <div class="card-body">
          <div class="table-responsive">
               <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                    <th>Nomor Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jenis Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Status Buku</th>
                    <th>Action</th>
               </tr>
          </thead>
          <tbody>
          <?php foreach ($buku as $buku): ?>
               <tr> 
               <td > 
               <?php echo $buku->no_buku ?>
               </td>
               <td> 
               <?php echo $buku->judul_buku ?>
               </td>
               <td>
               <?php echo $buku->pengarang ?> 
               </td>
               <td>
               <?php echo $buku->penerbit ?>
               </td>
               <td>     
               <?php echo $buku->tahun_terbit ?>
               </td>
               <td>
               <?php echo $buku->jenis_buku ?>
               </td>
               <td>     
               <?php echo $buku->jumlah_buku ?>
               </td>
               <td>
               <?php echo $buku->status_buku ?>
               </td>
               <td>
               <a href="<?php echo site_url('admin/buku/edit/'.$buku->buku_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
               <a href="<?php echo site_url('admin/buku/delete/'.$buku->buku_id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
               </td>
               </tr>
               <?php endforeach; ?>
               </tbody>
               </table>
          </div>
       </div>
          </div>
          </div>
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
