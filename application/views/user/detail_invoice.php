<div class="container mt-5">


    <div class="row">
        <div class="btn btn-success">
            No. Invoice : INV/<?= date('d/m/Y', strtotime($invoice->tanggal_pesan)); ?>/
            <?php foreach ($pesanan as $psn) : ?>
                <?php $id_produkk = $psn->id_produk; ?>
                <?= $psn->id_produk . '/' ?>
            <?php endforeach; ?>
            <?= $invoice->id_invoice ?>
        </div>
        <table class="table table-bordered table-hover table-striped mt-3">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Jumlah Pesanan</th>
                    <th>Harga Satuan</th>
                    <th>Jasa</th>
                    <th>Tanggal Pesan</th>
                    <th>Sub-Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($pesanan as $psn) {
                    $subtotal = $psn->jumlah * $psn->harga;
                    $total += $subtotal;
                ?>
                    <tr>
                        <td> <?php echo $psn->nama_produk; ?> </td>
                        <td> <?php echo $psn->jumlah; ?> </td>
                        <td> Rp. <?php echo number_format($psn->harga, 0, ',', '.'); ?> </td>
                        <td> <?php echo $psn->jasa; ?> </td>
                        <td> <?php echo $psn->tanggal_pesan; ?> </td>
                        <td> Rp. <?php echo number_format($subtotal, 0, ',', '.'); ?> </td>
                    </tr>

                <?php }; ?>
            </tbody>
        </table>
    </div>
    <!-- ========== -->
    <?php $namaUser =  $this->session->userdata('username'); ?>
    <!-- ========== -->
    <div class="row d-flex justify-content-end">
        <div class="col-1 btn btn-danger">
            <a href="<?= base_url('user/index/' . $namaUser) ?>" class="text-white text-decoration-none rounded" style="text-transform: capitalize;">
                <i class="fas fa-reply"></i>
                Kembali
            </a>
        </div>
    </div>
</div>