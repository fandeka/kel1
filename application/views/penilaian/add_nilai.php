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
                    <img src="<?php echo base_url($this->config->item("theme_admin")."/img/img0.jpg"); ?>" class="img-fluid" alt="" id="foto" >
                  </div><!-- col -->                  
                </div><!-- row -->
         

              <br>
              <br>

          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="form-control-label">Nama:</label>
                  <input class="form-control" type="text" name="nama" placeholder="" required>
                </div>
              </div>
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1 mg-md-t-0">
                  <label class="form-control-label">No Casis:</label>
                  <input id="no_casis" class="form-control" type="text" name="no_casis" placeholder="" required>
                </div>
              </div><!-- col-8 -->
    
            </div><!-- row -->
          </div><!-- form-layout -->
          </form>

              <br>
              <br>

          <div id="wizard2">
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
                <label class="form-control-label">Keterangan Nadi:</label>
                <textarea rows="3" class="form-control" placeholder="" name="ket_nadi"></textarea>
              </div><!-- form-group -->
            
              <button class="btn btn-primary bd-0" type="submit" name="submit">Simpan</button>
         
            </section>
            <h3>Interne</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Interne: <span class="tx-danger">*</span></label>
                <input id="interne" class="form-control" name="interne" placeholder="Masukkan Interne" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Penilaian 4</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Interne: <span class="tx-danger">*</span></label>
                <input id="interne" class="form-control" name="interne" placeholder="Masukkan Interne" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Penilaian 5</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Interne: <span class="tx-danger">*</span></label>
                <input id="interne" class="form-control" name="interne" placeholder="Masukkan Interne" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Penilaian 6</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Interne: <span class="tx-danger">*</span></label>
                <input id="interne" class="form-control" name="interne" placeholder="Masukkan Interne" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Penilaian 7</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Interne: <span class="tx-danger">*</span></label>
                <input id="interne" class="form-control" name="interne" placeholder="Masukkan Interne" type="text" required>
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

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) { return true;
                // var fname = $('#tinggi').parsley();
                // var lname = $('#berat').parsley();

                // if(fname.isValid() && lname.isValid()) {
                //   return true;
                // } else {
                //   fname.validate();
                //   lname.validate();
                // }
              }

              // Step 2 form validation
              if(currentIndex === 1) { return true;
                // var email = $('#email').parsley();
                // if(email.isValid()) {
                //   return true;
                // } else { email.validate(); }
              }
              if(currentIndex === 2) { return true; 

              }
              if(currentIndex === 3) { return true; 

              }
              if(currentIndex === 4) { return true; 

              }
              if(currentIndex === 5) { return true; 

              }
              if(currentIndex === 6) { return true; 

              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
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
