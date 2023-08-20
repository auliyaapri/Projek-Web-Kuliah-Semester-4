<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Produk</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Produk</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-plus"></i> Tambah Produk
            </button>
            <?php echo $this->session->flashdata('message'); ?>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() . 'admin/Data_Produk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Keterangan Produk</label>
                                    <input type="text" name="keterangan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Kategori Produk</label>
                                    <select class="custom-select custom-select-lg mb-3 form-control" name="kategori" required>
                                        <option>Pilih Kategori</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Cemilan">Cemilan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Populer / Biasa</label>
                                    <select class="custom-select custom-select-lg mb-3 form-control" name="kategori2" required>
                                        <option value="Biasa">Pilih Kategori</option>
                                        <option value="Populer">Populer</option>
                                        <option value="Biasa">Biasa</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Harga Produk</label>
                                    <input type="text" name="harga" class="form-control required">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Stock Produk</label>
                                    <input type="text" name="stok" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gambar Produk</label>
                                    <input type="file" name="gambar" class="form-control" required>
                                </div>

                                <div class="modal-footer ms-auto">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <?php echo form_open('admin/data_produk'); ?>
            <label for="">Menampilkan berdasarkan <b>Nama Produk, Keterangan, Kategori, Harga.</b> :</label>
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
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Kategori Populer</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Gambar</th>
                        <th colspan="2">AKSI</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    $no = $start;
                    foreach ($produk as $brg) : ?>
                        <?php
                        $hargaa = $brg->harga;
                        ?>
                        <tr>
                            <th scope="row"><?= ++$no; ?></th>
                            <td><?= $brg->nama_produk; ?></td>
                            <td><?= $brg->keterangan; ?></td>
                            <td><?= $brg->kategori; ?></td>
                            <td><?= $brg->kategori2; ?></td>
                            <td><?= "Rp . " . number_format($hargaa); ?></td>
                            <td><?= $brg->stok; ?></td>
                            <td><?= $brg->gambar; ?></td>
                            <td>
                                <?php echo anchor('admin/data_produk/edit/' . $brg->id_produk, '<div class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></div>'); ?>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus ?')" href="<?= base_url('admin/data_produk/hapus/' . $brg->id_produk); ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (count($produk) > 19): ?>
                <?= $this->pagination->create_links(); ?>
            <?php endif; ?>
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
