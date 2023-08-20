<script>
    <?php if ($this->session->flashdata('success_tambahsurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Data Berhasil ditambahkan',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('belum_login_user')) { ?>
        Swal.fire({
            
            icon: 'error',
            title: 'Oops...',
            text: 'Anda Belum Login',
            confirmButtonText: 'OK'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login User Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_booking')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Booking Berhasil!',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_contact')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Pesan Berhasil Dikirm!',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
   
    <?php if ($this->session->flashdata('success_logout')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Logout Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_tambah_keranjang')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Keranjang Berhasil Ditambah',
            // icon: 'success',
            iconHtml: '<img src="<?=base_url('assets/img/cart-berhasil.jpg')?>">',
            
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_hapus_keranjang')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Keranjang Berhasil Dihapus!',
            // icon: 'success',
            iconHtml: '<img src="<?=base_url('assets/img/cart-kosong.jpg')?>">',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_hapus_pesan')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Pesan Berhasil dihapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_ubahsurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Data Berhasil diubah',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('belum_login')) { ?>
        Swal.fire({
            
            icon: 'error',
            title: 'Oops...',
            text: 'Anda Belum Login',
            confirmButtonText: 'OK'
        })
    <?php } ?>
</script>