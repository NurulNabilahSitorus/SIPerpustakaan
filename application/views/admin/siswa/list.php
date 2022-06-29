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
               <a class="btn btn-primary" href="<?php echo site_url('admin/siswa/add') ?>"><i class="fas fa-plus"></i>Add New</a>
        </div>

     <div class="card-body">
          <div class="table-responsive">
               <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                    <th>Nomor Induk Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Action</th>
               </tr>
          </thead>
          <tbody>
          <?php foreach ($siswa as $siswa): ?>
               <tr> 
               <td > 
               <?php echo $siswa->nomor_induk_siswa ?>
               </td>
               <td>
               <?php echo $siswa->nama_siswa ?> 
               </td>
               <td>
               <?php echo $siswa->jenis_kelamin ?>
               </td>
               <td>
               <?php echo $siswa->kelas ?>
               </td>
               <td>
               <a href="<?php echo site_url('admin/siswa/edit/'.$siswa->siswa_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
               <a href="<?php echo site_url('admin/siswa/delete/'.$siswa->siswa_id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
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
