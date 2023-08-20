<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Invoice</h1>
                <ol class="breadcrumb mb-4">
                    <div class="btn btn-sm btn-success">
                        No. Invoice : INV/<?= date('d/m/Y', strtotime($invoice->tanggal_pesan)); ?>/
                        <?php foreach ($pesanan as $psn) : ?>
                            <?php $id_produkk = $psn->id_produk; ?>
                            <?= $psn->id_produk . '/' ?>
                        <?php endforeach; ?>
                        <?= $invoice->id_invoice ?>
                    </div>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id Barang</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Harga Satuan</th>
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
                            <td> <?php echo $psn->id_produk; ?> </td>
                            <td> <?php echo $psn->nama_produk; ?> </td>
                            <td> <?php echo $psn->jumlah; ?> </td>
                            <td> <?php echo number_format($psn->harga, 0, ',', '.'); ?> </td>
                            <td> <?php echo number_format($subtotal, 0, ',', '.'); ?> </td>
                        </tr>
                    <?php }; ?>

                </tbody>


            </table>
        </div>
        <?php $this->load->view('templatesAdmin/footer_content');?>
    
    </div>
</div>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>