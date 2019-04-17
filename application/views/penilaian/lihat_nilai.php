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
            <li class="breadcrumb-item active" aria-current="page">Hasil Rikkes</li>
          </ol>
          <h6 class="slim-pagetitle">Hasil Rikkes</h6>
        </div><!-- slim-pageheader -->

          <div class="section-wrapper mg-t-20">
          <label class="section-title">Hasil Rikkes</label>
          <p class="mg-b-20 mg-sm-b-40"></p>
          <br>

          <form action="#" method="post" enctype="multipart/form-data">

         
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
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Nama: </label>
                  <input class="form-control" type="text" name="nama" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->nama; ?>">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group mg-md-l--1 mg-md-t-0">
                  <label class="form-control-label">Tempat Lahir: </label>
                  <input class="form-control" type="text" name="tempat_lahir" disabled="true" value="<?php
                  echo @$casis_rinci->tanggal_lahir; ?>">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                
                    <label class="form-control-label"><i class="icon ion-calendar tx-16 lh-50 op-20"></i> Tanggal Lahir: </label>
                    <input id="datepickerNoOfMonths" type="text" class="form-control" placeholder="DD-MM-YYYY" name="tanggal_lahir" disabled="true" value="<?php
                  echo @$casis_rinci->tanggal_lahir; ?>">
               
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">No Casis: </label>
                  <input class="form-control" type="text" name="no_casis" disabled="true" value="<?php
                  echo @$casis_rinci->no_casis; ?>">
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Jenis Kelamin: </label>
                  <input class="form-control" type="text" name="" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->j_kel; ?> ">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Program: </label>
                  <input class="form-control" type="text" name="program" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->program; ?> ">
                </div>
              </div><!-- col-4 --><!-- col-4 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Universitas: </label>
                  <input class="form-control" type="text" name="universitas" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->universitas; ?> ">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">IPK : </label>
                  <input class="form-control" type="text" name="ipk" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->ipk; ?> ">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-6">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Panda: </label>
                  <input class="form-control" type="text" name="panda" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->panda; ?> ">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-6">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label">Kelas: </label>
                  <input class="form-control" type="text" name="kelas" placeholder="" disabled="true" value="<?php
                  echo @$casis_rinci->kelas; ?> ">
                </div>
              </div><!-- col-8 -->
            </div><!-- row -->
          </div><!-- form-layout -->
          </form>



         <?php  $this->load->view("penilaian/lihat_tinggi_berat_tensi"); ?>
         <?php  $this->load->view("penilaian/lihat_interne_ekg"); ?>
         <?php  $this->load->view("penilaian/lihat_ergo_spiro"); ?>
         <?php  $this->load->view("penilaian/lihat_kulit_rontgen"); ?>
         <?php  $this->load->view("penilaian/lihat_lab_bedah"); ?>
         <?php  $this->load->view("penilaian/lihat_usg_atas"); ?>
         <?php  $this->load->view("penilaian/lihat_bawah_tht"); ?>
         <?php  $this->load->view("penilaian/lihat_mata_gigi"); ?>
         <?php  $this->load->view("penilaian/lihat_jiwa"); ?>
         <?php  $this->load->view("penilaian/lihat_hasil_nilai"); ?>


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

                var no_casis = $('#no_casis').val();
                $.ajax({
                    type: "POST",
                    url: base + "penilaian/hitung_nilai",
                    data: { "no_casis": no_casis },
                    dataType: "html",
                    cache: false,
                    success: function(data) {
                        console.log(data);
                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
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
