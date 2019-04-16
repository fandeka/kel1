<!DOCTYPE html>
<html lang="en">
<head>
    <?php  $this->load->view("common/common_head"); ?>

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/font-awesome/css/font-awesome.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/Ionicons/css/ionicons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/datatables/css/jquery.dataTables.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/css/select2.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery-toggles/css/toggles-full.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery.steps/css/jquery.steps.css"); ?>">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/css/slim.css"); ?>">

    <style type="text/css">
      .wizard > .content > .body {
          float: none;
          position: static;
          width: 661px;
          height: 1150px;
          padding: 40px;
      }
    </style>

</head>
  <body>
    <?php  $this->load->view("common/common_header"); ?>

    <?php  $this->load->view("common/common_navbar"); ?>

    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Tes Rikkes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Penilaian</li>
          </ol>
          <h6 class="slim-pagetitle">Penilaian</h6>
        </div><!-- slim-pageheader -->

          <div class="section-wrapper mg-t-20">
          <label class="section-title">Penilaian</label>
          <p class="mg-b-20 mg-sm-b-40">A basic form wizard with form validation using Parsley js form validation plugin.</p>

          <form>

                <div class="row">
                  <div class="col-sm-6 col-md-2">
                    <?php
                    $img = base_url("uploads/default.png");
                    if($casis_rinci->foto != ""){
                    $img = $this->config->item('base_url').'uploads/foto_casis/'.$casis_rinci->foto; 
                    }  
                    ?>
                    <img src="<?php echo $img; ?>" class="img-circle" style="height: 100px; width: 100px;">
                    <!-- <img src="<?php echo base_url($this->config->item("theme_admin")."/img/img0.jpg"); ?>" class="img-fluid" alt="" id="foto" > -->
                  </div><!-- col -->                  
                </div><!-- row -->
         

              <br>
              <br>
          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="form-control-label">Nama:</label>
                  <input class="form-control" type="text" name="nama" placeholder="" value="<?php echo $casis_rinci->nama;?>" disabled="true">
                </div>
              </div>
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1 mg-md-t-0">
                  <label class="form-control-label">No Casis:</label>
                  <input id="no_casis" class="form-control" type="text" name="no_casis" id="no_casis" placeholder="" value="<?php echo $casis_rinci->no_casis;?>" disabled="true">
                </div>
              </div><!-- col-8 -->
    
            </div><!-- row -->
          </div><!-- form-layout -->
          </form>

          <div class="section-wrapper mg-t-20">
            <label class="section-title">Vertical Orientation Wizard</label>
            <p class="mg-b-20 mg-sm-b-40">A basic content wizard with vertical orientation.</p>

            <div id="wizard3">
              <h3>Tinggi & Berat</h3>
              <section>
                <p>Try the keyboard navigation by clicking arrow left or right!</p>
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">Tinggi Badan: <span class="tx-danger">*</span></label>
                    <input id="tinggi" class="form-control" name="tb" placeholder="cm" type="text" required>
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">Berat Badan: <span class="tx-danger">*</span></label>
                    <input id="berat" class="form-control" name="bb" placeholder="kg" type="text" required> 
                  </div>
                  <br>
                  <div class="form-group wd-xs-300">
                    <button class="btn btn-primary" type="submit" name="cek_imt" id="cek_imt">Cek IMT</button>
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">IMT:</label>
                    <input id="imt" class="form-control" name="imt" placeholder="IMT" type="text" disabled="true">
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">U IMT:</label>
                    <input id="u_imt" class="form-control" name="u_imt" placeholder="U_IMT" type="text" disabled="true">
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">Keterangan IMT:</label>
                    <textarea rows="3" class="form-control" placeholder="" name="ket_imt" id="ket_imt"></textarea>
                  </div><!-- form-group -->
                  <button class="btn btn-primary bd-0" type="submit" name="submit_imt" id="submit_imt">Simpan</button>
              </section>
              <h3>Tensi</h3>
              <section>
                <p>Wonderful transition effects.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Tensi: <span class="tx-danger">*</span></label>
                  <input id="tensi" class="form-control" name="tensi" placeholder="Masukkan Tensi" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Nadi: <span class="tx-danger">*</span></label>
                  <input id="nadi" class="form-control" name="nadi" placeholder="Masukkan Nadi" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Nadi: <span class="tx-danger">*</span></label>
                  <input id="u_nadi" class="form-control" name="u_nadi" placeholder="Masukkan Umum Nadi" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Nadi: <span class="tx-danger">*</span></label>
                  <input id="nb_nadi" class="form-control" name="nb_nadi" placeholder="Masukkan Stakes Nadi" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Nadi:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_nadi" id="ket_nadi"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_nadi" id="submit_nadi" >Simpan</button>
           
              </section>
              <h3>Interne</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Interne: <span class="tx-danger">*</span></label>
                  <input id="u_interne" class="form-control" name="u_interne" placeholder="Masukkan Umum Interne" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Interne: <span class="tx-danger">*</span></label>
                  <input id="nb_interne" class="form-control" name="nb_interne" placeholder="Masukkan stakes Interne" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Interne:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_interne" id="ket_interne"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_interne" id="submit_interne">Simpan</button>

              </section>
              <h3>EKG</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U EKG: <span class="tx-danger">*</span></label>
                  <input id="u_ekg" class="form-control" name="u_ekg" placeholder="Masukkan Umum EKG" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes EKG: <span class="tx-danger">*</span></label>
                  <input id="nb_ekg" class="form-control" name="nb_ekg" placeholder="Masukkan stakes EKG" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan EKG:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_ekg" id="ket_ekg"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_ekg" id="submit_ekg">Simpan</button>
              </section>
              <h3>Ergo</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Ergo: <span class="tx-danger">*</span></label>
                  <input id="u_ergo" class="form-control" name="u_ergo" placeholder="Masukkan Umum Ergo" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Ergo: <span class="tx-danger">*</span></label>
                  <input id="nb_ergo" class="form-control" name="nb_ergo" placeholder="Masukkan Stakes Ergo" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Ergo:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_ergo" id="ket_ergo"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_ergo" id="submit_ergo">Simpan</button>
              </section>
              <h3>Spiro</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Spiro: <span class="tx-danger">*</span></label>
                  <input id="u_spiro" class="form-control" name="u_spiro" placeholder="Masukkan Umum Spiro" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Spiro: <span class="tx-danger">*</span></label>
                  <input id="nb_spiro" class="form-control" name="nb_spiro" placeholder="Masukkan Umum Spiro" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Spiro:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_spiro" id="ket_spiro"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_spiro" id="submit_spiro">Simpan</button>
              </section>
              <h3>Kulit</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Kulit: <span class="tx-danger">*</span></label>
                  <input id="u_kulit" class="form-control" name="u_kulit" placeholder="Masukkan Umum Kulit" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Kulit: <span class="tx-danger">*</span></label>
                  <input id="nb_kulit" class="form-control" name="nb_kulit" placeholder="Masukkan Stakes Kulit" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Kulit:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_kulit" id="ket_kulit"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_kulit" id="submit_kulit">Simpan</button>
              </section>
              <h3>Rontgen</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Rontgen: <span class="tx-danger">*</span></label>
                  <input id="u_rontgen" class="form-control" name="u_rontgen" placeholder="Masukkan Umum Rontgen" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Rontgen: <span class="tx-danger">*</span></label>
                  <input id="nb_rontgen" class="form-control" name="nb_rontgen" placeholder="Masukkan Stakes Rontgen" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Rontgen:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_rontgen" id="ket_rontgen"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_rontgen" id="submit_rontgen">Simpan</button>
              </section> 
              <h3>Laboratorium</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U LAB: <span class="tx-danger">*</span></label>
                  <input id="u_lab" class="form-control" name="u_lab" placeholder="Masukkan Umum LAB" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes LAB: <span class="tx-danger">*</span></label>
                  <input id="nb_lab" class="form-control" name="nb_lab" placeholder="Masukkan Stakes LAB" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan LAB:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_lab" id="ket_lab"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_lab" id="submit_lab">Simpan</button>
              </section>
              <h3>Bedah</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U Bedah: <span class="tx-danger">*</span></label>
                  <input id="u_bedah" class="form-control" name="u_bedah" placeholder="Masukkan Umum Bedah" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Bedah: <span class="tx-danger">*</span></label>
                  <input id="nb_bedah" class="form-control" name="nb_bedah" placeholder="Masukkan Stakes Bedah" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Bedah:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_bedah" id="ket_bedah"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_bedah" id="submit_bedah">Simpan</button>
              </section>
              <h3>USG</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">U USG: <span class="tx-danger">*</span></label>
                  <input id="u_usg" class="form-control" name="u_usg" placeholder="Masukkan Umum USG" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes USG: <span class="tx-danger">*</span></label>
                  <input id="nb_usg" class="form-control" name="nb_usg" placeholder="Masukkan Stakes USG" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan USG:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_usg" id="ket_usg"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_usg" id="submit_usg">Simpan</button>
              </section>
               <h3>Atas</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">A Atas: <span class="tx-danger">*</span></label>
                  <input id="a_atas" class="form-control" name="a_atas" placeholder="Masukkan Atas" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Atas: <span class="tx-danger">*</span></label>
                  <input id="nb_atas" class="form-control" name="nb_atas" placeholder="Masukkan Stakes Atas" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Atas:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_atas" id="ket_atas"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit_atas" name="submit_atas" id="submit_atas">Simpan</button>
              </section>
              <h3>Bawah</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">B Bawah: <span class="tx-danger">*</span></label>
                  <input id="b_bawah" class="form-control" name="b_bawah" placeholder="Masukkan Bawah" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Bawah: <span class="tx-danger">*</span></label>
                  <input id="nb_bawah" class="form-control" name="nb_bawah" placeholder="Masukkan Stakes Bawah" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Bawah:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_bawah" id="ket_bawah"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_bawah" id="submit_bawah">Simpan</button>
              </section>
              <h3>THT</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">D THT: <span class="tx-danger">*</span></label>
                  <input id="t_tht" class="form-control" name="t_tht" placeholder="Masukkan THT" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes THT: <span class="tx-danger">*</span></label>
                  <input id="nb_tht" class="form-control" name="nb_tht" placeholder="Masukkan Stakes THT" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan THT:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_tht" id="ket_tht"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_tht" id="submit_tht">Simpan</button>
              </section>
              <h3>Mata</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">L Mata: <span class="tx-danger">*</span></label>
                  <input id="l_mata" class="form-control" name="l_mata" placeholder="Masukkan Mata" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Mata: <span class="tx-danger">*</span></label>
                  <input id="nb_mata" class="form-control" name="nb_mata" placeholder="Masukkan Stakes Mata" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Mata:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_mata" id="ket_mata"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_mata" id="submit_mata">Simpan</button>
              </section>
              <h3>Gigi</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">G Gigi: <span class="tx-danger">*</span></label>
                  <input id="g_gigi" class="form-control" name="g_gigi" placeholder="Masukkan Gigi" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Gigi: <span class="tx-danger">*</span></label>
                  <input id="nb_gigi" class="form-control" name="nb_gigi" placeholder="Masukkan Stakes Mata" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Gigi:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_gigi" id="ket_gigi"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_gigi" id="submit_gigi">Simpan</button>
              </section>
              <h3>Jiwa</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">J Jiwa: <span class="tx-danger">*</span></label>
                  <input id="j_jiwa" class="form-control" name="j_jiwa" placeholder="Masukkan Jiwa" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes Jiwa: <span class="tx-danger">*</span></label>
                  <input id="nb_jiwa" class="form-control" name="nb_jiwa" placeholder="Masukkan Stakes Jiwa" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan Jiwai:</label>
                  <textarea rows="3" class="form-control" placeholder="" name="ket_jiwa" id="ket_jiwa"></textarea>
                </div><!-- form-group -->
                <button class="btn btn-primary bd-0" type="submit" name="submit_jiwa" id="submit_jiwa">Simpan</button>
              </section>



            </div>
          </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <?php  $this->load->view("common/common_footer"); ?>


    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/popper.js/js/popper.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/bootstrap/js/bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery.cookie/js/jquery.cookie.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/datatables/js/jquery.dataTables.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/datatables-responsive/js/dataTables.responsive.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/js/select2.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery-toggles/js/toggles.min.js"); ?>"></script>

    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery.steps/js/jquery.steps.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/parsleyjs/js/parsley.js"); ?>"></script>

    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/slim.js"); ?>"></script>


    <script>
      $(document).ready(function(){
        'use strict';

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });

      });



    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".actions a[href$='#finish']").click(function(event) {

                var base = '<?=base_url()?>';

                var id =  $('#id').val();
                var id = 4;
                $.ajax({
                    type: "POST",
                    url: base + "penilaian/hitung_nilai",
                    data: { "id": id },
                    dataType: "html",
                    cache: false,
                    success: function() {
                        console.log(id);
                    }
                });
                alert('Penilaian Sudah dilakukan');
                event.preventDefault();
            });
        });
        </script>


      <script type="text/javascript">
        $(document).ready(function() {
            $("#cek_imt").click(function(event) {

                var base = '<?=base_url()?>';

                var tinggi =  $('#tinggi').val();
                var berat =  $('#berat').val();
   
                $.ajax({
                    type: "POST",
                    url: base + "penilaian/cek_imt",
                    data:{ "tinggi": tinggi,
                            "berat": berat

                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {
                       var obj=$.parseJSON(data);
                        $("#imt").val(obj.imt);
                        $("#u_imt").val(obj.status);
                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>


        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_imt").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var tinggi =  $('#tinggi').val();
                var berat =  $('#berat').val();
                var imt =  $('#imt').val();
                var u_imt =  $('#u_imt').val();
                var ket_imt =  $('#ket_imt').val();
   
                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_imt",
                    data:{  "no_casis": no_casis,
                            "tinggi": tinggi,
                            "berat": berat,
                            "imt" : imt,
                            "u_imt" : u_imt,
                            "ket_imt" :ket_imt
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_nadi").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var tensi =  $('#tensi').val();
                var nadi =  $('#nadi').val();
                var nb_nadi =  $('#nb_nadi').val();
                var u_nadi =  $('#u_nadi').val();
                var ket_nadi =  $('#ket_nadi').val();
   
                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_nadi",
                    data:{  "no_casis": no_casis,
                            "tensi": tensi,
                            "nadi": nadi,
                            "nb_nadi" : nb_nadi,
                            "u_nadi" : u_nadi,
                            "ket_nadi" :ket_nadi
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
               event.preventDefault();
            });
        });
        </script>
        </script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_interne").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_interne =  $('#nb_interne').val();
                var u_interne =  $('#u_interne').val();
                var ket_interne =  $('#ket_interne').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_interne",
                    data:{  "no_casis": no_casis,
                            "nb_interne": nb_interne,
                            "u_interne": u_interne,
                            "ket_interne" : ket_interne  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
               event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_ekg").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_ekg =  $('#nb_ekg').val();
                var u_ekg =  $('#u_ekg').val();
                var ket_ekg =  $('#ket_interne').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_ekg",
                    data:{  "no_casis": no_casis,
                            "nb_ekg": nb_ekg,
                            "u_ekg": u_ekg,
                            "ket_ekg" : ket_ekg  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_ergo").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_ergo =  $('#nb_ergo').val();
                var u_ergo =  $('#u_ergo').val();
                var ket_ergo =  $('#ket_ergo').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_ergo",
                    data:{  "no_casis": no_casis,
                            "nb_ergo": nb_ergo,
                            "u_ergo": u_ergo,
                            "ket_ergo" : ket_ergo  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_spiro").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_spiro =  $('#nb_spiro').val();
                var u_spiro =  $('#u_spiro').val();
                var ket_spiro =  $('#ket_spiro').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_spiro",
                    data:{  "no_casis": no_casis,
                            "nb_spiro": nb_spiro,
                            "u_spiro": u_spiro,
                            "ket_spiro" : ket_spiro  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_kulit").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_kulit =  $('#nb_kulit').val();
                var u_kulit =  $('#u_kulit').val();
                var ket_kulit =  $('#ket_kulit').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_kulit",
                    data:{  "no_casis": no_casis,
                            "nb_kulit": nb_kulit,
                            "u_kulit": u_kulit,
                            "ket_kulit" : ket_kulit  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_rontgen").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_rontgen =  $('#nb_rontgen').val();
                var u_rontgen =  $('#u_rontgen').val();
                var ket_rontgen =  $('#ket_rontgen').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_rontgen",
                    data:{  "no_casis": no_casis,
                            "nb_rontgen": nb_rontgen,
                            "u_rontgen": u_rontgen,
                            "ket_rontgen" : ket_rontgen  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_lab").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_lab =  $('#nb_lab').val();
                var u_lab =  $('#u_lab').val();
                var ket_lab =  $('#ket_lab').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_lab",
                    data:{  "no_casis": no_casis,
                            "nb_lab": nb_lab,
                            "u_lab": u_lab,
                            "ket_lab" : ket_lab  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_bedah").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_bedah =  $('#nb_bedah').val();
                var u_bedah =  $('#u_bedah').val();
                var ket_bedah =  $('#ket_bedah').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_bedah",
                    data:{  "no_casis": no_casis,
                            "nb_bedah": nb_bedah,
                            "u_bedah": u_bedah,
                            "ket_bedah" : ket_bedah  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                event.preventDefault();
            });
        });
        </script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_usg").click(function(event) {

                var base   = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_usg =  $('#nb_usg').val();
                var u_usg =  $('#u_usg').val();
                var ket_usg =  $('#ket_usg').val();



                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_usg",
                    data:{  "no_casis": no_casis,
                            "nb_usg": nb_usg,
                            "u_usg": u_usg,
                            "ket_usg" : ket_usg  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                event.preventDefault();
            });
        });
        </script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_atas").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_atas =  $('#nb_atas').val();
                var a_atas =  $('#a_atas').val();
                var ket_atas =  $('#ket_atas').val();




                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_atas",
                    data:{  "no_casis": no_casis,
                            "nb_atas": nb_atas,
                            "a_atas": a_atas,
                            "ket_atas" : ket_atas  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_bawah").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_bawah =  $('#nb_bawah').val();
                var b_bawah =  $('#b_bawah').val();
                var ket_bawah =  $('#ket_bawah').val();

                console.log(base);
                console.log(no_casis);
                console.log(nb_bawah);
                console.log(b_bawah);
                console.log(ket_bawah);

                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_bawah",
                    data:{  "no_casis": no_casis,
                            "nb_bawah": nb_bawah,
                            "b_bawah": b_bawah,
                            "ket_bawah" : ket_bawah  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_tht").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_tht =  $('#nb_tht').val();
                var t_tht =  $('#t_tht').val();
                var ket_tht =  $('#ket_tht').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_tht",
                    data:{  "no_casis": no_casis,
                            "nb_tht": nb_tht,
                            "t_tht": t_tht,
                            "ket_tht" : ket_tht  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_mata").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_mata =  $('#nb_mata').val();
                var l_mata =  $('#l_mata').val();
                var ket_mata =  $('#ket_mata').val();

                console.log(base);
                console.log(no_casis);
                console.log(nb_mata);
                console.log(l_mata);
                console.log(ket_mata);


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_mata",
                    data:{  "no_casis": no_casis,
                            "nb_mata": nb_mata,
                            "l_mata": l_mata,
                            "ket_mata" : ket_mata  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_gigi").click(function(event) {

                var base = '<?=base_url()?>';
                var no_casis = $('#no_casis').val();
                var nb_gigi =  $('#nb_gigi').val();
                var g_gigi =  $('#g_gigi').val();
                var ket_gigi =  $('#ket_gigi').val();


                $.ajax({
                    type: "POST",
                    url: base + "penilaian/simpan_gigi",
                    data:{  "no_casis": no_casis,
                            "nb_gigi": nb_gigi,
                            "g_gigi": g_gigi,
                            "ket_gigi" : ket_gigi  
                         },
                    dataType: "html",
                    cache: false,
                    success: function(data) {

                      console.log(data);
                      alert('Berhasil Tersimpan');

                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    }
                });
                // alert('Penilaian Sudah dilakukan');
                 event.preventDefault();
            });
        });
        </script>
        <script type="text/javascript">
                $(document).ready(function() {
                    $("#submit_jiwa").click(function(event) {

                        var base = '<?=base_url()?>';
                        var no_casis = $('#no_casis').val();
                        var nb_jiwa =  $('#nb_jiwa').val();
                        var j_jiwa =  $('#j_jiwa').val();
                        var ket_jiwa =  $('#ket_jiwa').val();

                        console.log(base);
                        console.log(no_casis);
                        console.log(nb_jiwa);
                        console.log(j_jiwa);
                        console.log(ket_jiwa);

                        $.ajax({
                            type: "POST",
                            url: base + "penilaian/simpan_jiwa",
                            data:{  "no_casis": no_casis,
                                    "nb_jiwa": nb_jiwa,
                                    "j_jiwa": j_jiwa,
                                    "ket_jiwa" : ket_jiwa  
                                 },
                            dataType: "html",
                            cache: false,
                            success: function(data) {

                              console.log(data);
                              alert('Berhasil Tersimpan');

                            },
                            error: function (data) {
                                console.log('An error occurred.');
                                console.log(data);
                            }
                        });
                        // alert('Penilaian Sudah dilakukan');
                        event.preventDefault();
                    });
                });
        </script>
  </body>
</html>
