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

          <label class="section-title">Basic Responsive DataTable</label>
          <p class="mg-b-20 mg-sm-b-40">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>
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
                    <th class="">No Pus</th>
                    <th class="">Nama</th>
                    <th class="">Tempat</th>
                    <th class="">Tgl Lahir</th>
                    <th class="">Program</th>
                    <th class="">Universitas</th>
                    <th class="">IPK</th>
                    <th class="">PANDA</th>
                    <th class="">KELAS</th>
                    <th class="wd-5p">AKSI</th>
                </tr>
              </thead>
              <tbody>
                        
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                  </tr>
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
