
<?php 
require_once 'header.php'; 
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



$urunsor=$db->prepare("SELECT urun.*,kullanici.* FROM urun INNER JOIN kullanici ON urun.kullanici_id=kullanici.kullanici_id where urun_id=:id and urun_durum=:durum");
$urunsor->execute(array(
  'id' => $_GET['urun_id'],
  'durum' => 1
));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
?>

<?php
	if (isset($_SESSION['userkullanici_mail'])) {
		$ip = GetIP();	
		$gecmis=$db->prepare("SELECT * from gecmis_urun where musteri_ip=:ip");
		$gecmis->execute(array(
		  'ip' =>$ip
		));

		$gecmisurun=$gecmis->fetch(PDO::FETCH_ASSOC);
		if (!isset($gecmisurun["id"])) {
			$gecmiskayit=$db->prepare("INSERT INTO gecmis_urun SET
						musteri_ip=:musteri_ip,
						urun_id=:urun_id
						");
					$insert=$gecmiskayit->execute(array(
						'musteri_ip' => $ip,
						'urun_id' => $uruncek['urun_id']
					));
		}else{
			$gecmisguncelle=$db->prepare("UPDATE gecmis_urun SET
		urun_id=:urun_id
		WHERE musteri_ip=:musteri_ip
						");
					$insert=$gecmisguncelle->execute(array(
						'musteri_ip' => $ip,
						'urun_id' => $uruncek['urun_id']
					));

		}

	}
?>

			<div role="main" class="main">
				
				<section class="page-header page-header-light page-header-more-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1><?php echo $uruncek['urun_ad']?></h1>
								<ul class="breadcrumb breadcrumb-valign-mid">
									<!--<li><a href="demo-real-estate.html">Home</a></li>
									<li><a href="demo-real-estate-properties.html">Properties</a></li>-->
									<li class="active">Detay</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pb-xl pt-md">
						<div class="col-md-9">
									
							<div class="row">
								<div class="col-md-7">

									<span class="thumb-info-listing-type thumb-info-listing-type-detail background-color-secondary text-uppercase text-color-light font-weight-semibold p-sm pl-md pr-md">
										İlan Resim
									</span>
									<!-- <div class="single-banner">
                        <img src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive">
                    </div>-->

									<div class="thumb-gallery">
										<div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
											<div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
												<div>
													<a href="<?php echo $uruncek['urunfoto_resimyol']?>">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
															<span class="thumb-info-wrapper font-size-xl">
																<img alt="Property Detail" src="<?php echo $uruncek['urunfoto_resimyol']?>" class="img-responsive">
																<span class="thumb-info-title font-size-xl">
																	<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
												<div>
													<a href="img/demos/real-estate/listings/listing-detail-2.jpg">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
															<span class="thumb-info-wrapper font-size-xl">
																<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-2.jpg" class="img-responsive">
																<span class="thumb-info-title font-size-xl">
																	<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
												<div>
													<a href="img/demos/real-estate/listings/listing-detail-3.jpg">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
															<span class="thumb-info-wrapper font-size-xl">
																<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-3.jpg" class="img-responsive">
																<span class="thumb-info-title font-size-xl">
																	<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
												<div>
													<a href="img/demos/real-estate/listings/listing-detail-4.jpg">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
															<span class="thumb-info-wrapper font-size-xl">
																<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-4.jpg" class="img-responsive">
																<span class="thumb-info-title font-size-xl">
																	<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
											</div>
										</div>

										<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
											<div>
												<img alt="Property Detail" src="<?php echo $uruncek['urunfoto_resimyol']?>" class="img-responsive cur-pointer">
											</div>
											<div>
												<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-2-thumb.jpg" class="img-responsive cur-pointer">
											</div>
											<div>
												<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-3-thumb.jpg" class="img-responsive cur-pointer">
											</div>
											<div>
												<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-4-thumb.jpg" class="img-responsive cur-pointer">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-5">
									
									<table class="table table-striped">
										<colgroup>
											<col width="35%">
											<col width="65%">
										</colgroup>
										<tbody>
											<tr>
												<td class="background-color-primary text-light pt-md">
													 İlan Numarası
												</td>
												<td class="font-size-xl font-weight-bold pt-sm pb-sm background-color-primary text-light">
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
												<td>
													İlan Fiyat
												</td>
												<td>
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


									<hr class="solid tall">

									<h4 class="mt-md mb-md">Features</h4>

									<ul class="list list-icons list-secondary row m-none">
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Air conditioning <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="+ Central Heating"><i class="fa fa-info-circle"></i></a></li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Home Theater</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Central Heating</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Laundry</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Balcony</li>
										<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Storage</li>
										<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Garage</li>
										<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Yard</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Electric Water Heater</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Deck</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Gym</li>
										<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Ocean View</li>
									</ul>

									<hr class="solid tall">

									<h4 class="mt-md mb-md" id="map">Map Location</h4>
									<div id="googlemaps" class="google-map m-none mb-xlg"></div>

								</div>
							</div>

						</div>
						   <div class="sidebar-item-inner">
                                                    <h3 class="sidebar-item-title">İlan Sahibi</h3>
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
					</div>

				</div>
					


		

		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto Real Estate</strong>",
				icon: {
					image: "img/demos/real-estate/pin.png",
					iconsize: [36, 36],
					iconanchor: [36, 36]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Create an array of styles.
			var mapColor = "#cfa968";

			var styles = [{
				stylers: [{
					hue: mapColor
				}]
			}, {
				featureType: "road",
				elementType: "geometry",
				stylers: [{
					lightness: 0
				}, {
					visibility: "simplified"
				}]
			}, {
				featureType: "road",
				elementType: "labels",
				stylers: [{
					visibility: "off"
				}]
			}];

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
<?php include "footer.php" ?>

