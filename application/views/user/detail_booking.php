<div class="container mt-5">
    <div class="row">
        <div class="btn btn-success">
            No. Invoice : INV/<?= date('d/m/Y', strtotime($booking_oke->tanggal)); ?>/ BOOKING
        </div>
        <table class="table table-bordered table-hover table-striped mt-3">
            <thead>
                <tr>
                    <th>Nama Username</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>Waktu</th>
                    <th>Jumlah Orang</th>
                    <th>Pesan</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($booking as $bkg) {                    
                ?>
                    <tr>
                        <td> <?php echo $bkg->username; ?> </td>
                        <td> <?php echo $bkg->nama; ?> </td>
                        <td> <?php echo $bkg->email; ?> </td>
                        <td> <?php echo $bkg->waktu; ?> </td>
                        <td> <?php echo $bkg->jumlah_orang; ?> </td>
                        <td> <?php echo $bkg->pesan; ?> </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            <a href="javascript:history.back()" class="btn btn-danger text-capitalize float-end rounded-3"><i class="fas fa-reply"></i> Kembali</a>

        </div>
    </div>
</div>