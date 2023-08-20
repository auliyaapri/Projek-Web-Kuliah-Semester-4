<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Pesan Booking</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Pesan dari Customer Pada Halaman Reservation</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <br>
            <!-- <input type="text" class="form-control w-25" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
            <?php echo form_open('admin/pesan_booking'); ?>
            <!-- <label for="">Menampilkan berdasarkan <b>Nama Produk, Keterangan, Kategori, Harga.</b> :</label> -->
            <div class="input-group me-auto d-flex mt-2" style="width: 100%; max-width: 600px;">
                <input type="text" class="form-control border-2" placeholder="masukan nama yang ingin dicari...." name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                <div class="input-group-append">
                    <button class="input-group-text bg-danger text-dark border-0 px-3 py-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <br>
            <?php echo form_close(); ?>

            <div class="table-responsive">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th style="width: 5px;">No</th>                        
                            <th style="width: 100px;">Username</th>
                            <th style="width: 150px;">Nama Customer</th>
                            <th style="width: 150px;">Email</th>
                            <th style="width: -2%;">Nomor HP</th>
                            <th scope="col">Tanggal Booking</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Jumlah Orang</th>
                            <th style="width: 150px;">Pesan</th>
                            <th style="width: 1%;" colspan="2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php
                        $no = 1;
                        foreach ($pesan as $psn) :
                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                
                                <td><?= $psn->username ?></td>
                                <td><?= $psn->nama ?></td>
                                <td><?= $psn->email ?></td>
                                <td><?= $psn->nomor_hp ?></td>
                                <td><?= $psn->tanggal ?></td>
                                <td><?= $psn->waktu ?></td>
                                <td><?= $psn->jumlah_orang ?></td>
                                <td><?= $psn->pesan ?></td>
                                <td>
                                    <?php if ($psn->status == 'konfirmasi') : ?>
                                        <button class="btn btn-success" disabled>Sudah Dikonfirmasi</button>
                                    <?php else : ?>
                                        <form action="<?= base_url('admin/Pesan_booking/konfirmasi/' . $psn->id); ?>" method="post">
                                            <input type="hidden" name="konfirmasi" value="konfirmasi">
                                            <button data-bs-toggle="modal" data-bs-target="#modalKonfirmasi<?= $psn->id; ?>" type="button" class="btn btn-primary">Konfirmasi</button>
                                        </form>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($psn->status == 'batal') : ?>
                                        <button class="btn btn-danger" disabled>Sudah Dibatalkan</button>
                                    <?php else : ?>
                                        <button data-bs-toggle="modal" data-bs-target="#modalBatal<?= $psn->id; ?>" type="button" class="btn btn-danger">Batal</button>
                                    <?php endif; ?>
                                </td>
                            </tr>

                            <!-- Modal Konfirmasi Batal -->
                            <div class="modal fade" id="modalBatal<?= $psn->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembatalan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Anda yakin ingin membatalkan pesanan?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="<?= base_url('admin/Pesan_booking/batal/' . $psn->id); ?>" method="post">
                                                <button type="submit" class="btn btn-danger">Ya, Batal</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Konfirmasi Booking -->
                            <div class="modal fade" id="modalKonfirmasi<?= $psn->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Booking</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Anda yakin ingin konfirmasi pesanan?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="<?= base_url('admin/Pesan_booking/konfirmasi/' . $psn->id); ?>" class="btn btn-primary">Ya, Konfirmasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if (count($pesan) > 14): ?>
                <?= $this->pagination->create_links(); ?>
            <?php endif; ?>
            </div>
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
            td = tr[i].getElementsByTagName("td")[1]; // Index 1 represents the second column (Nama Produk)
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
