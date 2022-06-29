<?php $this->load->view("admin/_partials/head.php")?>
<?php $this->load->view("admin/_partials/sidebar.php")?>
<?php $this->load->view("admin/_partials/navbar.php")?>
<?php $this->load->view("admin/_partials/footer.php")?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h3 mb-0 text-gray-800">Beranda</h5>

                    </div>

                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang di Sistem Informasi Perpustakaan SMA Nusantara</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-3xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-2xs border-bottom-primary font-weight-bold text-primary text-uppercase mb-1">
                                                Buku Tersedia</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">250 Buku</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-3xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center ">
                                        <div class="col mr-2">
                                            <div class="text-2xs border-bottom-success font-weight-bold text-success text-uppercase mb-1">
                                                Buku Dipinjam</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">15 Buku</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-3xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-2xs border-bottom-info font-weight-bold text-info text-uppercase mb-1">Buku Terlambat</div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10 Buku</div>
                                        </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-book fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        

                        <!-- Pending Requests Card Example -->
                        <div class="col-3xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-2xs border-bottom-warning font-weight-bold text-warning text-uppercase mb-1">Denda Belum Bayar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">6 Siswa</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <footer class="sticky-footer bg-gradient-success">
            <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="<?php echo site_url('admin') ?>">about us</a></li>
                                <li><a href="<?php echo site_url('admin') ?>">FAQ</a></li>
                                <li><a href="<?php echo site_url('admin') ?>">support</a></li>
                            </ul>
                    </div> 
                    <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="admin"><i class=" fab fa-facebook-f"></i></a>
                                <a href="admin"><i class=" fab fa-whatsapp"></i></a>
                                <a href="admin"><i class=" fab fa-twitter"></i></a>
                                
                    </div>
                    </div>    
            </footer>
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
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" jika anda ingin mengakhiri sesi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= site_url('admin/login/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("admin/_partials/js.php")?>