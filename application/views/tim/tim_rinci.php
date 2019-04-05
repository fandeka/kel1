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
            <li class="breadcrumb-item"><a href="#">Tim Rikkes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rincian Tim Rikkes</li>
          </ol>
          <h6 class="slim-pagetitle">Rincian Tim Rikkes</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bordered Form Group Wrapper</label>
          <p class="mg-b-20 mg-sm-b-40">A bordered form group wrapper with a label on top of each form control.</p>


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



          <form action="#" method="post" enctype="multipart/form-data">

         
                <div class="row">
                  <div class="col-sm-6 col-md-2">
                    <?php
                    $img = base_url("uploads/default.png");
                    if($tim_rinci->foto != ""){
                    $img = $this->config->item('base_url').'uploads/foto_tim/'.$tim_rinci->foto; 
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
                  <label class="form-control-label">Nama: </label>
                  <input class="form-control" type="text" name="nama" placeholder="" value="<?php
                  echo @$tim_rinci->nama; ?> " disabled>
                </div>
              </div>
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                
                    <label class="form-control-label"><i class="icon ion-calendar tx-16 lh-50 op-20"></i> Tanggal Lahir: </label>
                    <input id="datepickerNoOfMonths" type="text" class="form-control" placeholder="DD-MM-YYYY" name="tanggal_lahir" value="<?php
                  echo @$tim_rinci->tanggal_lahir; ?> " disabled>
               
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Pangkat: </label>
                  <input class="form-control" type="text" name="pangkat" placeholder="" value="<?php
                  echo @$tim_rinci->pangkat; ?> " disabled>
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">NRP: </label>
                  <input class="form-control" type="text" name="nrp" placeholder="" value="<?php
                  echo @$tim_rinci->nrp; ?> " disabled>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Korps: </label>
                  <input class="form-control" type="text" name="korps" placeholder="" value="<?php
                  echo @$tim_rinci->korps; ?> " disabled>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Jabatan: </label>
                  <input class="form-control" type="text" name="jabatan" placeholder="" value="<?php
                  echo @$tim_rinci->jabatan; ?> " disabled>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Kesatuan: </label>
                  <input class="form-control" type="text" name="kesatuan" placeholder="" value="<?php
                  echo @$tim_rinci->kesatuan; ?> " disabled>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Matra: </label>
                  <input class="form-control" type="text" name="matra" placeholder="" value="<?php
                  echo @$tim_rinci->matra; ?> " disabled>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Alamat: </label>
                  <input class="form-control" type="text" name="alamat" placeholder="" value="<?php
                  echo @$tim_rinci->alamat; ?> " disabled>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                 <label class="form-control-label">Email: </label>
                  <input class="form-control" type="text" name="email" placeholder="" value="<?php
                  echo @$tim_rinci->email; ?> " disabled>
                </div>
              </div><!-- col-8 -->
            </div><!-- row -->
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
