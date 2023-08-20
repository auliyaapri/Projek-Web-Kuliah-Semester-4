<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <meta name="author" content="" />
        <title>Admin | <?php  
         if ($this->uri->segment(2) == 'pesan_booking') {
            echo "Pesan Booking";
        } elseif($this->uri->segment(2) == 'data_produk'){
            echo "Data Produk";
        } else {
            echo ucfirst($this->uri->segment(2));            
        }
        ?>
    
        </title>
        <link href="<?= base_url() ?>assets/img/admin-icon-url.png" rel="icon" class="bg-danger ">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?=base_url('assets_admin/')?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">