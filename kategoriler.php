<?php 
require_once 'header.php'; 

?>
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">

        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Product Page Grid Start Here -->
<div class="product-page-list bg-secondary section-space-bottom">                
    <div class="container">
        <div class="row">                        
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                <div class="inner-page-main-body">
                    <div class="page-controls">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                <div class="page-controls-sorting">
                                    <div class="dropdown">
                                        <!--<button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<i class="fa fa-sort" aria-hidden="true"></i></button>-->
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <div class="layout-switcher">
                                    <ul>
                                        <!--<li><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>-->    
                                        <li class="active"><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active clear products-container" id="list-view">
                            <div class="product-list-view">

                              


                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <ul class="pagination-align-left">

                                                                                            <?php

                                                                                            $s=0;

                                                                                            while ($s < $toplam_sayfa) {

                                                                                                $s++; ?>

                                                                                                <?php

                                                                                                if (!empty($_GET['kategori_id'])) { 

                                                                                                    if ($s==$sayfa) {?>

                                                                                                    <li class="active"><a href="kategoriler-<?php echo $_GET['sef']; ?>-<?php echo $_GET['kategori_id'] ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>



                                                                                                    <?php } else {?>



                                                                                                    <li><a href="kategoriler-<?php echo $_GET['sef']; ?>-<?php echo $_GET['kategori_id'] ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>


                                                                                                    <?php   }


                                                                                                } else {


                                                                                                    if ($s==$sayfa) {?>



                                                                                                    <li><a style="background-color: #C84C3C; color:white;" href="kategoriler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>


                                                                                                    <?php } else {?>

                                                                                                    <li><a href="kategoriler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>




                                                                                                    <?php   }


                                                                                                }

                                                                                            }

                                                                                            ?>

                                                                                        </ul>
                                                                                    </div>  
                                                                                </div>
                                                                            </div>
                                                                        </div>                               
                                                                    </div>                                
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">

                                                                <?php require_once 'sidebar.php' ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Page Grid End Here -->
                                                <?php 
                                                require_once 'footer.php'; 

                                                ?>