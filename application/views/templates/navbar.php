
<?php $this->load->view('templates/top_navbar');?>

<div class="container-fluid-xxl bg-white p-0">
    
        <!-- Navbar & Hero Start -->
        <div class="container-fluid-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?=base_url('pages')?>" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fas fa-coffee me-3"></i> Kopi Kila</h1>
                    <!-- <img src="<?=base_url('assets/')?>img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?=base_url('pages')?>" class="nav-item nav-link">Home</a>                        
                        <a aria-current="page" href="<?= base_url('pages/about') ?>" <?= $this->uri->segment(2) == 'about' || $this->uri->segment(2) == 'about' ? 'class="active nav-link"' : 'class="nav-item nav-link "' ?>>About</a>
                        
                        <a aria-current="page" href="<?= base_url('pages/menu') ?>" <?= $this->uri->segment(2) == 'menu' || $this->uri->segment(2) == 'menu' ? 'class="active nav-link"' : 'class="nav-item nav-link "' ?>>Menu</a>                                                           
                        <a aria-current="page" href="<?= base_url('pages/reservation') ?>" <?= $this->uri->segment(2) == 'reservation' || $this->uri->segment(2) == 'reservation' ? 'class="active nav-link"' : 'class="nav-item nav-link "' ?>>reservation</a>                        
                        <a aria-current="page" href="<?= base_url('pages/contact') ?>" <?= $this->uri->segment(2) == 'contact' || $this->uri->segment(2) == 'contact' ? 'class="active nav-link"' : 'class="nav-item nav-link "' ?>>Contact</a>                                                                                   
                        <?php $keranjangs = $this->cart->total_items() ?>
                        <?php if ($keranjangs === 0) : ?>
                        <a href="<?=base_url('Order/keranjang_kosong')?>" class="nav-item nav-link d-flex">
                            <i class="fas fa-shopping-cart" style="font-size: 22.5px;"></i>                          
                              <p class="ps-1 text-warning" style="margin-top: -10px;"><?php echo $this->cart->total_items(); ?> </p>                           
                        </a>
                        <?php endif; ?>
                        <?php if ($keranjangs !== 0) : ?>
                        <a href="<?=base_url('Order/detail_keranjang')?>" class="nav-item nav-link d-flex">
                            <i class="fas fa-shopping-cart" style="font-size: 22.5px;"></i>                          
                              <p class="ps-1 text-warning" style="margin-top: -10px;"><?php echo $this->cart->total_items(); ?> </p>                           
                        </a>
                        <?php endif; ?>
                        
                        <!-- <a href="contact.html" class="nav-item nav-link"><i class="fas fa-shopping-cart"></i></a> -->
                    </div>                    
                </div>
            </nav>
            <div class="container-fluid-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown text-capitalize">
                        
                    <?php echo $this->uri->segment(2) ; ?>
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">                            
                            <li class="breadcrumb-item text-white active" aria-current="page">
                                <?php 
                                if ($this->uri->segment(2) == "menu") {
                                    echo "Rasakan cita rasa yang luar biasa dalam setiap sajian kami";
                                } elseif ($this->uri->segment(2) == "about") {
                                    echo "Dapatkan yang terbaik atau tidak sama sekali";
                                } elseif ($this->uri->segment(2) == "reservation") {
                                    echo "Nikmati suasana yang santai dan nyaman di kedai kopi kami";
                                } elseif ($this->uri->segment(2) == "contact") {
                                    echo "Contact kami jika anda ingin bertanya";
                                }
                                
                                ?>
                                
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        