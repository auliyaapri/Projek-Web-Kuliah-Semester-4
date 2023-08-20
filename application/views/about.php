<!-- About Start -->
<div class="container-fluid-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?= base_url('assets/') ?>img/about/about_1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?= base_url('assets/') ?>img/about/about_2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('assets/') ?>img/about/about_3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url('assets/') ?>img/about/about_4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                <p class="mb-4">Kami adalah tempat yang sempurna untuk menikmati secangkir kopi yang lezat dan menikmati suasana yang santai.</p>
                <p>Di kedai kopi kami, kami menggunakan biji kopi berkualitas tinggi dari petani lokal dan internasional untuk membuat kopi yang sempurna. Dari cappuccino yang klasik hingga kopi khas kami yang unik, setiap minuman kopi dihidangkan dengan penuh cinta dan keahlian oleh barista kami yang berbakat.</p>
                <p>Nikmati suasana yang nyaman dan ramah di kedai kopi kami, dengan dekorasi yang kreatif dan menyenangkan. Kami menyediakan tempat duduk yang nyaman dan juga akses internet nirkabel gratis, sehingga Anda dapat bersantai, bekerja, atau bersosialisasi dengan teman-teman.</p>
                <p>Kami juga menawarkan makanan ringan yang lezat untuk melengkapi secangkir kopi Anda. Dari roti panggang yang segar hingga kue-kue homemade yang lezat, dan pastinya mengenyangkan.</p>
                <p>Kami selalu berusaha memberikan pengalaman kopi yang tak terlupakan untuk setiap tamu kami. Kunjungi kedai kopi kami dan nikmati kopi yang luar biasa dan pengalaman bersantap yang menyenangkan.</p>                

                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">6</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Menu Start -->
<div class="container-fluid-xxl py-5">
    <div class="container">
        <div class="text-center wow">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Populer Menu</h5>
            <h1 class="mb-5">Our Populer Menu</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($menu as $populer) : ?>
                <?php $folder = $populer->kategori; ?>
                <?php if ($populer->kategori2 == "Populer") : ?>
                    <div class="populer-menu col-lg-3 me-3 p-3">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . '/uploads_produk/' . $folder . '/' . $populer->gambar; ?>">
                        <h4 class="text-capitalize mt-3"><?=$populer->nama_produk?></h4>
                        <p><?=$populer->keterangan?></p>
                        <h6 class="mt-3 mb-3 text-primary"  style="font-size:1.3rem;">Rp. <?=number_format($populer->harga)?></h6>
                        <a href="<?= base_url('Order/tambah_ke_keranjang/' . $populer->id_produk) ?>" class="btn btn-danger text-capitalize rounded-3"><i class="fas fa-shopping-cart"></i> Tambahkan Ke Keranjang</a>                        
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Menu End -->
