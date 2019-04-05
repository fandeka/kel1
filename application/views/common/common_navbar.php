    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="<?php echo site_url("admin/dashboard"); ?>">Dashboard</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item with-sub mega-dropdown <?php if(!empty($status_casis)){echo $status_casis;}?>">
            <a class="nav-link" href="#">
              <i class="icon ion-person-stalker"></i>
              <span>Calon Siswa</span>
            </a>
            <div class="sub-item">
              <div class="row">
                <div class="col-lg-5">
                  <label class="section-label">Peserta</label>
                  <div class="row">
                    <div class="col">
                      <ul>
                        <li><a href="<?php echo site_url("casis/add_casis"); ?>">Tambah Calon Siswa</a></li>
                        <li><a href="<?php echo site_url("casis"); ?>">Data Calon Siswa</a></li>
                        <li><a href="#">Upload Calon Siswa</a></li>
                      </ul>
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-calendar"></i>
              <span>Tes Rikkes</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="<?php echo site_url("penilaian/index"); ?>">Penilaian</a></li>
                <li><a href="<?php echo site_url("penilaian/add_penilaian"); ?>">Hasil Tes</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="page-messages.html">
              <i class="icon ion-document-text"></i>
              <span>Laporan</span>
            </a>
          </li>
          <li class="nav-item with-sub <?php if(!empty($status_tim)){echo $status_tim;}?>">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-medkit"></i>
              <span>Tim Rikkes</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="<?php echo site_url("tim/add_tim"); ?>">Tambah Tim Rikkes</a></li>
              </ul>
              <ul>
                <li><a href="<?php echo site_url("tim"); ?>">Data Tim Rikkes</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub <?php if(!empty($status_user)){echo $status_user;}?>">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Setting</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="<?php echo site_url("users/add_user"); ?>">Tambah Pengguna</a></li>
              </ul>
              <ul>
                <li><a href="<?php echo site_url("users"); ?>">Pengguna</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->