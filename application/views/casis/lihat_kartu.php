    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal fade" >
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14" style="width:  700px;">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            

            <h5 class=""><a href="" class="tx-inverse hover-primary">Kartu</a></h5>
            <h1 id="nama" class="" style="position: relative;
                                            top: 500px;
                                            text-align: center; 
                                            color:white;">Nama</h1>

       
           <?php $img = base_url("images/kartu_depan.png");?>
            <img  class="img-circle" src="<?php echo $img; ?>">
            <img id="my_image" class="img-circle" style="position: absolute; top: 270px; left: 220px; height: 250px; width: 250px;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Cetak</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->


