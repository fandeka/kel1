<!DOCTYPE html>
<html lang="en">
<head>
    <?php  $this->load->view("common/common_head"); ?>
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/font-awesome/css/font-awesome.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/Ionicons/css/ionicons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/chartist/css/chartist.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/lib/rickshaw/css/rickshaw.min.css"); ?>">

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
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="slim-pagetitle">Dashboard 01</h6>
        </div><!-- slim-pageheader -->

        <div class="dash-headline">
          <div class="dash-headline-left">
            <div class="dash-headline-item-one" >
              <div id="chartArea1" class="dash-chartist"></div>
              <div class="dash-item-overlay">
                <h1><?php echo $jml_casis_pria+$jml_casis_wanita;?></h1>
                <p class="earning-label">Casis</p>
                <p class="earning-desc">Jumlah Casis Urikkes Pada Tahun <?php echo date("Y"); ?> adalah <?php echo $jml_casis_pria+$jml_casis_wanita;?> orang </p>
                
              </div>
            </div><!-- dash-headline-item-one -->
          </div><!-- dash-headline-left -->

          <div class="dash-headline-right">
            <div class="dash-headline-right-top">
              <div class="dash-headline-item-two">
                <div id="chartMultiBar1" class="chart-rickshaw"></div>
                <div class="dash-item-overlay">
                  <h4><?php echo $jml_tim_rikkes; ?></h4>
                  <p class="item-label">Tim Rikkes</p>
                  <p class="item-desc"></p>
                  <a href="#" class="report-link"> </a>
                </div>
              </div><!-- dash-headline-item-two -->
            </div><!-- dash-headline-right-top -->
            <div class="dash-headline-right-bottom">
              <div class="dash-headline-right-bottom-left">
                <div class="dash-headline-item-three">
                  <span id="sparkline3" class="sparkline wd-100p">1,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
                  <div>
                    <h1><?php echo $jml_casis_pria;?></h1>
                    <p class="item-label">Casis Pria <?php echo date("Y"); ?></p>
                    <p class="item-desc"></p>
                  </div>
                </div><!-- dash-headline-item-three -->
              </div><!-- dash-headline-right-bottom-left -->
              <div class="dash-headline-right-bottom-right">
                <div class="dash-headline-item-three">
                  <span id="sparkline4" class="sparkline wd-100p">1,4,4,7,5,7,4,3,4,4,6,5,9,7</span>
                  <div>
                    <h1><?php echo $jml_casis_wanita; ?></h1>
                    <p class="item-label">Casis Wanita <?php echo date("Y"); ?></p>
                    <p class="item-desc"></p>
                  </div>
                </div><!-- dash-headline-item-three -->
              </div><!-- dash-headline-right-bottom-right -->
            </div><!-- dash-headline-right-bottom -->
          </div><!-- wd-50p -->
        </div><!-- d-flex ht-100v -->

        <div class="card card-dash-one mg-t-20">
          <div class="row no-gutters">
            <div class="col-lg-3">
              <i class="icon ion-ios-analytics-outline"></i>
              <div class="dash-content">
                <label class="tx-primary">Impressions</label>
                <h2>822,490</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-pie-outline"></i>
              <div class="dash-content">
                <label class="tx-success">Page Visits</label>
                <h2>465,183</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-stopwatch-outline"></i>
              <div class="dash-content">
                <label class="tx-purple">Commision</label>
                <h2>781,524</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-world-outline"></i>
              <div class="dash-content">
                <label class="tx-danger">Earnings</label>
                <h2>369,657</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card card-table">
              <div class="card-header">
                <h6 class="slim-card-title">Data Casis Terbaru</h6>
              </div><!-- card-header -->
              <div class="table-responsive">
                <table class="table mg-b-0 tx-13">
                  <thead>
                    <tr class="tx-10" bgcolor='#EE6868' >
                      <th class="wd-10p pd-y-5">&nbsp;</th>
                      <th class="pd-y-5">No Casis</th>
                      <th class="pd-y-5 tx-right">Nama</th>
                      <th class="pd-y-5">TTL</th>
                      <th class="pd-y-5 tx-center">J Kel</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($casis_rikes as $casis){?>
                    <tr>

                      <td class="pd-l-20">
                            <?php
                                    $img = base_url("uploads/default.png");
                                    if($casis->foto != ""){
                                        $img = $this->config->item('base_url').'uploads/foto_casis/'.$casis->foto; 
                                    }  
                            ?>
                            <img src="<?php echo $img; ?>" class="img-circle" style="height: 50px; width: 50px;" >
                              
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block"><?php echo $casis->no_casis; ?></a>
                        <span class="tx-11 d-block"><span class=""></span></span>
                      </td>
                      <td class="valign-middle tx-right"><?php echo anchor('casis/casis_rinci/'.$casis->id, $casis->nama, 'title="Detail"'); ?></td>
                      <td class="valign-middle"><span class="tx-success"><i class=""></i><?php echo $casis->tempat_lahir; ?>, <?php echo $casis->tanggal_lahir; ?></span></td>
                      <td class="valign-middle tx-center">
                        <?php echo $casis->j_kel; ?>
                      </td>
                    </tr>

                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              <div class="card-footer tx-12 pd-y-15 bg-transparent">
                <a href="<?php echo base_url().'/casis/'; ?>"><i class="fa fa-angle-down mg-r-5"></i>Lihat Semua</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card card-table">
              <div class="card-header">
                <h6 class="slim-card-title">Tim Rikkes</h6>
              </div><!-- card-header -->
              <div class="table-responsive">
                <table class="table mg-b-0 tx-13">
                  <thead>
                    <tr class="tx-10">
                      <th class="wd-10p pd-y-5">&nbsp;</th>
                      <th class="pd-y-5">Nama</th>
                      <th class="pd-y-5">Pangkat</th>
                      <th class="pd-y-5">NRP</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tim_rikkes as $rikkes){?>
                    <tr>
                      <td class="pd-l-20">
                                   <?php
                                    $img = base_url("uploads/default.png");
                                    if($rikkes->foto != ""){
                                        $img = $this->config->item('base_url').'uploads/foto_tim/'.$rikkes->foto; 
                                    }  
                                ?>
                                <img src="<?php echo $img; ?>" class="img-circle" style="height: 50px; width: 50px;">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block"><?php echo anchor('tim/tim_rinci/'.$rikkes->id, $rikkes->nama, 'title="Detail"'); ?></a>
                        <span class="tx-11 d-block"></span>
                      </td>
                      <td class="tx-12">
                         <?php echo $rikkes->pangkat; ?>
                      </td>
                      <td><?php echo $rikkes->nrp; ?></td>
                    </tr>




                     <?php } ?>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              <div class="card-footer tx-12 pd-y-15 bg-transparent">
                <a href="<?php echo base_url().'/tim/'; ?>"><i class="fa fa-angle-down mg-r-5"></i>Lihat Semua</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
    <?php  $this->load->view("common/common_footer"); ?>

    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/popper.js/js/popper.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/bootstrap/js/bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery.cookie/js/jquery.cookie.js"); ?>"></script>

    
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/chartist/js/chartist.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/d3/js/d3.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/rickshaw/js/rickshaw.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/lib/jquery.sparkline.bower/js/jquery.sparkline.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/ResizeSensor.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/dashboard.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/js/slim.js"); ?>"></script>
    
  </body>
</html>
