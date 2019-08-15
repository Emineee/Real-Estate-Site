
<?php
ob_start();
session_start();

 include "header.php";
?>
			<div role="main" class="main">
				
				<section class="page-header page-header-light page-header-more-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Satılık <span>Ve Kiralık emlaklar listeleniyor...</h1>
								<ul class="breadcrumb breadcrumb-valign-mid">
									
									
								</ul>
							</div>
						</div>
						<div class="row mt-lg">
							<div class="col-md-12">


								
							</div>
						</div>
					</div>
				</section>

				<div class="container">


					<div class="row mb-lg">

						<ul class="properties-listing sort-destination p-none">
							<ul class="properties-listing sort-destination p-none">
							<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
								<div class="listing-item">
									<?php include "sidebar.php";?>
								</div>
							</li>
							  <?php 
							  
          $urunsor=$db->prepare(" SELECT urun.oda_sayisi,urun.daire_kati,urun.bina_yasi,urun.bina_kati,urun.banyo_sayisi,urun.daire_metrekare,urun.isinma, urun.urun_detay,urun.urun_adres ,urun.urun_ad,urun.kategori_id,urun.urun_id,urun.urun_fiyat,urun.urunfoto_resimyol,urun.kullanici_id,urun.urun_dur,urun.urun_nedir,urun.urun_sehir,urun.urun_durum,urun.urun_onecikar,kategori.kategori_id,kategori.kategori_ad,kullanici.kullanici_id,kullanici.kullanici_ad,kullanici.kullanici_soyad,kullanici.kullanici_magazafoto FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id  where urun_durum=:durum and urun_dur=:urun_dur and urun_nedir=:urun_nedir and urun_sehir=:urun_sehir and oda_sayisi=:oda_sayisi and daire_kati=:daire_kati and bina_yasi=:bina_yasi and bina_kati=:bina_kati and banyo_sayisi=:banyo_sayisi and daire_metrekare=:daire_metrekare and isinma=:isinma order by urun_zaman,urun_onecikar DESC limit 8");
          $urunsor->execute(array(
            'durum' => 1,
            'urun_dur'=>$_POST['urun_dur'],
            'urun_nedir'=>$_POST['urun_nedir'],
            'urun_sehir'=>$_POST['urun_sehir'],
            'oda_sayisi'=>$_POST['oda_sayisi'],
            'daire_kati'=>$_POST['daire_kati'],
            'bina_yasi'=>$_POST['bina_yasi'],
              'bina_kati'=>$_POST['bina_kati'],
                'banyo_sayisi'=>$_POST['banyo_sayisi'],
                  'daire_metrekare'=>$_POST['daire_metrekare'],
                    'isinma'=>$_POST['isinma']


        ));

        



        while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
             if($uruncek['urun_fiyat']>$_POST['urun_fiyataz'] and $uruncek['urun_fiyat']< $_POST['urun_fiyatcok'])
             { ?>
							  
			


							<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
								<div class="listing-item">
									<a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id'] ?> "class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-none">
												<img style="width: 262px ;height: 200px"  src="<?php echo $uruncek['urunfoto_resimyol']?>" class="img-responsive" alt="">
												<span style="background-color:black !important;" class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
													<?php echo $uruncek['urun_dur']?>
												</span>
											</span>
											<br>
											<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
												<?php echo $uruncek["urun_fiyat"]?>TL
												<i class="fa fa-caret-right text-color-secondary pull-right"></i>
											</span>
											<br>
											<span class="custom-thumb-info-title b-normal p-lg">
												<span class="thumb-info-inner text-md"><?php echo $uruncek["urun_ad"]?> </span>
												<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
													
													
													
												</ul>
											</span>
										</span>
									</a>
								</div>
							</li>
						<?php } }?>
							
						</ul>
					</div>

					<div class="row mt-lg mb-xlg">
						<div class="col-md-12 center">
							<ul class="pagination">
								<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>

				</div>


				<?php include "footer.php" ?>