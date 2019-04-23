        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Bawah</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">B Bawah: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="b_bawah" class="form-control" name="b_bawah" placeholder="Masukkan Bawah" type="text" value="<?php if(!empty($data_bawah)){ echo $data_bawah->b_bawah; } ?>"  required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Bawah: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_bawah" class="form-control" name="nb_bawah" placeholder="Masukkan Stakes Bawah" type="text" value="<?php if(!empty($data_bawah)){ echo $data_bawah->nb_bawah; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan Bawah: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_bawah" id="ket_bawah" disabled="true">
                    <?php if(!empty($data_bawah)){ echo $data_bawah->nb_bawah; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">THT</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> D THT:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input id="t_tht" class="form-control" name="t_tht" placeholder="Masukkan THT" type="text" value="<?php if(!empty($data_tht)){ echo $data_tht->t_tht; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes THT:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_tht" class="form-control" name="nb_tht" placeholder="Masukkan Stakes THT" type="text" value="<?php if(!empty($data_tht)){ echo $data_tht->nb_tht; } ?>"  required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan THT:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_tht" id="ket_tht" disabled="true">
                    <?php if(!empty($data_tht)){ echo $data_tht->ket_tht; } ?>
                  </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->