<?php include("includes/config.php")?>
<?php include("includes/header.php")?>
<?php include("includes/functions.php")?>


<?php if(@$_GET["page"]>1){}else{include("includes/slider.php");}?>
<!--slider sadece ilk sayfada görünür-->

<!--arama icin script-->


<?php error_reporting(E_ALL ^ E_NOTICE); ?>

    	    <div class="row">
                <div class="col-sm-12  col-md-5 col-lg-offset-1 col-lg-5" >
                    <div class="GENELDUYURU">
                        <?php
                            genel_duyuru_sayfasi($_GET[page]);
                            if($_GET[page])
                            {
                                }
                         ?>
                    </div>
                </div><!--col sol sonu-->


                    <div class="col-sm-12  col-md-6  col-lg-6" >
                        <div class="col-sm-12 col-md-12 col-lg-12">
                                <form method="post" action="arama.php">
                                    <fieldset >
                                            <div class="form-group" style="margin-top: 110px;">
                                                <input class="alert alert-info" name="arama" placeholder="Aranacak Kelime" style="width:40%;"  >&nbsp;&nbsp;&nbsp;
                                                <input type="submit" name="submit" class="btn btn-outline btn-primary" value="ARA" style="width: 150px; ">
                                                <i class="fa fa-search" aria-hidden="true" aria-setsize=50"></i>

                                            </div>


                                    </fieldset>

                                </form>
                            </div>
                            
                       <div class="col-sm-12 col-md-12 col-lg-12">
                       
                            <a href="http://www.kocaeli.edu.tr/duyurular.php" target=_blank>  <img src="Lduyurular.png"></a>
                            
                       </div>
                            <p> &nbsp;&nbsp;   </p>
                       <div class="col-sm-12 col-md-12 col-lg-12">
                       
                             <a href="http://kutuphane.kocaeli.edu.tr/anasayfa.php" target=_blank><img src="LKutuphanemm.png"> </a>                   
                       </div><p> &nbsp;&nbsp;   </p>
                       
                       <div class="col-sm-12 col-md-12 col-lg-12">
                       
                              <a href="http://bilsis.kocaeli.edu.tr/" target=_blank><img src="Lobs.png"></a>                 
                             
                       </div>    <p> &nbsp;&nbsp;   </p>
                            
                        </div>
                </div>




            <div class="row">

                <div class="col-xs-12  col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5" >
                    <div class="BOLUMDUYURU">
                        <?php   bolum_duyuru_sayfasi($_GET[page2]);

                        if($_GET[page2])
                        {
                            
                        }

                        ?>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-5  col-lg-5">
                    <div class="HABERVEETKINLIK">
                        <?php   haber_etkinlik_duyuru_sayfasi($_GET[page3]);

                        if($_GET[page3])
                        {

                        }

                        ?>
                    </div>
                </div><!--haberler ve etkinlikelr-->
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="footer">
                        <?php include("includes/footer.php  ") ?>
                    </div>
                </div><!--2.row sonu footer bitis-->
            </div>





        <!-- /.yorum satirı -->




