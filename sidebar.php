<?php 
if (basename($_SERVER['PHP_SELF'])==basename(__FILE__)) {

    exit("Bu sayfaya erişim yasak");

}
 ?>


<div class="fox-sidebar">
    <div class="sidebar-item">
        <div class="sidebar-item-inner">
            <h3 class="sidebar-item-title"></h3>
               <div class="form-control-custom mb-md">
                <form id="propertiesForm" action="urunara.php" method="POST">

                                                <select class="form-control text-uppercase font-size-sm" name="urun_dur" data-msg-required="Doldurun..." id="propertiesMinBeds" required="">
                                                    <option value="">Emlak Durum</option>
                                                    <option value="Satılık">Satılık</option>
                                                    <option value="Kiralık">Kiralık</option>
                                                </select>
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                <select class="form-control text-uppercase font-size-sm" name="urun_nedir" data-msg-required="Doldurun..." id="propertiesPropertyType" required="" >
                                                    <option value="">Arama Türü</option>
                                                    <option value="Müstakil_Ev">Müstakil Ev</option>
                                                    <option value="Apartman_Dairesi">Apartman Dairesi</option>
                                                    <option value="Bahce">Bahçe</option>
                                                    <option value="Arsa">Arsa</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-control-custom mb-md">
                                                <select class="form-control text-uppercase font-size-sm" name="urun_sehir" data-msg-required="Doldurun..." id="propertiesLocation"  required="">
                                                    <option value="">Şehir Seçimi</option>
                                                      <option value="Elazığ">Elazığ</option>
                                                       <option value="İstanbul">İstanbul</option>
                                                        <option value="Malatya">Malatya</option>                                                   
                                                    <option value="Ankara">Ankara</option>
                                                   

                                                </select>
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                <input class="form-control" required="" minlength="1" name="urun_fiyataz" placeholder="Fiyat en az" type="text">
                                            </div>
                                            <br>
                                              <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="urun_fiyatcok" placeholder="Fiyat en çok" type="text">
                                            </div>
                                            <br>

                                            <!--burdan düzenle-->

                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="oda_sayisi" placeholder="Oda sayısı" type="text">
                                            </div>
                                            <br>

                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="metrekare_az" placeholder="Brüt m2 Aralığı en az" type="text">
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="metrekare_cok" placeholder="Brüt m2 Aralığı en fazla" type="text">
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="daire_kati" placeholder="Dairenin Katı" type="text">
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="bina_katsayisi" placeholder="Bina kat sayısı" type="text">
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="bina_yasi" placeholder="Bina Yaşı" type="text">
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                  <input class="form-control" required="" minlength="1" name="banyo_sayisi" placeholder="Banyo sayısı" type="text">
                                            </div>
                                            <br>
                                             <div class="form-control-custom mb-md">
                                                <select class="form-control text-uppercase font-size-sm" name="isinma" data-msg-required="Doldurun..." id="propertiesLocation"  required="">
                                                    <option value="">Isınma</option>
                                                      <option value="isitma_yok">Isıtma yok</option>
                                                       <option value="Dogalgaz">Doğalagaz sobalı</option>
                                                        <option value="Gunes_enerjisi">Güneş enerjisi</option>                                                   
                                                    <option value="jeotermik">Jeotermik</option>
                                                    <option value="Merkezi_dogalgaz">Merkezi doğalgaz</option>
                                                      <option value="Merkezi_fueloil">Merkezi fueloil</option>
                                                       <option value="kat_kaloriferi">Kat kaloriferi</option>
                                                        <option value="klimali">Klimalı</option>                                                   
                                                    <option value="kombi_komur">Kombi kömür</option>
                                                    <option value="kombi_dogalgaz">Kombi doğalgaz</option>
                                                      <option value="sobali">Sobalı</option>
                                                       <option value="yerden_isitmali">Yerden ısıtmalı</option>
                                                </select>
                                            </div>
                                            <br> 
                                            <div class="form-control-custom mb-md">
                                            <input type="submit" value="Emlak Ara" name="emlakara" class= " fa fa-comment-o  btn-lg btn-block text-uppercase font-size-sm">

                                        </div>
                                    </form>

            <ul class="sidebar-categories-list">

            
            </ul>
        </div>
    </div>
</div>
