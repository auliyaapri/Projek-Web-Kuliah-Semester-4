<?php echo $this->session->flashdata('pesan'); ?>

<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit Testimonial</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edit Testimonial</li>
                </ol>
            </div>
        </main>         
        <div class="container-fluid px-4">
            <!-- <?php foreach ($testimoni as $tstm) { ?> -->
            <form action="<?= base_url() . 'admin/Testimonials/update'; ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" value="<?= $tstm->nama_pelanggan; ?>">
                    <input type="hidden" name="id_pelanggan" class="form-control" value="<?= $tstm->id_pelanggan; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan Pelanggan</label>
                    <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"><?= $tstm->keterangan; ?> </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Pekerjaan</label>
                    <input type="text" name="jenis_pekerjaan" class="form-control" value="<?= $tstm->jenis_pekerjaan; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar Pelanggan</label>
                    <div class="card my-3" style="width: 18rem;">
                        <?php $path = "/uploads_produk/Testimonial";?> 
                        <img src="<?= base_url() . $path . '/' . $tstm->gambar; ?>" class="form-control card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?= $tstm->gambar; ?></p>
                        </div>
                    </div>                    
                    <input type="file" name="gambar" class="form-control" />

                    <script>
                        // Get a reference to our file input
                        const fileInput = document.querySelector('input[type="file"]');
                        // Create a new File object
                        const myFile = new File(['Hello World!'], '<?= $tstm->gambar; ?>', {
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
                    <a href=" <?= base_url('admin/testimonials') ?>" class="btn btn-danger"><i class="fa-solid fa-reply"></i> Kembali</a>
                </div>
            </form>
            <!-- <?php }; ?> -->
        </div>
        <?php $this->load->view('templatesAdmin/footer_content');?>
    </div>
</div>