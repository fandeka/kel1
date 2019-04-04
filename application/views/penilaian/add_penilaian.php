<!DOCTYPE html>
<html lang="en">
  <head>
   <?php  $this->load->view("common/common_head"); ?>
    <!-- vendor css -->

    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/font-awesome/css/font-awesome.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/Ionicons/css/ionicons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/css/select2.min.css"); ?>">
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
            <li class="breadcrumb-item active" aria-current="page">Hasil Tes</li>
          </ol>
          <h6 class="slim-pagetitle">Hasil Test</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Form Input Nilai Hasil Rikkes Casis</label>
          <p class="mg-b-20 mg-sm-b-40">Isikan sesuai dengan form</p>


            <?php if(isset($msg)): ?>

                  <div class="alert alert-outline alert-warning" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Perhatian !</strong>
                    <?= validation_errors();?>
                  </div><!-- alert -->

            <?php endif; ?>

            <?php if(isset($sukses)): ?>
                  <div class="alert alert-outline alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Sukses !</strong>
                    <?= validation_errors();?>
                  </div><!-- alert -->
           <?php endif; ?>



          <form action="#" method="post">

         
                <div class="row">                
                  <div class="col-sm-6 col-md-3">     
                  </div><!-- col-2 --> 
                </div><!-- row -->
         

              <!-- <br>
              <br>  -->

          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="form-control-label">No_Casis: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="no_casis" placeholder="">
                </div>
              </div>
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                
                    <label class="form-control-label"><i class="icon ion-calendar tx-16 lh-50 op-20"></i> Kelompok: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="j_kel">
               
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Tinggi Badan: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pangkat" placeholder="">
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Berat Badan: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nrp" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">IMT: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="korps" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Keteterangan IMT: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pangkat" placeholder="">
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Tensi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nrp" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Nadi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="korps" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Nadi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pangkat" placeholder="">
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Nadi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nrp" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Nadi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="korps" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Interne: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Interne: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Interne: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_EKG: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes EKG: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan EKG: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Spiro: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Spiro: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Spiro: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Kulit: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Kulit: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Kulit: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Rontgen: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Rontgen: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Rontgen: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Lab: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Lab: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Lab: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">U_Bedah: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Bedah: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Bedah: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">A_Atas: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Atas: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Atas: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">B_Bawah: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Bawah: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Bawah: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">D_THT: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes THT: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan THT: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">L_Mata: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Mata: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Mata: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">G_Gigi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Gigi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Gigi: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">J_Jiwa: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Stakes Jiwa: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Keterangan Jiwa: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="matra" placeholder="">
                </div>
              </div><!-- col-8 -->

              <!-- <div class="col-md-8">
                
              </div> col-8 -->
              <!-- <div class="col-md-4">
                
              </div> --><!-- col-8 --> 
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-primary bd-0" type="submit" name="submit">Simpan</button>
            </div><!-- form-group -->
          </div><!-- form-layout -->
          </form>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->


    <!-- MODAL ALERT MESSAGE -->
    <div id="modaldemo4" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
            <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->


    <?php  $this->load->view("common/common_footer"); ?>

    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/popper.js/js/popper.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/bootstrap/js/bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery.cookie/js/jquery.cookie.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/js/select2.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/js/select2.full.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/moment/js/moment.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery-ui/js/jquery-ui.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/slim.js"); ?>"></script>
    <script>
      $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });


        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2,
          dateFormat: 'dd-mm-yy'
        });

      });
    </script>
    <script type="text/javascript">
     function bacaGambar(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
       
            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }
       
            reader.readAsDataURL(input.files[0]);
         }
      }

      $("#preview_gambar").change(function(){
               bacaGambar(this);
      });

      $(document).ready(function(){

        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#label_foto').html(fileName);
            // alert('The file "' + fileName +  '" has been selected.');
        });

    });
    </script>
  </body>
</html>
