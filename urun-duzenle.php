
<?php 

require_once 'header.php'; 

islemkontrol();

$urunsor=$db->prepare("SELECT * FROM urun where kullanici_id=:kullanici_id and urun_id=:urun_id order by urun_zaman DESC");
$urunsor->execute(array(
  'kullanici_id' => $_SESSION['userkullanici_id'],
  'urun_id' => $_GET['urun_id']
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

?>



<!-- Header Area End Here -->

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
  <div class="container">
    <div class="pagination-wrapper">

    </div>
  </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Settings Page Start Here -->
<div class="settings-page-area bg-secondary section-space-bottom">
  <div class="container">



    <div class="row settings-wrapper">


      <?php require_once 'hesap-sidebar.php' ?>


      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 

       <?php 

       if ($_GET['durum']=="hata") {?>

       <div class="alert alert-danger">
        <strong>Hata!</strong> İşlem Başarısız
      </div>                   

      <?php } else if ($_GET['durum']=="ok") {?>

      <div class="alert alert-success">
        <strong>Bilgi!</strong> Kayıt Başarılı
      </div>                   

      <?php }
      ?>


      <form action="nedmin/netting/adminislem.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="personal-info-form">


        <div class="settings-details tab-content">
          <div class="tab-pane fade active in" id="Personal">
            <h2 class="title-section">İlan Düzenle</h2>
            <div class="personal-info inner-page-padding"> 


              <div class="form-group">
                <label class="col-sm-3 control-label">Mevcut Fotoğraf</label>
                <div class="col-sm-9">
                 <img width="200" src="<?php echo $uruncek['urunfoto_resimyol']; ?>">
               </div>
             </div>
             


             <div class="form-group">
              


            <form action="nedmin/netting/adminislem.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="personal-info-form">
          <?php 
          $urunsor=$db->prepare("SELECT urun.oda_sayisi,urun.bina_kati,urun.daire_kati,urun.bina_yasi,urun.banyo_sayisi,urun.isinma,urun.daire_metrekare, urun.urun_adres ,urun.urun_ad,urun.kategori_id,urun.urun_id,urun.urun_fiyat,urun.urunfoto_resimyol,urun.kullanici_id,urun.urun_dur,urun.urun_nedir,urun.urun_sehir,urun.urun_durum,urun.urun_onecikar,kategori.kategori_id,kategori.kategori_ad,kullanici.kullanici_id,kullanici.kullanici_ad,kullanici.kullanici_soyad,kullanici.kullanici_magazafoto FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_durum=:durum order by urun_zaman,urun_onecikar DESC limit 8");
          
        



        ?>
              <label class="col-sm-3 control-label">Fotoğraf</label>
              <div class="col-sm-9">
                <input class="form-control" name="urunfoto_resimyol" id="first-name"  type="file">
              </div>
            </div>


           <!-- <div class="form-group">
              <label class="col-sm-3 control-label">Kategori</label>
              <div class="col-sm-9">
                <div class="custom-select">
                  <select name="kategori_id"  class='select2'>

                    <?php 
                    $kategorisor=$db->prepare("SELECT * FROM kategori order by kategori_sira ASC");
                    $kategorisor->execute();

                    while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                      
                      <option <?php if ($kategoricek['kategori_id']==$uruncek['kategori_id']) { echo "selected"; } ?> value="<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></option>

                      <?php } ?>

                    </select>
                  </div>
                </div>
              </div>-->


              <div class="form-group">
                <label class="col-sm-3 control-label">İlan Adı</label>
                <div class="col-sm-9">
                  <input class="form-control" required="" name="urun_ad" id="first-name" value="<?php echo $uruncek['urun_ad'] ?>" type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">İlan adres</label>
                <div class="col-sm-9">
                  <input class="form-control" required="" name="urun_adres" id="first-name" value="<?php echo $uruncek['urun_adres'] ?>" type="text">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">İlan Açıklama</label>
                <div class="col-sm-9">

                  <textarea  class="ckeditor" id="editor1" name="urun_detay" ><?php echo $uruncek['urun_detay'] ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>


            <div class="form-group">
              <label class="col-sm-3 control-label">İlan Fiyat</label>
              <div class="col-sm-9">
                <input class="form-control" required="" name="urun_fiyat" id="first-name" value="<?php echo $uruncek['urun_fiyat'] ?>" type="text">
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">İlan Şehir</label>
              <div class="col-sm-9">
                <input class="form-control" required="" name="urun_sehir" id="first-name" value="<?php echo $uruncek['urun_sehir'] ?>" type="text">
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">İlan Durum</label>
              <div class="col-sm-9">
                <input class="form-control" required="" name="urun_dur" id="first-name" value="<?php echo $uruncek['urun_dur'] ?>" type="text">
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">İlan Türü</label>
              <div class="col-sm-9">
                <input class="form-control" required="" name="urun_nedir" id="first-name" value="<?php echo $uruncek['urun_nedir'] ?>" type="text">
              </div>
            </div>
            <!-- ---- ----- ------ ----- ----- -- -- -- - - -- - - -- - - -- -- - -- -->

              <div class="form-group">
                                    <label class="col-sm-3 control-label">Oda Sayısı</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="oda_sayisi" id="first-name" placeholder="Oda Sayısı giriniz..." type="text">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Daire Katı</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="daire_kati" id="first-name" placeholder="Daire Kat Sayısı..." type="text">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Bina Kat Sayısı</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="bina_kati" id="first-name" placeholder="Bina Kat Sayısı..." type="text">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Bina Yaşı</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="bina_yasi" id="first-name" placeholder="Bina Yaşı..." type="text">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Banyo Sayısı</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="banyo_sayisi" id="first-name" placeholder="Banyo Sayısı..." type="text">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Isınma Türü</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="isinma" id="first-name" placeholder="Isınma Türü..." type="text">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Daire Metrekare</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" required="" name="daire_metrekare" id="first-name" placeholder="Daire Metrekare..." type="text">
                                    </div>
                                </div>






            <input type="hidden" value="<?php echo $uruncek['urun_id'] ?>" name="urun_id">
            <input type="hidden" value="<?php echo $uruncek['urunfoto_resimyol'] ?>" name="eski_yol">




            <div class="form-group">

              <div align="right" class="col-sm-12">
               <button class="update-btn" name="magazaurunduzenle" id="login-update">İlan Düzenle</button>

             </div>
           </div>        



         </div> 
       </div> 



     </div> 

   </form> 
 </div>  
</div>  
</div>  
</div> 
<!-- Settings Page End Here -->


<?php require_once 'footer.php'; ?>

<script type="text/javascript">

  $(document).ready(function(){


    $("#kullanici_tip").change(function(){


      var tip=$("#kullanici_tip").val();

      if (tip=="PERSONAL") {


        $("#kurumsal").hide();
        $("#tc").show();



      } else if (tip=="PRIVATE_COMPANY") {

        $("#kurumsal").show();
        $("#tc").hide();

      }


    }).change();



  });

</script>