
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta charset="utf-8">
    <title> Kopi Kila | 
        <?php 
            if ($this->uri->segment(2) == 'detail_keranjang') {
                echo "Detail";
            } elseif ($this->uri->segment(2) == 'proses_pesanan') {
                echo "Proses Pesanan";
            } elseif ($this->uri->segment(2) == 'about') {
                echo "About";
            } elseif ($this->uri->segment(2) == 'menu') {
                echo "Menu";
            } elseif ($this->uri->segment(2) == 'reservation') {
                echo "Reservation";
             } elseif ($this->uri->segment(2) == 'index') {
                echo "Invoice";
             }  elseif ($this->uri->segment(2) == 'detail') {
                echo "Detail Invoice";
             }  else {
               echo ucfirst($this->uri->segment(2));
            }
        // ucfirst($this->uri->segment(2))
        ?>
    </title>
    
    
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
    <link href="<?=base_url()?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body>