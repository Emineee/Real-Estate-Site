<?php 

include 'header.php'; 


$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
  'id' => $_GET['urun_id']
  ));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

   
            <h2>İlan Detay <small>
              <br>
              <br>
              <br>

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
             </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>

<?php include 'footer.php'; ?>
