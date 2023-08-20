<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Testimonials</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Testimonial pelanggan kedai kopi kila</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-plus"></i> Tambah Testimoni
            </button>
            <?php echo $this->session->flashdata('message'); ?>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() . 'admin/testimonials/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                                    <textarea type="text" name="keterangan" class="form-control" required> </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Jenis Pekerjaan</label>
                                    <input type="text" name="jenis_pekerjaan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gambar Pelanggan</label>
                                    <input type="file" name="gambar" class="form-control" required>
                                </div>
                                <div class="modal-footer ms-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>

            
            <?php echo form_open('admin/testimonials'); ?>            
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
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Jenis Pekerjaan</th>
                        <th scope="col">Gambar</th>
                        <th colspan="3">AKSI</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php $no = 1; ?>
                    <?php foreach ($testimoni as $testimonial) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $testimonial->nama_pelanggan ?></td>
                            <td><?= $testimonial->keterangan ?></td>
                            <td><?= $testimonial->jenis_pekerjaan ?></td>
                            <td style="width: 120px;">
                                <img class="img-fluid" src="<?= base_url() . '/uploads_produk/Testimonial/' . $testimonial->gambar; ?>">
                            </td>
                            <td style="width: 60px;">
                                <?php echo anchor('admin/testimonials/edit/' . $testimonial->id_pelanggan, '<div class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></div>'); ?>
                            </td>
                            <td style="width: 60px;">
                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus ?')" href="<?= base_url('admin/Testimonials/hapus/' . $testimonial->id_pelanggan); ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

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
            td = tr[i].getElementsByTagName("td")[1];
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