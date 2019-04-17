
        <div class="section-wrapper mg-t-20">
          <label class="section-title">Hasil Nilai</label>
          <p class="mg-b-20 mg-sm-b-40"></p>
          <br>

          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title tx-dark tx-medium mg-b-10">Hasil Kesum:</h5>
                  <p class="card-subtitle tx-normal mg-b-15"></p>
                  <p class="card-text"><?php if(!empty($hasil_nilai)){ echo $hasil_nilai->hasil_kesum; } ?></p>

                </div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-primary tx-white bd-0">
                <div class="card-body">
                  <h5 class="card-title tx-white tx-medium mg-b-10">Hasil Rikkes:</h5>
                  <p class="card-subtitle tx-normal mg-b-15 tx-white-8"></p>
                  <p class="card-text"><?php if(!empty($hasil_nilai)){ echo $hasil_nilai->hasil_rikkes; } ?></p>

                </div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-purple tx-white bd-0">
                <div class="card-body">
                  <h5 class="card-title tx-white tx-medium mg-b-10">Keterangan:</h5>
                  <p class="card-subtitle tx-normal tx-white-8 mg-b-15"></p>
                  <p class="card-text"><?php if(!empty($hasil_nilai)){ echo $hasil_nilai->keterangan; } ?></p>
                </div>
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->
