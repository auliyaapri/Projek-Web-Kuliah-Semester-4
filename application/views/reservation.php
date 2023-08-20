
        <!-- Reservation Start -->
        <div class="container  py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">    
                <div class="col-md-12 border border-dark rounded-3 d-flex align-items-center justify-content-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-dark mb-4">Book A Table Online</h1>
                        <form action="<?=base_url() . 'booking/tambah_aksi';?>" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Your Name" name="nama" required>                                        
                                        <label for="name">Nama Anda</label>
                                    </div>
                                </div>                                
                                <input type="hidden" class="form-control" name="username" value="<?= $this->session->userdata('username'); ?>">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Your Email" name="email" required>                                           
                                        <label for="email">Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control" placeholder="Nomor HP" name="nomor_hp" required/>                                        
                                        <label for="datetime">Nomor HP</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" required/>                                        
                                        <label for="datetime">Tanggal</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1" name="waktu">
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>                                           
                                        </select>
                                        <label for="select1">Waktu</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1" name="jumlah_orang">
                                            <option value="1">1 Orang</option>
                                            <option value="2">2 Orang</option>
                                            <option value="3">3 Orang</option>
                                            <option value="4">4 Orang</option>
                                            <option value="5">5 Orang</option>
                                            <option value="6">6 Orang</option>
                                            <option value="7">7 Orang</option>
                                            <option value="8">8 Orang</option>
                                            <option value="9">9 Orang</option>
                                            <option value="10">10 Orang</option>
                                            <option value="11">11 Orang</option>
                                            <option value="12">12 Orang</option>
                                            <option value="13">13 Orang</option>
                                            <option value="14">14 Orang</option>
                                            <option value="15">15 Orang</option>
                                            <option value="16 orang lebih">16 + Orang</option>
                                            
                                        </select>
                                        <label for="select1">Jumlah Orang</label>
                                    </div>
                                </div>
                     
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px" name="pesan" required></textarea>                                        

                                        <label for="message">Masukan Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->