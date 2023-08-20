<div class="container mt-5">
    <h1>History Pembelian <?= $this->session->userdata('username') ?></h1>
    <div class="row">
        <div class="col">
            <!-- <table class="table table-bordered mt-3"> -->
            <h5 class="mt-3">Pembelian</h5>
            <table class="table table-bordered table-hover mt-3">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">No</th>
                        <th style="width: 600px;">Tanggal Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = NULL;
                    $no2 = $no + 0 + 1;
                    if (is_array($invoice) || is_object($invoice)) { ?>
                        <?php foreach ($invoice as $inv) { ?>
                            <tr>
                                <td class="text-center"><?= $no2++; ?> </td>
                                <td><?= date("M-d-Y", strtotime($inv->tanggal_pesan));  ?> </td>
                                <td><?php echo anchor('user/detail/' . $inv->id_invoice, '<div class="btn btn-md btn-warning text-capitalize rounded-3">Detail</div>') ?></td>
                            </tr>
                        <?php }; ?>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="mt-1">Booking</h5>
            <table class="table table-bordered table-hover mt-3">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">No</th>
                        <th style="width: 600px;">Tanggal Booking</th>                        
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = NULL;
                    $no2 = $no + 0 + 1;
                    if (is_array($invoice_gabung) || is_object($invoice_gabung)) { ?>
                        <?php foreach ($invoice_gabung as $invg) { ?>
                            <tr>
                                <td class="text-center"><?= $no2++; ?> </td>
                                <td><?= date("M-d-Y", strtotime($invg->tanggal));  ?> </td>                                
                                <td>
                                    <?php if ($invg->status == 'konfirmasi') : ?>
                                        <button class="btn btn-success text-capitalize" data-bs-toggle="modal" data-bs-target="#exampleModal_konfirmasi">Sudah Dikonfirmasi</button>
                                    <?php elseif ($invg->status == 'batal') : ?>
                                        <button type="button" class="btn btn-danger text-capitalize text-white rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal_batal">Tidak Dikonfirmasi</button>
                                    <?php else : ?>
                                        <button type="button" class="btn border-danger text-capitalize text-danger rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Menunggu Konfirmasi</button>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo anchor('user/detail_booking/' . $invg->id, '<div class="btn btn-md btn-warning text-capitalize rounded-3">Detail</div>') ?>
                                </td>
                            </tr>
                        <?php }; ?>
                    <?php }; ?>
                </tbody>

            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">            
            <a href="javascript:history.back()" class="btn btn-danger text-capitalize float-end rounded-3"><i class="fas fa-reply"></i> Kembali</a>
        </div>
    </div>

    <div class="row d-flex justify-content-end">
        <!-- Modal Gagak Konfirmasi-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Harap bersabar menunggu untuk konfirmasi dari admin. Jika admin tidak mengonfirmasi, maka status Anda akan menjadi tidak tersedia. Jangan lupa untuk sering melakukan <b>Refresh atau F5.</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-capitalize" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Berhasil Konfirmasi -->
        <div class="modal fade" id="exampleModal_konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Status pemesanan booking sudah di konfirmasi oleh <b>Admin</b>. Booking Anda Berhasil!. -->
                        Kami dengan senang hati memberitahukan bahwa pemesanan booking Anda telah dikonfirmasi oleh Admin kami. Kami ingin memberitahu Anda bahwa pemesanan tersebut telah berhasil! Semoga ini menjadi kabar baik bagi Anda dan kami berharap Anda menikmati pengalaman yang luar biasa di tempat kami. Jika Anda memiliki pertanyaan lebih lanjut atau membutuhkan bantuan tambahan, jangan ragu untuk menghubungi kami. Terima kasih atas kepercayaan Anda dan selamat menikmati waktu yang menyenangkan!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-capitalize" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Berhasil Konfirmasi -->
        <div class="modal fade" id="exampleModal_batal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Maaf sebelumnya, kami dari Admin Kopi Kila menyampaikan bahwa kami tidak dapat menerima permintaan pemesanan tempat Anda saat ini. Kami ingin memberitahukan bahwa keputusan ini diambil karena berbagai alasan yang tidak dapat dihindari. Mohon maaf atas ketidaknyamanannya.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-capitalize" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>







<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url() ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?= base_url() ?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?= base_url() ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url() ?>assets/js2/sweetalert2.all.min.js"></script>
<!-- Template Javascript -->
<script src="<?= base_url() ?>assets/js/main.js"></script>