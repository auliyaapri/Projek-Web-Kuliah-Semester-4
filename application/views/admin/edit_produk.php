<?php echo $this->session->flashdata('pesan'); ?>

<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit Produk</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edit Produk</li>
                </ol>
            </div>
        </main>
        <!-- ============= -->
        <div class="container-fluid px-4">
            <?php foreach ($produk as $prdk) { ?>
                <form action="<?= base_url() . 'admin/Data_Produk/update'; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="<?= $prdk->nama_produk; ?>">
                        <input type="hidden" name="id_produk" class="form-control" value="<?= $prdk->id_produk; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan Produk</label>
                        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"><?= $prdk->keterangan; ?> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori Produk</label>
                        <input type="text" name="kategori" class="form-control my-4" value="<?= $prdk->kategori; ?>" disabled="false" />
                        <select class="custom-select custom-select-lg mb-3 form-control" name="kategori">
                            <option selected><?= $prdk->kategori; ?> </option>
                            <?php if ($prdk->kategori == "Makanan") : ?>
                                <option value="Minuman">Minuman</option>
                                <option value="Cemilan">Cemilan</option>
                            <?php endif; ?>
                            <?php if ($prdk->kategori == "Minuman") : ?>
                                <option value="Makanan">Makanan</option>
                                <option value="Cemilan">Cemilan</option>
                            <?php endif; ?>
                            <?php if ($prdk->kategori == "Cemilan") : ?>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <!-- KATEGORI 2 -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Populer / Tidak</label>
                        <input type="text" name="nama_prdk" class="form-control my-4" value="<?= $prdk->kategori2; ?>" disabled="false" />
                        <select class="custom-select custom-select-lg mb-3 form-control" name="kategori2">
                            <option selected><?= $prdk->kategori2; ?> </option>
                            <?php if ($prdk->kategori2 == "Populer") : ?>
                                <option value="Biasa">Biasa</option>
                            <?php endif; ?>
                            <?php if ($prdk->kategori2 !== "Populer") : ?>
                                <option value="Populer">Populer</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                        <input type="text" name="harga" class="form-control" value="<?= $prdk->harga; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stock Barang</label>
                        <input type="text" name="stok" class="form-control" value="<?= $prdk->stok; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gambar Produk</label>
                        <div class="card my-3" style="width: 18rem;">
                            <?php
                            $path = "/uploads_produk/";
                            $nama_folder = $prdk->kategori;
                            ?>
                            <img src="<?= base_url() . $path, $nama_folder . '/' . $prdk->gambar; ?>" class="form-control card-img-top">
                            <div class="card-body">
                                <p class="card-text"><?= $prdk->gambar; ?></p>
                            </div>
                        </div>
                        
                        

                        <!-- <input type="file" name="gambar" class="form-control" /> -->
                        <input type="file"name="gambar" class="form-control" />

                        <script>
                            // Get a reference to our file input
                            const fileInput = document.querySelector('input[type="file"]');

                            // Create a new File object
                            
                            const myFile = new File(['Hello World!'], '<?= $prdk->gambar; ?>', {
                                type: 'text/plain',
                                lastModified: new Date(),
                            });

                            // Now let's create a DataTransfer to get a FileList
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(myFile);
                            fileInput.files = dataTransfer.files;
                        </script>
                    </div>
                    <div class="modal-footer ms-auto">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        <a href=" <?= base_url('admin/data_produk') ?>" class="btn btn-danger"><i class="fa-solid fa-reply"></i> Kembali</a>
                    </div>
                </form>
            <?php }; ?>








        </div>
        <?php $this->load->view('templatesAdmin/footer_content');?>



    </div>
</div>