<!DOCTYPE>
<html lang="en">
<head>
    <?php  $this->load->view("common/common_head"); ?>

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/font-awesome/css/font-awesome.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/Ionicons/css/ionicons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/datatables/css/jquery.dataTables.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/css/select2.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery-toggles/css/toggles-full.css"); ?>">

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
            <li class="breadcrumb-item active" aria-current="page">Data Tim Rikkes</li>
          </ol>
          <h6 class="slim-pagetitle">Data Tim Rikkes</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">

          <label class="section-title">Daftar Nama Tim Rikkes</label>
          <p class="mg-b-20 mg-sm-b-40"><!-- rching, ordering and paging goodness will be immediately added to the table, as shown in this exampleSea. --></p>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="demo-btn-list">
                <a href="<?php echo site_url("tim/add_tim"); ?>" class="btn btn-primary btn-icon rounded-circle"><div><i class="icon ion-plus-circled"></i></div></a>
              </div>
            </div>
          </div>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-5p">No</th>
                    <th class="wd-5p">Foto</th>
                    <th class="wd-15p">Nama</th>
                    <th class="wd-10p">Pangkat</th>
                    <th class="wd-10p">NRP</th>
                    <th class="wd-5p">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  <?php $no = 1; ?>
                        <?php foreach($tim_rikkes as $rikkes){?>
                          <tr>
                              <td><?php echo $no++; ?></td>
                              <td>
                                <?php
                                    $img = base_url("uploads/default.png");
                                    if($rikkes->foto != ""){
                                        $img = $this->config->item('base_url').'uploads/foto_tim/'.$rikkes->foto; 
                                    }  
                                ?>
                                <img src="<?php echo $img; ?>" class="img-circle" style="height: 50px; width: 50px;">
                              </td>
                              <td>
                                <?php echo anchor('tim/tim_rinci/'.$rikkes->id, $rikkes->nama, 'title="Detail"'); ?>
                              </td>
                              <td><?php echo $rikkes->pangkat; ?></td>
                              <td><?php echo $rikkes->nrp; ?></td>
                              <td>
                                      <a href="<?php echo site_url("tim/edit_tim/".$rikkes->id); ?>">
                                      <i class="fa fa-pencil"></i></a>
                                       <span></span>   
                                      <a href="<?php echo site_url("tim/delete_tim/".$rikkes->id); ?>" onclick="return confirm('are you sure to delete?')" class=""> 
                                      <i class="fa fa-trash"></i></a>
                              </td>

                          </tr>
                    <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
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
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/slim.js"); ?>"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });


        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

    <script>
      $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });
       
      });
    </script>
    <script>
        $(function () {
          
          $("body").on("change",".tgl_checkbox",function(){
              var table = $(this).data("table");
              var status = $(this).data("status");
              var id = $(this).data("id");
              var id_field = $(this).data("idfield");
              var bin=0;
              if($(this).is(':checked')){
                  bin = 1;
              }
              $.ajax({
                method: "POST",
                url: "<?php echo site_url("admin/change_status"); ?>",
                data: { table: table, status: status, id : id, id_field : id_field, on_off : bin }
              })
                .done(function( msg ) {
                  //alert(msg);
                }); 
          });
        });
       </script>

  </body>
</html>
