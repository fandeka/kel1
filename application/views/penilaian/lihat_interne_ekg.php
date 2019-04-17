        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Interne</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">U Interne: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_interne" class="form-control" name="u_interne" placeholder="Masukkan Umum Interne" type="text" value="<?php if(!empty($data_interne)){ echo $data_interne->u_interne; } ?>"  required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Interne: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_interne" class="form-control" name="nb_interne" placeholder="Masukkan stakes Interne" type="text" value="<?php if(!empty($data_interne)){ echo $data_interne->nb_interne; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_interne" id="ket_interne" disabled="true">
                    <?php if(!empty($data_interne)){ echo $data_interne->ket_interne; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">UKG</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> U EKG:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <input id="u_ekg" class="form-control" name="u_ekg" placeholder="Masukkan Umum EKG" type="text" value="<?php if(!empty($data_ekg)){ echo $data_ekg->u_ekg; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes EKG:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_ekg" class="form-control" name="nb_ekg" placeholder="Masukkan stakes EKG" type="text" value="<?php if(!empty($data_ekg)){ echo $data_ekg->nb_ekg; } ?>"  required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan EKG:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_ekg" id="ket_ekg" disabled="true">
                    <?php if(!empty($data_ekg)){ echo $data_ekg->ket_ekg; } ?>
                  </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->