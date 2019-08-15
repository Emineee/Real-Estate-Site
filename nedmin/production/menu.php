<?php 

include 'header.php'; 
include '../netting/baglan.php';
if(isset ($_POST['arama'])){
  $aranan=$_POST['aranan'];
  $menusor=$db->prepare("select * from menu where menu_ad LIKE '%$aranan%' order by menu_id ASC limit 25");
$menusor->execute();
$say=$menusor->rowcount();

}
else{
 
  $menusor=$db->prepare("select * from menu  order by menu_sira ASC limit 25");
$menusor->execute();
$say=$menusor->rowcount();
}
//Belirli veriyi seçme işlemi

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="col-md-6">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  <form action=" " method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara!</button>
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menü İşlemleri<small>

              <?php 
              echo $say."Kayıt listelendi..";  

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="menu-ekle.php"><button class="btn btn-success btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i>Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                 
                  <th class="column-title text-center">Menü Ad</th>
                  <th  class="column-title text-center">Üst Menü</th>
                  <th  class="column-title text-center">Menü Sıra</th>
                  <th  class="column-title text-center">Menü Durum</th>
                  <th width="80" class="column-title"></th>
                  <th width="80" class="column-title"></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>

                 <td  class="text-center"><?php echo  $menucek['menu_ad'] ?></td>
                  <td  class="text-center" ><?php echo  $menucek['menu_ust'] ?></td>
                 
                 <td  class="text-center" ><?php echo  $menucek['menu_sira'] ?></td>
               

                 <td class="text-center"><?php 

                  if ($menucek['menu_durum']==1) {?>

                  <button class="btn btn-success btn-xs">Aktif</button>

                  <!--

                  success -> yeşil
                  warning -> turuncu
                  danger -> kırmızı
                  default -> beyaz
                  primary -> mavi buton

                  btn-xs -> ufak buton 

                -->

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasif</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button style="width: 80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></center></td>
            <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok&menu_resimyol=<?php echo $menucek['menu_resimyol'] ?>"><button style="width: 80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i>Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
