<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Pesan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Pesan Dari Halaman Contact Customer</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <br>
            <!-- <input type="text" class="form-control w-25" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
            <?php echo form_open('admin/pesan'); ?>
            <!-- <label for="">Menampilkan berdasarkan <b>Nama Produk, Keterangan, Kategori, Harga.</b> :</label> -->
            <div class="input-group me-auto d-flex mt-2" style="width: 100%; max-width: 600px;">
                <input type="text" class="form-control border-2" placeholder="masukan nama yang ingin dicari...." name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                <div class="input-group-append">
                    <button class="input-group-text bg-danger text-dark border-0 px-3 py-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <br>
            <?php echo form_close(); ?>

            <table class="table table-bordered table-table-responsive-sm mt-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th style="width: 150px;">Nama Pelanggan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Pesan</th>
                        <th style="width: 200px;">Tanggal Pesan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody id="myTable">
                    <?php
                    $no = 1;
                    foreach ($pesan as $psn) : ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $psn->nama ?></td>
                            <td><?= $psn->email ?></td>
                            <td><?= $psn->nomor_hp ?></td>
                            <td><?= $psn->pesan ?></td>
                            <td><?= $psn->tanggal_pesan ?></td>
                            <td>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $psn->id; ?>" type="button" class="btn brn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>

                        </tr>
                        <!-- =============== Hapus MOdal ================== -->
                        <div class="modal fade" id="exampleModal<?= $psn->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembatalan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda yakin ingin menghapus pesan dari nama pelanggan <b><?= $psn->nama ?></b> ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('admin/pesan/hapus/' . $psn->id); ?>" class="btn btn-danger">Ya, Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- =============== Hapus MOdal ================== -->
                    <?php endforeach; ?>
                </tbody>
            </table>

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
</script>