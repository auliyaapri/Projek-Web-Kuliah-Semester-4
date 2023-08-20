
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Kopi Kila | Detail Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <!-- <div class="row">
            <div class="col">
                <h3> <i class="fas fa-map-marker-alt"></i> </h3>
            </div>
            <div class="col-11 me-5 text-justify">
                <h3 class="mb-4 fw-normal">Alamat Pengiriman <span class="fw-bolder"><u> <?= $this->session->userdata('username') ?></span></u></h3>
                <?php foreach ($user as $usr) : ?>
                    <?php $username_bro = $this->session->userdata('username'); ?>

                    <?php if ($usr->username === $username_bro) : ?>
                        <h5 class="fw-normal mt-3"><?php echo $usr->nama; ?></h5>
                        <h5 class="fw-normal mt-3"><?php echo $usr->alamat; ?></h5>
                        <h5 class="fw-normal mt-3"><?php echo $usr->nomor_hp; ?></h5>
                 


            </div>
        <?php endif; ?>
    <?php endforeach; ?>



    <?php $mantab = base_url('assets/img/amplop.png') ?>

    <img src="<?= base_url('assets/img/amplop.png') ?>" class="mb-4 mt-5" alt="">

        </div> -->
        <div class="row">
            <div class="col">
                <h3 class="mb-4 fw-normal">Detail Keranjang <span class="fw-bolder"><u> <?= $this->session->userdata('username') ?></span></u></h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($this->cart->contents() as $items) : ?>
                        <tr>
                            <td><?php echo $no++; ?> </td>
                            <td><?php echo $items['name']; ?> </td>
                            <td><?php echo $items['qty'] ?></td>
                            <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.'); ?></td>
                            <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
                        </tr>
                
                    <!-- ========= Pengkondisian Ongkir ========= -->
                    <?php
                         $Kemayorang = 'Kemayorang';
                         $jatiasih = 'jatiasih';
                         $jatiwaringin = 'jatiwaringin';
                    ?>                    
                    <?php if (strpos($usr->alamat, $Kemayorang)|| strpos($usr->alamat, $jatiasih)) {
                        $ongkir = 20000;
                    }; ?>
                    <?php $ongkir = 20000; ; ?>
                    
                        <?php endforeach; ?>
                    <!-- ========= Pengkondisian Ongkir ========= -->
                    <tr>
                        <td colspan="4">
                            <div class="text-center fw-bold">Ongkos Kirim</div>
                        </td>                        
                        <td align="right">Rp. <?= number_format($ongkir, 0, ',', '.'); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="fw-bold text-center">Total</td>
                        <?php $oke = $this->cart->total() + $ongkir; ?>

                        <td align="right">Rp. <?= number_format($oke, 0, ',', '.'); ?> </td>
                        <!-- <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?> </td> -->
                    </tr>

                </table>
                <div align="right">

                    <a href="<?= base_url('order/hapus_keranjang') ?>" class="btn btn-danger text-capitalize"><i class="fa fa-trash"></i> Hapus Keranjang</a>
                    <a href="<?= base_url('pages') ?>" class="btn btn-warning text-capitalize"><i class="fa fa-cart-plus"></i> Lanjutkan Belanja</a>
                    <a href="<?= base_url('order/pembayaran') ?>" class="btn btn-success text-capitalize"><i class="fa fa-money-bill-wave-alt"></i> Bayar</a>

                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

