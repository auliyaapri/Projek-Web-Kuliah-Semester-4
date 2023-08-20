<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kopi kila | Order</title>
    <link href="<?= base_url() ?>assets/img/coffee-solid.png" rel="icon" class="bg-danger ">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="border border-5 rounded p-5 mb-5">
                <div class="row">
                    <div class="col text-center">
                        <img src="<?= base_url('assets/img/delivery.jpg') ?>" class="w-100 rounded-4" alt="">
                    </div>
                    <div class="col">
                        <h1>Delivery Info</h1>
                        <div class="col mt-4">
                            <form action="<?= base_url() ?>order/proses_pesanan " method="post" enctype="multipart/form-data">
                                <?php foreach ($user as $usr) : ?>
                                    <?php $username_bro = $this->session->userdata('username'); ?>

                                    <?php if ($usr->username === $username_bro) : ?>

                                        <?php if (strpos($usr->alamat, 'Kemayorang ')) {
                                            // echo 'true';
                                        }; ?>
                        </div>
                        <div class="mb-3">
                            <input class="form-control shadow-none" value="<?php echo $usr->nama; ?>" type="text" readonly style="background-color: #e9ecef;" name="nama">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                        </div>
                        <div class="mb-3">
                            <input class="form-control shadow-none" value="<?php echo $usr->username; ?>" type="text" readonly style="background-color: #e9ecef;" name="username">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                        </div>

                        <div class="mb-3">

                            <input class="form-control" type="text" value="<?php echo $usr->email; ?>" readonly style="background-color: #e9ecef;" name="email">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $usr->alamat; ?>" class="form-control" readonly style="background-color: #e9ecef;" name="alamat">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" value="<?php echo $usr->nomor_hp; ?>" class="form-control" readonly style="background-color: #e9ecef;" name="nomor_hp">
                            <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" value="Tunai" class="form-control" readonly style="background-color: #e9ecef;" name="metode_bayar">
                            <label for="exampleInputEmail1" class="form-label">Metode Bayar</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" value="Kila Express" class="form-control" readonly style="background-color: #e9ecef;" name="jasa">
                            <label for="exampleInputEmail1" class="form-label">Jasa Pengiriman</label>
                        </div>
                        <!-- <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="jasa" required>
                            <option selected>Pilih Jasa Pengiriman</option>
                            <option value="Gojek">Gojek</option>
                            <option value="Grab">Grab</option>
                        </select> -->

                    <?php endif; ?>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-primary text-capitalize">Pesan</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>