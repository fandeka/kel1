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
            <li class="breadcrumb-item"><a href="#">Calon Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Calon Siswa</li>
          </ol>
          <h6 class="slim-pagetitle">Data Calon Siswa</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">

          <label class="section-title">Daftar Nama Casis</label>
          <p class="mg-b-20 mg-sm-b-40">
            
          <?php $this->load->view('casis/lihat_kartu'); ?>

          </p>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="demo-btn-list">
                <a href="<?php echo site_url("casis/add_casis"); ?>" class="btn btn-primary btn-icon rounded-circle"><div><i class="icon ion-plus-circled"></i></div></a>
              </div>
            </div>
          </div>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-5p">No</th>
                    <th class="wd-5p">NoCasis</th>
                    <th class="wd-5p">Foto</th>
                    <th class="wd-5p">Nama</th>
                    <th class="wd-5p">TTL</th>
                    <th class="wd-5p">J. Kelamin</th>                    
                    <th class="wd-5p">#</th>
                </tr>
              </thead>
              <tbody>
                  <?php $no = 1; ?>
                        <?php foreach($casis_rikes as $casis){?>
                  <tr>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                    <?php echo $casis->no_casis; ?>
                    </td>
                   <td class="foto" > 
                    <?php
                                    $img = base_url("uploads/default.png");
                                    if($casis->foto != ""){
                                        $img = $this->config->item('base_url').'uploads/foto_casis/'.$casis->foto; 
                                    }  
                                ?>
                                <img src="<?php echo $img; ?>" class="img-circle" style="height: 50px; width: 50px;" >
                              </td>
                    <td class="nama">
                    <?php echo anchor('casis/casis_rinci/'.$casis->id, $casis->nama, 'title="Detail"'); ?>
                    </td>
                    <td><?php echo $casis->tempat_lahir; ?>, <?php echo $casis->tanggal_lahir; ?></td>
                    <td><?php echo $casis->j_kel; ?></td>
                     <td>
                      <a href="#" class="btn btn-teal btn-icon rounded-circle kartu" data-toggle="tooltip-teal" data-placement="left" title="" data-original-title="Cetak Kartu"><input type="hidden" value="<?php echo $casis->no_casis;?>" class="no_casis"><div><i class="fa fa-credit-card"></i></div></a>
                      &nbsp;&nbsp;
                      <a href="<?php echo site_url("casis/edit_casis/".$casis->id); ?>">
                                      <i class="fa fa-pencil"></i></a>
                                       <span></span>   &nbsp&nbsp
                      <a href="<?php echo site_url("casis/delete_casis/".$casis->id); ?>" onclick="return confirm('are you sure to delete?')" class=""> 
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


       <script type="text/javascript">
                $(document).ready(function() {
                    $("#datatable1 tbody").on('click','.kartu',function(event) {

                        var base = '<?=base_url()?>';

                        // get_data_casis(no_casis);
                        var no_casis = $(this).find('.no_casis').val();
                        var nama = $(this).closest('tr').find('.nama').text();
                        var foto = $(this).closest('tr').find('.foto img').attr("src");

                        var barcode_path = base + "uploads/foto_barcode/"+no_casis+'.png';


                        console.log(barcode_path);




                        $.ajax({
                            type: "POST",
                            url: base + "casis/cetak_kartu",
                            data:{  "no_casis": no_casis},
                            dataType: "html",
                            cache: false,
                            success: function(data) {

                              console.log(data);
                              $('#nama').html(nama);
                              $('#my_image').attr('src',foto);
                              $('#image_barcode').attr('src',barcode_path);

                              $('#modaldemo1').modal('show');                             

                            },
                            error: function (data) {
                                console.log('An error occurred.');
                                console.log(data);
                            }
                        });

                        event.preventDefault();
                    });
                });

                function get_data_casis(no_casis) {
                    var base = '<?=base_url()?>';
                    $.ajax({
                        type: "POST",
                        url: base + "casis/get_data_casis",
                        data: ({ 'no_casis' : no_casis }),
                        dataType: "html",
                        success: function(data) {
                            return data;
                        },
                        error: function() {
                            alert('Error occured');
                        }
                    });
                }
        </script>

  </body>
</html>
