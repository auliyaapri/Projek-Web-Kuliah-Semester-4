<?php echo $this->session->flashdata('pesan'); ?>


<!-- <?php $this->load->view('templatesAdmin/header'); ?> -->
<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 text-capitalize">Hello <?= $this->session->userdata('username') ?></h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard Admin</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary bg-gradient text-white mb-4">
                            <div class="card-body">Jumlah User</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h1 mb-0 font-weight-bold text-white"><?= $this->model_user->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                                <a href="<?= base_url('admin/user'); ?>"><i class="fas fa-user fa-3x text-warning"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success bg-gradient text-white mb-4">
                            <div class="card-body">Stok Produk</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h1 mb-0 font-weight-bold text-white"><?= $this->model_produk->hitung_data(); ?></div>
                                <a href="<?= base_url('admin/data_produk'); ?>"><i class="fa-solid fa-box fa-3x text-warning"></i></a>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-secondary bg-gradient text-white mb-4">
                        <div class="card-body">Data Testimonials</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h1 mb-0 font-weight-bold text-white"><?= $this->model_testimonials->tampil_data_Testimonials()->num_rows(); ?></div>
                                <a href="<?= base_url('admin/testimonials'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-dark bg-gradient text-white mb-4">
                            <div class="card-body">Data Pesan Booking</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h1 mb-0 font-weight-bold text-white"><?= $this->model_booking->tampil_data_pesanBookingDashboard()->num_rows(); ?></div>
                                <a href="<?= base_url('admin/pesan_booking'); ?>"><i class="fas fa-calendar-check fa-3x text-warning"></i></a>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Data Pesan / Message</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h1 mb-0 font-weight-bold text-white"><?= $this->model_booking->tampil_data_pesanContactDashboard()->num_rows(); ?></div>
                                <a href="<?= base_url('admin/pesan'); ?>"><i class="fas fa-envelope fa-3x text-warning"></i></a>                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>

</div>