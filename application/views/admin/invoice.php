<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"><?= $title ?></h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Invoice dari pelanggan Kopi Kila</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <br>            
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div clas="card-header">
                            <h3 class="card-title">Data Invoice Harian</h3>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('admin/Invoice/inv_harian') ?>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <select name="tanggal" class="form-control">
                                            <?php
                                            $mulai = 1;
                                            for ($i = $mulai; $i < $mulai + 31; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select name="bulan" class="form-control">
                                            <?php
                                            $mulai = 1;
                                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <?php
                                            $mulai = date('Y');
                                            for ($i = $mulai; $i < $mulai + 5; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block">Cetak Invoice</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div clas="card-header">
                            <h3 class="card-title">Data Invoice Bulanan</h1>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('admin/Invoice/inv_bulanan') ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select name="bulan" class="form-control">
                                            <?php
                                            $mulai = 1;
                                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <?php
                                            $mulai = date('Y');
                                            for ($i = $mulai; $i < $mulai + 5; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block">Cetak Invoice</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div clas="card-header">
                            <h3 class="card-title">Data Invoice Tahunan</h1>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('admin/Invoice/inv_tahunan') ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <?php
                                            $mulai = date('Y');
                                            for ($i = $mulai; $i < $mulai + 5; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block">Cetak Invoice</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->load->view('templatesAdmin/footer_content'); ?>
    </div>
</div>