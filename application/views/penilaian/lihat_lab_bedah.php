        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Laboratorium</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">U LAB: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_lab" class="form-control" name="u_lab" placeholder="Masukkan Umum LAB" type="text" value="<?php if(!empty($data_lab)){ echo $data_lab->u_lab; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes LAB: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   <input id="nb_lab" class="form-control" name="nb_lab" placeholder="Masukkan Stakes LAB" type="text" value="<?php if(!empty($data_lab)){ echo $data_lab->nb_lab; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan LAB: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_lab" id="ket_lab" disabled="true">
                    <?php if(!empty($data_lab)){ echo $data_lab->ket_lab; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Bedah</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> U Bedah:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <input id="u_bedah" class="form-control" name="u_bedah" placeholder="Masukkan Umum Bedah" type="text" value="<?php if(!empty($data_bedah)){ echo $data_bedah->u_bedah; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes Bedah:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_bedah" class="form-control" name="nb_bedah" placeholder="Masukkan Stakes Bedah" type="text" value="<?php if(!empty($data_bedah)){ echo $data_bedah->nb_bedah; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan Bedah:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_bedah" id="ket_bedah" disabled="true">
                    <?php if(!empty($data_bedah)){ echo $data_bedah->ket_bedah; } ?>
                  </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->