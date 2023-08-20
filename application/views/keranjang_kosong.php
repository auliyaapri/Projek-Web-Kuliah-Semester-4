
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Kopi Kila | <?php if($this->uri->segment(2) == "keranjang_kosong"): ?>Keranjang<?php endif; ?>
</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/img/coffee-solid.png" rel="icon" class="bg-danger ">
	<!-- ========== Start Stylesheet ========== -->
	<link href="<?= base_url()?>assets_keranjang_kosong/css/bootstrap.min.css" rel="stylesheet" />	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?= base_url()?>assets_keranjang_kosong/css/style.css" rel="stylesheet">
	<link href="<?= base_url()?>assets_keranjang_kosong/css/responsive.css" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->
</head>

<body>		

	<!-- Start PreLoader
    ============================================= -->
	<div class="se-pre-con"></div>
	<!-- Start PreLoader-->

	
	<div class="single-area clearfix">
		<div class="error-area de-padding">
			<div class="container">
				<div class="error-wrapper grid-2">
					<div class="error-left">
						<img src="<?= base_url()?>assets_keranjang_kosong/img/404/keranjang_kosong2.png" alt="thumb">
					</div>
					<div class="error-right">
						<h2>Anda belum menambahkan keranjang</h2>
						<!-- <h2><?= ucfirst($this->uri->segment(2))?></h2> -->
					
						
						<a href="<?=base_url('pages')?>" class="theme-btn"> Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start Scroll top
	============================================= -->
	<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
	<!-- End Scroll top-->
	
	<!-- jQuery Frameworks 
    ============================================= -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	
	<script src=" <?= base_url()?>assets_keranjang_kosong/js/jquery-1.12.4.min.js"></script>
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/bootstrap.min.js"></script>
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/popper.min.js"></script>
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/jquery.appear.js"></script>

    <!-- <script src=" <?= base_url()?>assets_keranjang_kosong/js/jquery.easing.min.js"></script> -->
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/jquery.magnific-popup.min.js"></script>
    <!-- <script src=" <?= base_url()?>assets_keranjang_kosong/js/progress-bar.min.js"></script> -->
    <!-- <script src=" <?= base_url()?>assets_keranjang_kosong/js/modernizr.custom.13711.js"></script> -->
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/owl.carousel.min.js"></script>
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/wow.min.js"></script>
    <!-- <script src=" <?= base_url()?>assets_keranjang_kosong/js/isotope.pkgd.min.js"></script> -->
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/imagesloaded.pkgd.min.js"></script>
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/count-to.js"></script>
    
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/swiper.min.js"></script>    
	<script src=" <?= base_url()?>assets_keranjang_kosong/js/YTPlayer.min.js"></script>
    <!-- <script src=" <?= base_url()?>assets_keranjang_kosong/js/slick.min.js"></script> -->
    <!-- <script src=" <?= base_url()?>assets_keranjang_kosong/js/bsnav.min.js"></script> -->
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/jquery.easypiechart.js"></script>
    <script src=" <?= base_url()?>assets_keranjang_kosong/js/main.js"></script>
	
</body>

</html>