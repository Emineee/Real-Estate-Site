<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
	<ul class="settings-title">
		<li class="active"><a href="javascript:void(0)" ><b>ÜYE İŞLEMLERİ</b></a></li>
		<?php 

		if ($kullanicicek['kullanici_magaza']!=2) {?>

		<li ><a href="magaza-basvuru" >İlan Başvuruları</a></li>

		<?php } ?>
		
		<li ><a href="hesabim" >Hesap Bilgilerim</a></li>
		<li><a href="adres-bilgileri" >Adres Bilgilerim</a></li>
		<li><a href="gelen-mesajlar" >Gelen Mesajlar</a></li>
		<li><a href="giden-mesajlar" >Giden Mesajlar</a></li>
		<li><a href="profil-resim-guncelle" >Profil Resim Güncelle</a></li>
		<li><a href="sifre-guncelle" >Şifre Güncelle</a></li>
		
	</ul>

	<?php 

	if ($kullanicicek['kullanici_magaza']==2) {?>

	<hr>

	<ul class="settings-title">

		<li class="active"><a href="javascript:void(0)" ><b>İLAN İŞLEMLERİ</b></a></li>
		<li ><a href="urun-ekle" >İlan Ekle</a></li>
		<li ><a href="urunlerim" >İlanlarım</a></li>
		<li><a href="sifre-guncelle" >Ayarlar</a></li>
		
	</ul>

	<?php } ?>
</div>