<!DOCTYPE html>
<html lang="en">
<head>
    <?php  $this->load->view("common/common_head"); ?>

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/font-awesome/css/font-awesome.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/Ionicons/css/ionicons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/datatables/css/jquery.dataTables.css"); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/css/select2.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery-toggles/css/toggles-full.css"); ?>">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/css/slim.css"); ?>">

    <style type="text/css">
      div.dataTables_wrapper {
        width: auto;
        margin: 0 auto;
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
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Penilaian</li>
          </ol>
          <h6 class="slim-pagetitle">Laporan Penilaian</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">

     
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="display nowrap display responsive" >
              <thead>
                <tr> 
                    <th  colspan="2">Nomor</th>
                    <th  >Foto</th>
                    <th  rowspan="2">Nama 
                                                  <br> TTL 
                                                  <br> PRODI 
                                                  <br> ASAL PANDA 
                                                  <br> JENIS KELAMIN 
                                                  <br> KELAS</th>
                    <th  colspan="13">Umum</th>
                   
                </tr>
                <tr>
                    <th >No</th>
                    <th >No Casis</th>
                    <th >#</th>
                    <th >TB / BB</th>
                    <th >IMT</th>
                    <th >TENSI/NADI</th>
                    <th >INTERNE</th>
                    <th >EKG</th>
                    <th >ERGO</th>
                    <th >SPIRO</th>
                    <th >RONTGEN</th>
                    <th >KULIT</th>
                    <th >LAB</th>
                    <th >BEDAH</th>
                    <th >USG</th>
                    <th >THT</th>
                    <th >AKSI</th>                   
                </tr>
              </thead>
              <?php $no = 1; ?>
                        <?php foreach($penilaian_rikkes as $casis){?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                    <?php echo $casis->no_casis; ?>
                    </td>
                   <td> 
                    <?php
                                    $img = base_url("uploads/default.png");
                                    if($casis->foto != ""){
                                        $img = $this->config->item('base_url').'uploads/foto_casis/'.$casis->foto; 
                                    }  
                                ?>
                                <img src="<?php echo $img; ?>" class="img-circle" style="height: 50px; width: 50px;">
                              </td>
                    <td>
                    <?php echo anchor('penilaian/lihat_nilai/'.$casis->id, $casis->nama, 'title="Detail"'); ?>
                    <br>
                    <?php echo $casis->tempat_lahir; ?>, <?php echo $casis->tanggal_lahir; ?>
                    <br>
                    <?php echo $casis->panda; ?>
                    <br>
                    <?php echo $casis->j_kel; ?>
                    <br>
                    <?php echo $casis->kelas; ?>
                    </td>
                    <td>
                      <?php 
                      
                      $data['data_imt']=$this->penilaian_model->get_imt_by_casis($casis->no_casis); 
                      echo $data['data_imt']->tb ;
                      echo '/';
                      echo $data['data_imt']->bb;
                      ?>
                    </td>
                    <td>
                      <?php echo substr($data['data_imt']->imt, 0, 4); ?>
                      <br>
                      <br>
                      <?php echo $data['data_imt']->u_imt; ?>
                    </td>
                    <td>
                      <?php 
                      
                      $data['data_tensi']=$this->penilaian_model->get_tensi_by_casis($casis->no_casis); 
                      echo $data['data_tensi']->tensi ;
                      echo '&nbsp; <br><br>';
                      echo $data['data_tensi']->nadi;
                      echo '&nbsp; <br><br>';
                      echo $data['data_tensi']->nb_nadi;
                      ?>
                    </td>
                    <td>
                      TB / BB
                    </td>
                    <td>
                      TB / BB
                    </td>
                     <td>
                      TB / BB
                    </td>
                    <td>
                      TB / BB
                    </td>
                     <td>
                      TB / BB
                    </td>
                     <td>
                      TB / BB
                    </td>
                     <td>
                      TB / BB
                    </td>
                    <td>
                      TB / BB
                    </td>
                     <td>
                      TB / BB
                    </td>
                    <td>
                      TB / BB
                    </td>
                    <td>
  
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
    <!-- <script src="<?php //echo base_url($this->config->item("theme_admin")."/lib/datatables-responsive/js/dataTables.responsive.js"); ?>"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/select2/js/select2.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery-toggles/js/toggles.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/slim.js"); ?>"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          // scrollY: 200,
          scrollX: true,

          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
            ],
     
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });


        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

                // Initialize tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // colored tooltip
        $('[data-toggle="tooltip-primary"]').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
        $('[data-toggle="tooltip-teal"]').tooltip({
          template: '<div class="tooltip tooltip-teal" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

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
