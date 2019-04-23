        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">USG</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">U USG: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_usg" class="form-control" name="u_usg" placeholder="Masukkan Umum USG" type="text" value="<?php if(!empty($data_usg)){ echo $data_usg->u_usg; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes USG: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_usg" class="form-control" name="nb_usg" placeholder="Masukkan Stakes USG" type="text" value="<?php if(!empty($data_usg)){ echo $data_usg->nb_usg; } ?>"required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan USG: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_usg" id="ket_usg" disabled="true">
                    <?php if(!empty($data_usg)){ echo $data_usg->ket_usg; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Atas</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> A Atas:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <input id="a_atas" class="form-control" name="a_atas" placeholder="Masukkan Atas" type="text" value="<?php if(!empty($data_atas)){ echo $data_atas->a_atas; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes Atas:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_atas" class="form-control" name="nb_atas" placeholder="Masukkan Stakes Atas" type="text" value="<?php if(!empty($data_atas)){ echo $data_atas->nb_atas; } ?>"required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan Atas:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_atas" id="ket_atas" disabled="true">
                    <?php if(!empty($data_atas)){ echo $data_atas->ket_atas; } ?>
                  </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->