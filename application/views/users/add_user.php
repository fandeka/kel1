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
            <li class="breadcrumb-item"><a href="#">Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Pengguna</li>
          </ol>
          <h6 class="slim-pagetitle">Tambah Pengguna</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Tambah Data Pengguna</label>
          <p class="mg-b-20 mg-sm-b-40">Masukkan Data Pengguna Sesuai Form.</p>


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
          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="user_name" placeholder="Masukkan Username">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="user_password" placeholder="Masukkan Password">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Status Pengguna: <span class="tx-danger"></span></label>
                  <label class="ckbox"><input type="checkbox" class="i-checks" name="status"><span></span></label>
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label mg-b-0-force">Tipe Pengguna: <span class="tx-danger">*</span></label>
                  <select name="user_type" id="select2-a" class="form-control" data-placeholder="Pilih Tipe Pengguna">
                    
                            <?php foreach($user_types as $user_type){?>
                              <option value="<?php echo $user_type->user_type_id; ?>"><?php echo $user_type->user_type_title; ?>
                   
                            <?php } ?>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label mg-b-0-force">Tim Rikkes: <span class="tx-danger">*</span></label>
                  <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                        <option label="Choose one"></option>
                        <option value="Firefox">Firefox</option>
                        <option value="Chrome">Chrome</option>
                        <option value="Safari">Safari</option>
                        <option value="Opera">Opera</option>
                        <option value="Internet Explorer">Internet Explorer</option>
                  </select>
                </div>

              </div><!-- col-4 -->
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

      });
    </script>
  </body>
</html>
