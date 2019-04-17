        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Ergo</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">U Ergo: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_ergo" class="form-control" name="u_ergo" placeholder="Masukkan Umum Ergo" type="text" value="<?php if(!empty($data_ergo)){ echo $data_ergo->u_ergo; } ?>" rrequired disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Ergo: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_ergo" class="form-control" name="nb_ergo" placeholder="Masukkan Stakes Ergo" type=" text" value="<?php if(!empty($data_ergo)){ echo $data_ergo->nb_ergo; } ?>"  required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan Ergo: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_ergo" id="ket_ergo" disabled="true">
                    <?php if(!empty($data_ergo)){ echo $data_ergo->ket_ergo; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Spiro</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> U Spiro:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <input id="u_spiro" class="form-control" name="u_spiro" placeholder="Masukkan Umum Spiro" type="text" value="<?php if(!empty($data_spiro)){ echo $data_spiro->u_spiro; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes Spiro:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_spiro" class="form-control" name="nb_spiro" placeholder="Masukkan Umum Spiro" type="text" value="<?php if(!empty($data_spiro)){ echo $data_spiro->nb_spiro; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan Spiro:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_spiro" id="ket_spiro" disabled="true">
                    <?php if(!empty($data_spiro)){ echo $data_spiro->ket_spiro; } ?>
                  </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->