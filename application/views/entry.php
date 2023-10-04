
<div class="container" id="tourpackages-carousel">
    <div class="row text-center m-2">
        <!-- <div class="col-lg-12 text-center">
            <h1>Hasil Scan QRCODE Personel </h1>
        </div> -->

        <div class="col-xs-12">
            <div class="thumbnail">
                <div class="caption">
                    <div class="col-lg-12">

                    </div>
                    <div class="col-lg-12 well well-add-card">
                        <h4>REGISTER PERSONEL</h4>
                    </div>
                    <div class="col-lg-12">

                        <!-- <form style="text-align:left !important;" id="form_entrys" method="post" enctype="multipart/form-data" > -->
                        

                        <?php echo form_open_multipart('regis-personel/post');?> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="noreg_t">No Register</label>
                                    <input type="text" class="form-control" id="noreg_t" name="noreg_t" placeholder="No Registrasi">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama_t">Nama</label>
                                    <input type="text" class="form-control" id="nama_t" name="nama_t" placeholder="Nama Personel">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tempat_t">Tempat</label>
                                    <input type="text" class="form-control" id="tempat_t" name="tempat_t" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dob_t">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="dob_t" name="dob_t" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sel_jenis">Jenis Personel</label>
                                    <select id="sel_jenis" name="sel_jenis" class="form-control">
                                        <?php
                                            foreach ($rpersonel as $value) {   
                                                echo '<option value="'.$value->prefix_code.'">'.$value->prefix_descriptions.'</option>';
                                            }
                                        ?>  
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sel_alat">Jenis Alat</label>
                                    <select id="sel_alat" name="sel_alat"  class="form-control">
                                        <?php
                                            foreach ($ralat as $value) {   
                                                echo '<option value="'.$value->prefix_code.'">'.$value->prefix_descriptions.'</option>';
                                            }
                                        ?>  
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sel_klasifikasi">Klasifikasi</label>
                                    <select id="sel_klasifikasi" name="sel_klasifikasi" class="form-control">
                                    <?php
                                            foreach ($rklasifikasi as $value) {   
                                                echo '<option value="'.$value->prefix_code.'">'.$value->prefix_descriptions.'</option>';
                                            }
                                        ?>  
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sel_kelas">Kelas</label>
                                    <select id="sel_kelas" name="sel_kelas" class="form-control">
                                    <?php
                                            foreach ($rkelas as $value) {   
                                                echo '<option value="'.$value->prefix_code.'">'.$value->prefix_descriptions.'</option>';
                                            }
                                        ?>  
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exp_t">Masa Berlaku</label>
                                    <input type="date" class="form-control" id="exp_t" name="exp_t" placeholder="Masa Berlaku">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pathp_t">File Profile</label>
                                    <!-- <input type="file" class="form-control" id="pathp_t" placeholder="Profile"> -->
                                    <input type="file" class="form-control" name="image" size="20" />
         
                                </div>
                               
                            </div>



                            <!-- <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div> -->
                            <!-- <input type="submit" class="upload-image" value="upload" />  -->
                            <button type="submit" class="btn btn-primary mr-2 upload-image" id="btn-submited">Register</button>
                            <button type="button" class="btn btn-secondary" id="btn-reseted">Reset</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
      $("body").on("click","#btn-submited",function(e){
       $(this).parents("form").ajaxForm(options);
      });
      $("body").on("click","#btn-reseted",function(e){
       $(this).parents("form").ajaxForm(options);
      });
   </script>