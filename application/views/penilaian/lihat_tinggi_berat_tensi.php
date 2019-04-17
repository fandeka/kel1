        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Tinggi & Berat</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">Tinggi Badan: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="tinggi" class="form-control" name="tb" placeholder="cm" type="text" value="<?php if(!empty($data_imt)){ echo $data_imt->tb; } ?>"required disabled>
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Berat Badan: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="berat" class="form-control" name="bb" placeholder="kg" type="text" value="<?php if(!empty($data_imt)){ echo $data_imt->bb; } ?>" required disabled>
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">IMT: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="imt" class="form-control" name="imt" placeholder="IMT" type="text" disabled="true" value="<?php if(!empty($data_imt)){ echo $data_imt->imt; } ?>">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">U_IMT: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_imt" class="form-control" name="u_imt" placeholder="U_IMT" type="text" disabled="true" value="<?php if(!empty($data_imt)){ echo $data_imt->u_imt; } ?>">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <textarea rows="3" class="form-control" placeholder="" name="ket_imt" id="ket_imt" disabled="true">
                      <?php if(!empty($data_imt)){ echo $data_imt->ket_imt; } ?>
                    </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Tensi</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> Tensi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="tensi" class="form-control" name="tensi" placeholder="Masukkan Tensi" type="text" value="<?php if(!empty($data_tensi)){ echo $data_tensi->tensi; } ?>" required disabled>
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Nadi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nadi" class="form-control" name="nadi" placeholder="Masukkan Nadi" type="text" value="<?php if(!empty($data_tensi)){ echo $data_tensi->nadi; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">U Tensi dan Nadi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_nadi" class="form-control" name="u_nadi" placeholder="Masukkan Umum Nadi" type="text" value="<?php if(!empty($data_tensi)){ echo $data_tensi->u_nadi; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Tensi dan Nadi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_nadi" class="form-control" name="nb_nadi" placeholder="Masukkan Stakes Nadi" type="text" value="<?php if(!empty($data_tensi)){ echo $data_tensi->nb_nadi; } ?>"  required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan Tensi dan Nadi:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="3" class="form-control" placeholder="" name="ket_nadi" id="ket_nadi" disabled="true">
                      <?php if(!empty($data_tensi)){ echo $data_tensi->ket_nadi; } ?>
                    </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->