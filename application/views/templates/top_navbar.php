<div class="container-fluid-xxl">
    <div class="px-4 px-lg-5 py-1 py-lg-1 bg-warning text-dark ">
        <div class="d-flex">
            <div class="d-none d-xl-flex align-items-center ">
                <i class="fa fa-map-marker-alt me-3"></i>Jatiwarna, Pondok Melati, Bekasi
            </div>
            <div class="d-flex align-items-center">
                <i class="ms-md-5 fa fa-phone-alt me-3"></i>0812-8708-7465
            </div>
            <div class="d-flex align-items-center ms-auto pe-4">
                <?php if ($this->session->userdata('username') === NULL) : ?>
                    <a href="<?= base_url('auth/login') ?>" class="text-dark"> <i class="fa fa-user "></i> Login</a>
                <?php endif; ?>
                <?php if ($this->session->userdata('username') == TRUE) : ?>
                    <div class="dropdown">
                        <a class="nav-link text-dark d-flex align-items-center justify-content-between justify-content-md-around" style="width: 100px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user me-2"></i> 
                            <?php echo $this->session->userdata('username'); ?>
                            <i class="d-flex d-lg-none ms-1 fas fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu me-5 " style="margin-left: -100%;">
                            <!-- ===================== ADMIN =====================   -->
                            <?php if ($this->session->userdata('username') == "admin") : ?>                                
                                <li>
                                    <a class="nav-link text-dark" href="<?= base_url('auth/logout') ?>">Logout</a>
                                </li>
                            <?php endif; ?>
                            <!-- ===================== USER =====================   -->
                            <?php if ($this->session->userdata('username') != "admin") : ?>
                                <li>
                                    <?php
                                    $namaUser = $this->session->userdata('username');
                                    $query = $this->db->select('id')->from('tb_user')->where('username', $namaUser)->get();
                                    $result = $query->row();
                                    $idUser = $result->id;
                                    ?>
                                    <?php $namaUser =  $this->session->userdata('username'); ?>
                                    <a class="nav-link text-dark" href="<?= base_url('user/index/' . $namaUser . '/' . $idUser) ?>"><i class="fas fa-shopping-bag"></i> Pembelian History</a>
                                </li>                                
                                <li><a class="nav-link text-dark" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>