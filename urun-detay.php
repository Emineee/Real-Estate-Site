<?php 
require_once 'header.php'; 

$urunsor=$db->prepare("SELECT urun.*,kullanici.* FROM urun INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_id=:id and urun_durum=:durum");
$urunsor->execute(array(
  'id' => $_GET['urun_id'],
  'durum' => 1
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
?>

<div class="inner-banner-area">

   

<div class="pagination-area bg-secondary">

    <div class="container">

        <div class="pagination-wrapper">

        </div>
    </div>  
</div> 



<div class="product-details-page bg-secondary">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="inner-page-main-body">
                    <h2 class="title-default">İlan Detay</h2>  
                    <div class="single-banner">
                        <img src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive">
                    </div>  


                                                 
                                            </div>
                                        </div>


                                      

                                           <div class="sidebar-item">
                                                <div class="sidebar-item-inner">
                                                    <h3 class="sidebar-item-title">Satıcı</h3>
                                                    <div class="sidebar-author-info">
                                                        <img style="width: 72px; height: 72px;" src="<?php echo $uruncek['kullanici_magazafoto'] ?>" alt="product" class="img-responsive">
                                                        <div class="sidebar-author-content">
                                                            <h3><?php echo $uruncek['kullanici_ad']." ".substr($uruncek['kullanici_soyad'],0,1) ?>.</h3>
                                                            <a href="satici-<?=seo($uruncek['kullanici_ad']."-".$uruncek['kullanici_soyad'])."-".$uruncek['kullanici_id'] ?>" class="view-profile">Profil Sayfası</a>
                                                        </div>
                                                    </div>
                                                    <ul class="sidebar-badges-item">
                                                        <?php 

                                                        $urunsay=$db->prepare("SELECT COUNT(kullanici_idsatici) as say FROM siparis_detay where kullanici_idsatici=:id");
                                                        $urunsay->execute(array(
                                                            'id' => $uruncek['kullanici_id']
                                                        ));

                                                        $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);



                                                        if ($saycek['say']>1 and $saycek['say']<=9) {?>

                                                        <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>

                                                        <?php }  else if ($saycek['say']>9 and $saycek['say']<=99) {?>

                                                        <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>

                                                        <?php }  else if ($saycek['say']>99 and $saycek['say']<=999) {?>

                                                        <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>

                                                        <?php }  else if ($saycek['say']>999 and $saycek['say']<=9999) {?>

                                                        <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>

                                                        <?php }  else if ($saycek['say']>9999) {?>

                                                        <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>
                                                        <li><img src="img\profile\badges5.png" alt="badges" class="img-responsive"></li>

                                                        <?php }?>
                                                    </ul>
                                                </div>

            <div role="main" class="main">
                
            

                <div class="container">

                    <div class="row pb-xl pt-md">
                        <div class="col-md-9">
                                    
                         
                                <div class="col-md-5">
                                    
                                    <table class="table table-striped">
                                        <colgroup>
                                            <col width="35%">
                                            <col width="65%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    İlan Numarası
                                                </td>
                                                <td>
                                                    <?php echo $uruncek["urun_id"];?>
                                                </td>
                                            </tr>
                                               <tr>
                                                <td>
                                                   İlan verilme tarihi
                                                </td>
                                                <td>
                                                    <?php echo $uruncek["urun_zaman"];?>
                                                </td>
                                            </tr>
                                           

                                            <tr>
                                                <td class="background-color-primary text-light pt-md">
                                                   İlan Fiyat
                                                </td>
                                                <td class="font-size-xl font-weight-bold pt-sm pb-sm background-color-primary text-light">
                                                    <?php echo $uruncek['urun_fiyat'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   İlan Durum
                                                </td>
                                                <td>
                                                    <?php echo $uruncek["urun_dur"];?>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                   İlan Şehir
                                                </td>
                                                <td>
                                                    <?php echo $uruncek["urun_sehir"];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    İlan Adres
                                                </td>
                                                <td>
                                                   <?php echo $uruncek["urun_adres"];?><br><a href="#map" class="font-size-sm" data-hash data-hash-offset="100">(Map Location)</a>
                                                </td>
                                            </tr>
                                               <tr>
                                                <td>
                                                  İlan Detay
                                                </td>
                                                <td>
                                                    <?php echo $uruncek["urun_detay"];?>
                                                </td>
                                            </tr>
                                         
                                          
                                          
                                           
                                           
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                            
                            </div>

                        </div>
                        <div class="col-md-3">
                           
                        </div>
                    </div>

                </div>


                                        </div> 


                                            </div> 
                                     
                                     
                                        
                                    </div>
                                </div>

                            </div>



                   


                            <?php 
                            require_once 'footer.php'; 
                            ?>