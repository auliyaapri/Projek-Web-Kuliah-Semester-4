<script>
    <?php if ($this->session->flashdata('success_tambahsurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Data Berhasil ditambahkan',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login Admin Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_login_user')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_daftar')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Anda Berhasil Daftar',
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
    <?php if ($this->session->flashdata('success_hapussurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Data Berhasil dihapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_hapuspesan')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Surat Berhasil dihapus',
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
            text: 'Anda Belum Login Sebagai Admin',
            confirmButtonText: 'OK'
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
</script>