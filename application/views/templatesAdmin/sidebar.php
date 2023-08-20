<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a aria-current="page" href="<?= base_url('admin/dashboard') ?>" <?= $this->uri->segment(2) == 'dashboard' ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="bi bi-house-fill"></i></div>
                    Dashboard
                </a>
                <a aria-current="page" href="<?= base_url('admin/user') ?>" <?= $this->uri->segment(2) == 'user' ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Data User
                </a>
                <a aria-current="page" href="<?= base_url('admin/pesan') ?>" <?= $this->uri->segment(2) == 'pesan' ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                    Pesan
                </a>
                <a aria-current="page" href="<?= base_url('admin/pesan_booking') ?>" <?= $this->uri->segment(2) == 'pesan_booking' ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                    Pesan Booking
                </a>
                <a aria-current="page" href="<?= base_url('admin/data_produk') ?>" <?= $this->uri->segment(2) == 'data_produk' ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                    Data Produk
                </a>
                <a aria-current="page" href="<?= base_url('admin/testimonials') ?>" <?= $this->uri->segment(2) == 'testimonials' ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Data Testimonial
                </a>
                <!-- data invoices baru -->
                <a aria-current="page" href="<?= base_url('admin/invoice') ?>" <?= ($this->uri->segment(2) == 'invoice' || $this->uri->segment(3) == 'inv_harian' || $this->uri->segment(3) == 'inv_bulanan' || $this->uri->segment(3) == 'inv_tahunan') ? 'class="active nav-link"' : 'class="nav-link"' ?>>
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                    Invoices
                </a>
                <!-- data invoices baru -->

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= $this->session->userdata('username') ?>
        </div>
    </nav>
</div>