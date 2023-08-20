<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <h1 class="mt-4"><?= $title ?></h1>
                <h4 class="mt-4">
                    <i class="fas fa-shopping-cart"></i> <?= $title ?> Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?>
                </h4>

            </div>
        </main>
        <div class="container-fluid px-4 mt-3">

            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Alamat</th>
                                <th>Tanggal Pesan</th>
                                <th>Id Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Jasa Pengiriman</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (is_array($invoice) || is_object($invoice)) { ?>
                                <?php $no = 1;
                                $grand_total = 0;
                                foreach ($invoice as $inv => $value) {
                                    $tot_harga = $value->jumlah * $value->harga;
                                    $grand_total = $grand_total + $tot_harga;
                                ?>

                                    <tr>
                                        <td><?= $no++ ?> </td>
                                        <td><?= $value->nama; ?> </td>
                                        <td><?= $value->alamat; ?> </td>
                                        <td><?= $value->tanggal_pesan; ?> </td>
                                        <td><?= $value->id_produk; ?> </td>
                                        <td><?= $value->nama_produk; ?> </td>
                                        <td>Rp.<?= number_format($value->harga, 0) ?></td>
                                        <td><?= $value->jumlah; ?> </td>
                                        <td>Rp.<?= number_format($tot_harga, 0) ?> </td>
                                        <td><?= $value->jasa; ?> </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h3> Grand Total : Rp. <?= number_format($grand_total, 0) ?> </h3>
                </div>
            </div>

            <div class="row no-print mb-3">
                <div class="col-12">
                    <button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
        </div>


        <?php $this->load->view('templatesAdmin/footer_content'); ?>
    </div>
</div>