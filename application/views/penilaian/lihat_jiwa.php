        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Jiwa</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">J Jiwa: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input id="j_jiwa" class="form-control" name="j_jiwa" placeholder="Masukkan Jiwa" type="text" value="<?php if(!empty($data_jiwa)){ echo $data_jiwa->j_jiwa; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Jiwa: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="nb_jiwa" class="form-control" name="nb_jiwa" placeholder="Masukkan Stakes Jiwa" type="text" value="<?php if(!empty($data_jiwa)){ echo $data_jiwa->nb_jiwa; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan Jiwa: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_jiwa" id="ket_jiwa" disabled="true">
                    <?php if(!empty($data_jiwa)){ echo $data_jiwa->nb_jiwa; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->

        </div><!-- row -->