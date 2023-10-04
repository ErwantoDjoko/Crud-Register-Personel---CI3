<?php
$CI =& get_instance();
$CI->load->model('Prefix_Model', 'PrefixModel');

?>

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
                        <h4>BIODATA PERSONEL</h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <center>
                                <img class="rounded mb-2" src="<?= base_url($persons->path_profile) ?>"
                                    width="auto" height="200px">
                           
                            <table style="text-align:left !important;margin:5px;font-size:15px;">
                                <tr>
                                    <td>Nama</td>
                                    <td style="padding-left:10px;"> <?= $persons->nama_personel ?> </td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td style="padding-left:10px;">  <?= $persons->tempat ?>  </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td style="padding-left:10px;">   <?= date_format(date_create($persons->dob),"d F Y");  ?>  </td>
                                </tr>
                                <tr>
                                    <td>Jenis Personel</td>
                                    <td style="padding-left:10px;">  <?= $CI->PrefixModel->getDescription($persons->jenis_personel)->prefix_descriptions; ?>  </td>
                                </tr>
                                <tr>
                                    <td>Jenis Alat</td>
                                    <td style="padding-left:10px;">  <?=  $CI->PrefixModel->getDescription($persons->jenis_alat)->prefix_descriptions; ?>  </td>
                                </tr>
                                <tr>
                                    <td>Klasifikasi</td>
                                    <td style="padding-left:10px;">  <?= $CI->PrefixModel->getDescription($persons->klasifikasi)->prefix_descriptions; ?>  </td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td style="padding-left:10px;"> <?= $CI->PrefixModel->getDescription($persons->kelas)->prefix_descriptions;  ?>  </td>
                                </tr>
                                <tr>
                                    <td>No. Registrasi</td>
                                    <td style="padding-left:10px;">  <?= $persons->noreg ?>  </td>
                                </tr>
                                <tr>
                                    <td>Masa Berlaku</td>
                                    <td style="padding-left:10px;">  <?= date_format(date_create($persons->batas_waktu),"d F Y");  ?>  </td>
                                </tr>
                            </table>
                            <a href="<?= base_url('regis-personel') ?>"><button type="button" class="btn btn-primary" id="btn-submited">Back Register</button></a>
                            </center>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>