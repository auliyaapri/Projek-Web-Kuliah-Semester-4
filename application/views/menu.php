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
                       <!-- ============= Tab 1  ============= -->
                       <div id="tab-1" class="tab-pane fade show p-0 active">
                           <div class="row g-4 justify-content-center text-start">
                               <?php foreach ($menu as $mkn) : ?>
                                   <?php if ($mkn->kategori == "Makanan") : ?>
                                       <div class="populer-menu col-lg-3 me-3 p-3">
                                           <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . '/uploads_produk/Makanan/' . $mkn->gambar; ?>" style="height: 250px;">
                                           <h5 class="mt-3 text-capitalize"><?= $mkn->nama_produk ?></h5>
                                           <p><?= $mkn->keterangan ?></p>
                                           <h6 class="mt-3 mb-3 text-primary" style="font-size:1.3rem;">Rp. <?= number_format($mkn->harga) ?></h6>
                                           <?php if ($mkn->stok > 0) : ?>
                                            <a href="<?= base_url('Order/tambah_ke_keranjang/' . $mkn->id_produk) ?>" class="btn btn-danger text-capitalize rounded-3"><i class="fas fa-shopping-cart"></i> Tambahkan Ke Keranjang</a>
                                           <?php else : ?>
                                               <button class="btn btn-danger text-capitalize rounded-pill" disabled>Stok Habis</button>
                                           <?php endif; ?>
                                           
                                       </div>
                                   <?php endif; ?>
                               <?php endforeach; ?>
                           </div>
                       </div>
                       <!-- ============= Tab 2  ============= -->
                       <div id="tab-2" class="tab-pane fade show p-0">
                           <div class="row g-4 justify-content-center text-start">
                               <?php foreach ($menu as $cemilan) : ?>
                                   <?php if ($cemilan->kategori == "Cemilan") : ?>
                                       <div class="populer-menu col-lg-3 me-3 p-3">
                                           <!-- <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url('assets/') ?>img/menu/makanan/nasi bakso geprek.jpg"> -->
                                           <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . '/uploads_produk/Cemilan/' . $cemilan->gambar; ?>" style="height: 250px;">
                                           <h5 class="mt-3 text-capitalize"><?= $cemilan->nama_produk ?></h5>                                           
                                           <p><?= $cemilan->keterangan ?></p>
                                           <h6 class="mt-3 mb-3 text-primary" style="font-size:1.3rem;">Rp. <?= number_format($cemilan->harga) ?></h6>
                                           <?php if ($cemilan->stok > 0) : ?>
                                            <a href="<?= base_url('Order/tambah_ke_keranjang/' . $cemilan->id_produk) ?>" class="btn btn-danger text-capitalize rounded-3"><i class="fas fa-shopping-cart"></i> Tambahkan Ke Keranjang</a>
                                           <?php else : ?>
                                               <button class="btn btn-danger text-capitalize rounded-pill" disabled>Stok Habis</button>
                                           <?php endif; ?>
                                       </div>
                                   <?php endif; ?>
                               <?php endforeach; ?>
                           </div>
                       </div>
                       <!-- ============= Tab 3  ============= -->
                       <div id="tab-3" class="tab-pane fade show p-0">
                           <div class="row g-4 justify-content-center text-start">
                               <?php foreach ($menu as $minuman) : ?>
                                   <?php if ($minuman->kategori == "Minuman") : ?>
                                       <div class="populer-menu col-lg-3 me-3 p-3">
                                           <!-- <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url('assets/') ?>img/menu/Minuman/nasi bakso geprek.jpg"> -->
                                           <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url() . '/uploads_produk/Minuman/' . $minuman->gambar; ?>" style="height: 250px;">
                                           <h5 class="mt-3 text-capitalize"><?= $minuman->nama_produk ?></h5>                                           
                                           <p><?= $minuman->keterangan ?></p>
                                           <h6 class="mt-3 mb-3 text-primary" style="font-size:1.3rem;">Rp. <?= number_format($minuman->harga) ?></h6>
                                           <?php if ($minuman->stok > 0) : ?>
                                            <a href="<?= base_url('Order/tambah_ke_keranjang/' . $minuman->id_produk) ?>" class="btn btn-danger text-capitalize rounded-3"><i class="fas fa-shopping-cart"></i> Tambahkan Ke Keranjang</a>
                                           <?php else : ?>
                                               <button class="btn btn-danger text-capitalize rounded-pill" disabled>Stok Habis</button>
                                           <?php endif; ?>
                                           
                                       </div>
                                   <?php endif; ?>
                               <?php endforeach; ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Menu End -->