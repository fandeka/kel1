        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Mata</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">L Mata: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="l_mata" class="form-control" name="l_mata" placeholder="Masukkan Mata" type="text" value="<?php if(!empty($data_mata)){ echo $data_mata->l_mata; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Mata: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_mata" class="form-control" name="nb_mata" placeholder="Masukkan Stakes Mata" type="text" value="<?php if(!empty($data_mata)){ echo $data_mata->nb_mata; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan Mata: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_mata" id="ket_mata" disabled="true">
                    <?php if(!empty($data_mata)){ echo $data_mata->ket_mata; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Gigi</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> G Gigi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input id="g_gigi" class="form-control" name="g_gigi" placeholder="Masukkan Gigi" type="text" value="<?php if(!empty($data_gigi)){ echo $data_gigi->g_gigi; } ?>" required disabled="true">                
                </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes Gigi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_gigi" class="form-control" name="nb_gigi" placeholder="Masukkan Stakes Mata" type="text" value="<?php if(!empty($data_gigi)){ echo $data_gigi->nb_gigi; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan Gigi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="3" class="form-control" placeholder="" name="ket_gigi" id="ket_gigi" disabled="true">
                      <?php if(!empty($data_gigi)){ echo $data_gigi->ket_gigi; } ?>
                    </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->