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
                  <input id="no_casis" class="form-control" type="text" name="no_casis" placeholder="" value="<?php echo $casis_rinci->no_casis;?>" disabled="true">
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
                    <button class="btn btn-primary">Cek IMT</button>
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">IMT:</label>
                    <input id="imt" class="form-control" name="imt" placeholder="IMT" type="text" disabled="true">
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">U IMT:</label>
                    <input id="imt" class="form-control" name="imt" placeholder="IMT" type="text" disabled="true">
                  </div><!-- form-group -->
                  <div class="form-group wd-xs-300">
                    <label class="form-control-label">Keterangan IMT:</label>
                    <textarea rows="3" class="form-control" placeholder="" name="ket_imt"></textarea>
                  </div><!-- form-group -->
                  <button class="btn btn-primary bd-0" type="submit" name="submit">Simpan</button>
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
                  <textarea rows="3" class="form-control" placeholder="" name="ket_nadi"></textarea>
                </div><!-- form-group -->
              
                <button class="btn btn-primary bd-0" type="submit" name="submit">Simpan</button>
           
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
                  <label class="form-control-label">Keterangan Interne: <span class="tx-danger">*</span></label>
                  <input id="ket_interne" class="form-control" name="ket_interne" placeholder="Masukkan Keterangan Interne" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan EKG: <span class="tx-danger">*</span></label>
                  <input id="ket_ekg" class="form-control" name="ket_kg" placeholder="Masukkan Keterangan EKG" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Ergo: <span class="tx-danger">*</span></label>
                  <input id="ket_ergo" class="form-control" name="ket_ergo" placeholder="Masukkan Keterangan Ergo" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Spiro: <span class="tx-danger">*</span></label>
                  <input id="ket_spiro" class="form-control" name="ket_spiro" placeholder="Masukkan Keterangan Spiro" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Kulit: <span class="tx-danger">*</span></label>
                  <input id="ket_kulit" class="form-control" name="ket_kulit" placeholder="Masukkan Keterangan Kulit" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Rontgen: <span class="tx-danger">*</span></label>
                  <input id="ket_rontgen" class="form-control" name="ket_rontgen" placeholder="Masukkan Keterangan Rontgen" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan LAB: <span class="tx-danger">*</span></label>
                  <input id="ket_lab" class="form-control" name="ket_lab" placeholder="Masukkan Keterangan LAB" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Bedah: <span class="tx-danger">*</span></label>
                  <input id="ket_bedah" class="form-control" name="ket_bedah" placeholder="Masukkan Keterangan Bedah" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Atas: <span class="tx-danger">*</span></label>
                  <input id="ket_atas" class="form-control" name="ket_atas" placeholder="Masukkan Keterangan Atas" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Bawah: <span class="tx-danger">*</span></label>
                  <input id="ket_bawah" class="form-control" name="ket_bawah" placeholder="Masukkan Keterangan Bawah" type="text" required>
                </div><!-- form-group -->
              </section>
              <h3>THT</h3>
              <section>
                <p>The next and previous buttons help you to navigate through your content.</p>
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">T THT: <span class="tx-danger">*</span></label>
                  <input id="t_tht" class="form-control" name="t_tht" placeholder="Masukkan THT" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Stakes THT: <span class="tx-danger">*</span></label>
                  <input id="nb_tht" class="form-control" name="nb_tht" placeholder="Masukkan Stakes THT" type="text" required>
                </div><!-- form-group -->
                <div class="form-group wd-xs-300">
                  <label class="form-control-label">Keterangan THT: <span class="tx-danger">*</span></label>
                  <input id="ket_tht" class="form-control" name="ket_tht" placeholder="Masukkan Keterangan THT" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Mata: <span class="tx-danger">*</span></label>
                  <input id="ket_mata" class="form-control" name="ket_mata" placeholder="Masukkan Keterangan THT" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Gigi: <span class="tx-danger">*</span></label>
                  <input id="ket_gigi" class="form-control" name="ket_gigi" placeholder="Masukkan Keterangan Gigi" type="text" required>
                </div><!-- form-group -->
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
                  <label class="form-control-label">Keterangan Jiwa: <span class="tx-danger">*</span></label>
                  <input id="ket_jiwa" class="form-control" name="ket_jiwa" placeholder="Masukkan Keterangan Jiwa" type="text" required>
                </div><!-- form-group -->
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

  </body>
</html>
