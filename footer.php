

<?php 

if (basename($_SERVER['PHP_SELF'])==basename(__FILE__)) {
    
    exit("Bu sayfaya erişim yasak");
}

 ?>
<!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">İletişim</h3>
                                    <ul class="corporate-address">
                                        
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $ayarcek['ayar_gsm'] ?></li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $ayarcek['ayar_tel'] ?></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $ayarcek['ayar_mail'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3  class="title-bar-left title-bar-footer">Bize Katılın</h3>
                                    <ul class="featured-links">
                                        <li>
                                            <ul>
                                                <li><a href="index.php">Anasayfa</a></li>
                                                  <li><a href="hakkimizda.php">Hakkımızda</a></li>
                                                    <li><a href="iletisim.php">İletişim</a></li>
                                                
                                               
                                            </ul>
                                        </li>
                                    </ul>                             
                                </div>
                            </div>
                          
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Bizi takip edin</h3>
                                    <ul class="footer-social">
                                        <li><a href="<?php echo $ayarcek['ayar_facebook'] ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $ayarcek['ayar_twitter'] ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $ayarcek['ayar_youtube'] ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $ayarcek['ayar_google'] ?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <p><?php echo $ayarcek['ayar_author'] ?></p>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        <!-- Main Body Area End Here -->
        <!-- jquery-->  
        <script src="js\jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js\plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="js\bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="js\wow.min.js"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor\OwlCarousel\owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="js\jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js\jquery.scrollUp.min.js" type="text/javascript"></script>

        <!-- Select2 Js -->
        <script src="js\select2.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js\jquery.counterup.min.js"></script>
        <script src="js\waypoints.min.js"></script>

        <!-- Isotope js -->
        <script src="js\isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Gridrotator js -->
        <script src="js\jquery.gridrotator.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js\main.js" type="text/javascript"></script>

        <script src="a/Vendor/jquery/jquery.min.js"></script>
        <script src="a/vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="a/Vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="a/Vendor/jquery-cookie/jquery-cookie.min.js"></script>
        <script src="a/Vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="a/Vendor/common/common.min.js"></script>
        <script src="a/Vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="a/Vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="a/Vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="a/Vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="a/Vendor/isotope/jquery.isotope.min.js"></script>
        <script src="a/Vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="a/Vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="a/Vendor/vide/vide.min.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="jss/theme.js"></script>
        
        <!-- Current Page Vendor and Views -->
        <script src="a/Vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="a/Vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="jss/views/view.contact.js"></script>

        <!-- Demo -->
        <script src="jss/demos/demo-real-estate.js"></script>
        
        <!-- Theme Custom -->
        <script src="jss/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="jss/theme.init.js"></script>


        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

    </body>
</html>
