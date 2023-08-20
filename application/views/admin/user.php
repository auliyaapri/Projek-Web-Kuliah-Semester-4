<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data User / Pelanggan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Halaman Data User / Pelanggan</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">

            <!-- Modal -->

            <br>

            <?php echo form_open('admin/user'); ?>
            <!-- <label for="">Menampilkan berdasarkan <b>Nama Produk, Keterangan, Kategori, Harga.</b> :</label> -->
            <div class="input-group me-auto d-flex mt-2" style="width: 100%; max-width: 600px;">
                <input type="text" class="form-control border-2" placeholder="masukan nama yang ingin dicari...." name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                <div class="input-group-append">
                    <button class="input-group-text bg-danger text-dark border-0 px-3 py-3" type="submit" name="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <br>
            <?php echo form_close(); ?>


            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Password</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php $no = 1; ?>
                    <?php foreach ($data_user as $dtu) : ?>
                        
                        
                        <?php $admin = 'admin'; ?>
                        <?php if ($dtu->username != $admin) :?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $dtu->nama ?></td>
                            <td><?= $dtu->email ?></td>
                            <td><?= $dtu->username ?></td>
                            <td><?= $dtu->alamat ?></td>
                            <td><?= $dtu->nomor_hp ?></td>
                            <td><?= $dtu->password ?></td>
                            <td>
                                <!-- <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus ?')" href="<?= base_url('admin/user/hapus/' . $dtu->id); ?>"><i class="fas fa-trash"></i></a> -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $dtu->id; ?>" type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
                            </td>
                        </tr>
                        <?php endif ; ?>
                               <!-- Modal Konfirmasi Booking -->
                               <div class="modal fade" id="exampleModal<?= $dtu->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Anda yakin ingin menghapus user <b><?=$dtu->nama?></b> ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <a href="<?= base_url('admin/user/hapus/' . $dtu->id); ?>" class="btn btn-danger">Ya, Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>                    
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
</script>