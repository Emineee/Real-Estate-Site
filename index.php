<?php 
require_once 'header.php'; 


?>
<?php include 'slider.php';?>


<!-- Header Area End Here -->
<!-- Main Banner 1 Area Start Here -->


<div class="newest-products-area bg-secondary section-space-default">                
    <div class="container">
        <br>


        <h2 class="title-default">SATILIK VE KİRALIK GAYRİ MENKULLER</h2>
        
        

    </div>
    


    <div class="container-fluid" id="isotope-container">
        <div class="isotope-classes-tab isotop-box-btn-white"> 




        </div>

        <div class="row featuredContainer">


          <?php
            function GetIP(){
                 if(getenv("HTTP_CLIENT_IP")) {
                 $ip = getenv("HTTP_CLIENT_IP");
                 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
                 $ip = getenv("HTTP_X_FORWARDED_FOR");
                 if (strstr($ip, ',')) {
                 $tmp = explode (',', $ip);
                 $ip = trim($tmp[0]);
                 }
                 } else {
                 $ip = getenv("REMOTE_ADDR");
                 }
                 return $ip;
            }




          if (isset($_SESSION['userkullanici_mail'])) {
            $urunsor=$db->prepare("SELECT urun.* FROM `etiket_urun`
                LEFT JOIN etiket ON etiket.id =etiket_urun.etiket_id
                LEFT JOIN urun ON urun.urun_id = etiket_urun.urun_id
                WHERE etiket.id IN (
                    SELECT etiket_urun.etiket_id FROM `etiket_urun`
                    LEFT JOIN etiket ON etiket.id =etiket_urun.etiket_id
                    WHERE etiket_urun.urun_id=(
                        SELECT urun_id FROM gecmis_urun WHERE musteri_ip=:musteri_ip
                    )
                )
                GROUP BY urun.urun_id");

                $urunsor->execute(array(
                        'musteri_ip' => GetIP()
                ));
          }else{
            $urunsor=$db->prepare("SELECT urun.urun_ad,urun.kategori_id,urun.urun_id,urun.urun_fiyat,urun.urunfoto_resimyol,urun.kullanici_id,urun.urun_durum,urun.urun_nedir,urun.urun_dur,urun.urun_sehir,urun.urun_onecikar,kategori.kategori_id,kategori.kategori_ad,kullanici.kullanici_id,kullanici.kullanici_ad,kullanici.kullanici_soyad,kullanici.kullanici_magazafoto FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_onecikar=:onecikar and urun_durum=:durum order by urun_zaman,urun_onecikar DESC limit 8");  
            $urunsor->execute(array(
                'onecikar' => 1,
                'durum' => 1
            ));
          }

          
          

        



        while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { ?>

        <!-- Start Ürün Anasayfa Listeleme -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 yenigelen plugins">
            <div class="single-item-grid">
                <div class="item-img">
                    <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id'] ?>"><img style="width: 451px; height: 252px;" src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive"></a>
                    <div class="trending-sign" data-tips="Öne Çıkan Ürün"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                </div>
                <div class="item-content">
                    <div class="item-info">
                         <span><?php echo $uruncek['urun_dur'] ?></a></span>
                        <h3><a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id'] ?>""><?php echo $uruncek['urun_ad'] ?></a></h3>
                       
                        <div class="price"><?php echo $uruncek['urun_fiyat'] ?> TL</div>
                    </div>
                    <div class="item-profile">
                        <div class="profile-title">
                            <div class="img-wrapper"><img style="width: 38px; height: 38px;" src="<?php echo $uruncek['kullanici_magazafoto'] ?>" alt="profile" class="img-responsive img-circle"></div>
                            <span><?php echo $uruncek['kullanici_ad']." ".$uruncek['kullanici_soyad'] ?></span>
                        </div>
                        <div class="profile-rating">
                           
                            
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <?php } ?>

    </div>

</div>
</div>    


<?php require_once 'footer.php'; ?>