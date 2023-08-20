<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Laporan Data Invoice Perminggu</h1>
        <?php 
        $tanggal_akhir_minggu2 = $tanggal_akhir_minggu; // Tanggal saat ini
        $tanggal_kurang = date('Y-m-d', strtotime('-1 day', strtotime($tanggal_akhir_minggu2)));
        // echo $tanggal_kurang; ?>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Invoice  <b> <?php echo $tanggal_awal_minggu; ?> hingga <?php echo $tanggal_akhir_minggu; ?> </b></li>
        </ol>
        <!-- Tambahkan kode lain untuk menampilkan data invoice -->
    </div>

</main>




        <div class="container-fluid px-4">
            <br>
            <div class="row">
                <div class="col-6">
                    <?php echo form_open('admin/invoice/minggu'); ?>
                    <label for="">Menampilkan Sesuai Tanggal Pemesan Hingga 6 Hari Kedepan dimulai dari hari <b>Minggu</b> :</label>
                    <div class="input-group ml-auto d-none d-lg-flex mt-2" style="width: 100%; max-width: 600px;">
                        <input type="date" class="form-control border-2" placeholder="masukan nama yang ingin dicari...." name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                        <div class="input-group-append">
                            <button class="input-group-text bg-danger text-dark border-0 px-3 py-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>



            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pdemesan</th>
                        <th>Alamat</th>
                        <th>Tanggal Pesan</th>
                        <th>Jasa</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <!--  -->


                    <!--  -->
                    <?php $no = 1; ?>

                    <?php
                    if (is_array($invoice) || is_object($invoice)) { ?>
                        <?php foreach ($invoice as $inv) { ?>

                            <tr>
                                <th scope="row"><?= $no++; ?></th>


                                <td><?= $inv->nama; ?> </td>
                                <td><?= $inv->alamat; ?> </td>
                                <!-- <td>June</td> -->
                                <td><?= $inv->tanggal_pesan; ?> </td>
                                <td><?= $inv->jasa; ?> </td>
                                <td>
                                    <?php echo anchor('admin/invoice/detail/' . $inv->id_invoice, '<div class="btn btn-sm btn-warning">Detail</div>') ?>
                                    <!-- <?php echo anchor('admin/invoice/detail/' . $inv->id_invoice, '<div class="btn btn-sm btn-warning">Detail</div>') ?> -->
                                </td>
                            </tr>
                        <?php }; ?>
                    <?php }; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>

        </div>
        <?php $this->load->view('templatesAdmin/footer_content'); ?>
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

    function myFunctiond() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myDate");
        filter = input.value;
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2]; // Mengganti indeks kolom menjadi 2 untuk kolom tanggal pesanan
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>