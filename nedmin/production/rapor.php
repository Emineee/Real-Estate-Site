<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$mesajsor=$db->prepare("SELECT * FROM mesaj");
$mesajsor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Mesaj Raporlama <small>,
            </small></h2>
           
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Mesaj İd</th>
                  <th>Mesaj Zaman</th>
                  <th>Mesaj Detay</th>
                  <th>Mesaj Gelen Kullanıcı</th>
                  <th>Mesaj Gönderen Kullanıcı</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $mesajcek['mesaj_id'] ?></td>
                  <td><?php echo $mesajcek['mesaj_zaman'] ?></td>
                  <td><?php echo $mesajcek['mesaj_detay'] ?></td>
                  <td><?php echo $mesajcek['kullanici_gel'] ?></td>
                     <td><?php echo $mesajcek['kullanici_gon'] ?></td>
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
