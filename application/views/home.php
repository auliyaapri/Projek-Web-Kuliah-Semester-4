<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Kopi Kila | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/img/coffee-solid.png" rel="icon" class="bg-danger ">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('templates/top_navbar'); ?>


    <div class="container-fluid-xxl bg-white p-0 ">
        <!-- Navbar & Hero Start -->
        <div class="container-fluid-xxl position-relative p-0">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-coffee me-3"></i>Kopi Kila</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?= base_url('pages') ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?= base_url('pages/about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('pages/menu') ?>" class="nav-item nav-link">Menu</a>
                        <a href="<?= base_url('pages/reservation') ?>" class="nav-item nav-link">Reservation</a>
                        <a href="<?= base_url('pages/contact') ?>" class="nav-item nav-link">Contact</a>

                        <?php $keranjangs = $this->cart->total_items() ?>
                        <?php if ($keranjangs === 0) : ?>
                            <a href="<?= base_url('Order/keranjang_kosong') ?>" class="nav-item nav-link d-flex">
                                <i class="fas fa-shopping-cart" style="font-size: 22.5px;"></i>
                                <p class="ps-1 text-warning" style="margin-top: -10px;"><?php echo $this->cart->total_items(); ?> </p>
                            </a>
                        <?php endif; ?>
                        <?php if ($keranjangs !== 0) : ?>
                            <a href="<?= base_url('Order/detail_keranjang') ?>" class="nav-item nav-link d-flex">
                                <i class="fas fa-shopping-cart" style="font-size: 22.5px;"></i>
                                <p class="ps-1 text-warning" style="margin-top: -10px;"><?php echo $this->cart->total_items(); ?> </p>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <div class="container-fluid-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Karena Kopi<br>Milik Semua</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Hidup ini seperti secangkir kopi di mana pahit dan manis bertemu dalam kehangatan.</p>
                            <a href="<?= base_url('pages/reservation') ?>" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?= base_url() ?>assets/img/kopi.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-fluid-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Service</h5>
                        <h1 class="mb-5 text-capitalize">What we focus on</h1>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="<?= base_url('assets/img/private.png') ?>" class="w-25 mb-4" alt="">
                                <h5>Reservation</h5>
                                <p>Berlaku delivery dan booking via website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="<?= base_url('assets/img/table.png') ?>" class="w-25 mb-4" alt="">
                                <h5>Private Event</h5>
                                <p>Menyediakan booking private untuk acara kantor, ulang tahun dll.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="<?= base_url('assets/img/shopping-cart.png') ?>" class="w-25 mb-4" alt="">
                                <h5>Online Order</h5>
                                <p>Memudahkan pemesanan secara onlline</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="<?= base_url('assets/img/motorbike.png') ?>" class="w-25 mb-4" alt="">
                                <h5>Fast Delivery</h5>
                                <p>Pengiriman cepat memastikan produk Anda sampai tepat waktu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <!-- Menu Start -->
        <div class="container-fluid-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Menu</h5>
                    <h1 class="mb-5">Tasty and good price</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Makanan</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Cemilan</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fas fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Minuman</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- ================ Makanan  ================ -->
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach ($menu as $mkn) : ?>
                                    <?php if ($mkn->kategori == "Makanan") : ?>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="<?= base_url() . '/uploads_produk/Makanan/' . $mkn->gambar; ?>" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize"><?= $mkn->nama_produk; ?></span>
                                                        <span class="text-primary"><?= "Rp." . number_format($mkn->harga); ?></span>
                                                    </h5>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <small class="fst-italic"><?= $mkn->keterangan; ?></small>
                                                        <?php if ($mkn->stok > 0) : ?>
                                                            <a href="<?= base_url('Order/tambah_ke_keranjang/' . $mkn->id_produk) ?>" class="btn btn-danger text-capitalize rounded-pill "><i class="fas fa-shopping-cart"></i> Beli</a>
                                                        <?php else : ?>
                                                            <button class="btn btn-danger text-capitalize rounded-pill" disabled>Stok Habis</button>
                                                        <?php endif; ?>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- ================ Cemilan  ================ -->
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php foreach ($menu as $cemilan) : ?>
                                    <?php if ($cemilan->kategori == "Cemilan") : ?>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="<?= base_url() . '/uploads_produk/Cemilan/' . $cemilan->gambar; ?>" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize"><?= $cemilan->nama_produk; ?></span>
                                                        <span class="text-primary"><?= "Rp." . number_format($cemilan->harga); ?></span>
                                                    </h5>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <small class="fst-italic"><?= $cemilan->keterangan; ?></small>
                                                        <?php if ($cemilan->stok > 0) : ?>
                                                            <a href="<?= base_url('Order/tambah_ke_keranjang/' . $cemilan->id_produk) ?>" class="btn btn-danger text-capitalize rounded-pill "><i class="fas fa-shopping-cart"></i> Beli</a>
                                                        <?php else : ?>
                                                            <button class="btn btn-danger text-capitalize rounded-pill" disabled>Stok Habis</button>
                                                        <?php endif; ?>                                                             
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- ================ Minuman  ================ -->
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php foreach ($menu as $minuman) : ?>
                                    <?php if ($minuman->kategori == "Minuman") : ?>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded" src="<?= base_url() . '/uploads_produk/Minuman/' . $minuman->gambar; ?>" alt="" style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span class="text-capitalize"><?= $minuman->nama_produk; ?></span>
                                                        <span class="text-primary"><?= "Rp." . number_format($minuman->harga); ?></span>
                                                    </h5>

                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <small class="fst-italic"><?= $minuman->keterangan; ?></small>
                                                        <?php if ($minuman->stok > 0) : ?>
                                                            <a href="<?= base_url('Order/tambah_ke_keranjang/' . $minuman->id_produk) ?>" class="btn btn-danger text-capitalize rounded-pill "><i class="fas fa-shopping-cart"></i> Beli</a>
                                                        <?php else : ?>
                                                            <button class="btn btn-danger text-capitalize rounded-pill" disabled>Stok Habis</button>
                                                        <?php endif; ?>   
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

            <!-- Testimonial Start -->
            <div class="container-fluid-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                        <h1 class="mb-5">Our Clients Say!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <?php foreach ($testimonials as $testimonial) : ?>
                            <div class="testimonial-item bg-transparent border rounded p-4" style="height: 270px;">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p><?= $testimonial->keterangan ?></p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() . '/uploads_produk/Testimonial/' . $testimonial->gambar; ?>" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1"><?= $testimonial->nama_pelanggan; ?></h5>
                                        <small><?= $testimonial->jenis_pekerjaan; ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>