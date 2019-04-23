
            
          <div  style="position: absolute; width: 207px"  >

<div onload="window.print();"> 
         
             <?php $img = base_url("images/kartu_depan.png");?>
              <img  class="img-circle" src="<?php echo $img; ?>" style=" height: 9.5cm; width: 5.5cm; ">
   
            <div style="position: absolute; top: 3px; left: 20px; right: 20px;">
                            <h5 id="nama" style="text-align: center; 
                                              color:white;
                                              "><img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/LOGO BARU TNI.png"); ?>" alt="IMG" class="img-circle" style="position: absolute; top: 1px; left: 75px; height: 24px; width: 21px;"> 
            </div>

            <div style="position: absolute; top: 23px; left: 2px; right: 20px;">
                            <h5 id="nama" style="text-align: center; 
                                              color:white;
                                              "><img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/sc.png"); ?>" alt="IMG" class="img-circle" style="position: absolute; top: 7px; left: 75px; height: 26px; width: 18px;"> 
            </div>

            <div style="position: absolute; top: 23px; left: 2px; right: 20px;">
                            <h5 id="nama" style="text-align: center; 
                                              color:white;
                                              "><img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/laut.png"); ?>" alt="IMG" class="img-circle" style="position: absolute; top: 10px; left: 95px; height: 20px; width: 17px;"> 
            </div>

            <div style="position: absolute; top: 23px; left: 2px; right: 20px;">
                            <h5 id="nama" style="text-align: center; 
                                              color:white;
                                              "> <img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/1200px-Insignia_of_the_Indonesian_Air_Force.svg.png"); ?>" alt="IMG" class="img-circle" style="position: absolute; top: 8px; left: 115px; height: 23px; width: 17px;"> 
            </div>


            <div style="position: absolute; top: 30px; left: 20px; right: 20px;">
                            <h5 id="nama" style="text-align: center; 
                                              color:white;
                                              ">CASIS PA PK 2019</h5> 
            </div>

            <div style="position: absolute; top: 190px; left: 20px; right: 20px;">
                            <h5 id="nama" style="text-align: center; 
                                              color:white;
                                              "><?php echo $casis->nama;?></h5> 
            </div>

            <div style="position: absolute; top: 80px; left: 70px;" >
                     <img id="my_image" class="img-circle" style=" height: 3cm; width: 2cm  ; "  src="<?php echo base_url().'/uploads/foto_casis/'.$casis->foto;?>">




                            <div style="position: relative; left: 8px; top: 110px;" >

                                  <img id="image_barcode" class="img-circle" style="
                                  height: 33px; width: 58px;" src="<?php echo base_url().'/uploads/foto_barcode/'.$casis->no_casis.'.png'?>">
                        
                            </div>


            </div>
</div>
<br>
<br>
          <div  style="position: relative;">
            <button type="button" class="btn btn-primary" onclick="window.print()">Cetak</button>
          </div>

          </div>
            