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
            <li class="breadcrumb-item"><a href="#">Tes Rikkes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Penilaian</li>
          </ol>
          <h6 class="slim-pagetitle">Data Penilaian</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">

          <p class="mg-b-20 mg-sm-b-40"></p>
          <br>

          <?php $this->load->view('penilaian/search_nilai'); ?>

          <label class="section-title">Penilaian</label>
          <p class="mg-b-20 mg-sm-b-40"> <font color='#0e72f3'><i class="icon ion-calculator"></i></font> Untuk melakukan penilaian, silahkan Anda klik button <font color='#0e72f3'>biru</font> di samping setiap nama  </p>
          <p class="mg-b-20 mg-sm-b-40"> <font color='#0ef392'><i class="icon ion-pie-graph"></i></font> Untuk melihat hasil nilai, silahkan Anda klik button <font color='#0ef392'>hijau</font> di samping setiap nama  </p>

          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-5p">No</th>
                    <th class="wd-5p">No Casis</th>
                    <th class="wd-5p">Foto</th>
                    <th class="wd-5p">Nama</th>
                    <th class="wd-5p">TTL</th>
                    <th class="wd-5p">J. Kelamin</th>                    
                    <th class="wd-5p">#</th>
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
                    <?php echo anchor('casis/casis_rinci/'.$casis->id, $casis->nama, 'title="Detail"'); ?>
                    </td>
                    <td><?php echo $casis->tempat_lahir; ?>, <?php echo $casis->tanggal_lahir; ?></td>
                    <td><?php echo $casis->j_kel; ?></td>
                    <td>
                      <a href="<?php echo site_url("penilaian/lihat_nilai/".$casis->id); ?>" class="btn btn-teal btn-icon rounded-circle" data-toggle="tooltip-teal" data-placement="left" title="" data-original-title="Hasil Penilaian"><div><i class="icon ion-pie-graph"></i></div></a>
                      &nbsp;&nbsp;
                      <?php 
                      $this->load->model("penilaian_model");
                      $data['hasil_nilai'] = $this->penilaian_model->get_hasil_nilai_by_casis($casis->no_casis);
                      if (empty($data['hasil_nilai'])) { ?>
                      
                      <a href="<?php echo site_url("penilaian/add_nilai/".$casis->id); ?>" class="btn btn-primary btn-icon rounded-circle" data-toggle="tooltip-primary" data-placement="right" title="" data-original-title="Beri Penilaian"><div><i class="icon ion-calculator"></i></div></a>


                      <?php }?>

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

        <script>
  $(function(){
      'use strict';
        
        $(".select2").select2({
            ajax: {
                
                url: '<?=base_url()?>' + "penilaian/ambil_data",
                dataType: 'json',
                type: "GET",
                delay: 800,
                data: function (params) {
                  console.log(params);
                    return {
                        q: params.term
                    };
                },
                processResults: function (data) {
                    console.log(data.scan);

                    var nama = data.scan[0].nama;
                    var foto = data.scan[0].foto;
                    var no_casis = data.scan[0].no_casis;
                    var tempat = data.scan[0].tempat_lahir;
                    var tanggal_lahir = data.scan[0].tanggal_lahir;
                    var program = data.scan[0].program;
                    var universitas = data.scan[0].universitas;
                    var ipk = data.scan[0].ipk;
                    var panda = data.scan[0].panda;
                    var kelas = data.scan[0].kelas;
                    var j_kel = data.scan[0].j_kel;
                    var id = data.scan[0].id;
                    

                    $('#h1').html(nama);
                    $('#no_casis').html(no_casis);
                    $('#tempat').html(tempat);
                    $('#tanggal_lahir').html(tanggal_lahir);
                    $('#program').html(program);
                    $('#universitas').html(universitas);
                    $('#ipk').html(ipk);
                    $('#panda').html(panda);
                    $('#kelas').html(kelas);
                    $('#j_kel').html(j_kel);
                    
                    $("#my_image").attr("src","<?=base_url()?>"+"uploads/foto_casis/"+foto);
                    $("#nilai").attr("href","<?=base_url()?>"+"penilaian/add_nilai/"+id);
                    $('#modaldemo6').modal('show');
                    
                    return {
                        results: data.res
                    };
                }
            },
            allowClear: true,
            minimumInputLength: 4
           });
  });





        </script>

  </body>
</html>
