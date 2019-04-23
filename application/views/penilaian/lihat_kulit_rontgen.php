        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Kulit</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">U Kulit: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input id="u_kulit" class="form-control" name="u_kulit" placeholder="Masukkan Umum Kulit" type="text" value="<?php if(!empty($data_kulit)){ echo $data_kulit->u_kulit; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Stakes Kulit: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   <input id="nb_kulit" class="form-control" name="nb_kulit" placeholder="Masukkan Stakes Kulit" type=" text" value="<?php if(!empty($data_kulit)){ echo $data_kulit->nb_kulit; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Keterangan: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_kulit" id="ket_kulit" disabled="true">
                    <?php if(!empty($data_kulit)){ echo $data_kulit->ket_kulit; } ?>
                  </textarea>
                  </div>
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Rontgen</label>
              <p class="mg-b-20 mg-sm-b-40"></p>
              <br>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"> U Rontgen:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <input id="u_rontgen" class="form-control" name="u_rontgen" placeholder="Masukkan Umum Rontgen" type="text" value="<?php if(!empty($data_rontgen)){ echo $data_rontgen->u_rontgen; } ?>" required disabled="true">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Stakes Rontgen:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                     <input id="nb_rontgen" class="form-control" name="nb_rontgen" placeholder="Masukkan Stakes Rontgen" type="text" value="<?php if(!empty($data_rontgen)){ echo $data_rontgen->nb_rontgen; } ?>" required disabled="true">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"> Keterangan EKG:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea rows="3" class="form-control" placeholder="" name="ket_rontgen" id="ket_rontgen" disabled="true">
                    <?php if(!empty($data_rontgen)){ echo $data_rontgen->ket_rontgen; } ?>
                  </textarea>
                  </div>
                </div><!-- row -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->