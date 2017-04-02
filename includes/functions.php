<?php

function genel_duyuru_sayfasi($page)
{
    $baglanti=mysqli_connect("localhost", "root", "", "bilgisayarkocaeli");
    mysqli_query($baglanti,"SET NAMES UTF8");
    $page=@$_GET["page"];
    if($page=="" || !is_numeric($page))
    {
        $page=1;
    }
    $kacar=6;
    $ksayisi=mysqli_num_rows(mysqli_query($baglanti,"select * from genelduyurular"));
    $ssayisi=ceil($ksayisi/$kacar);
    $nereden=($page * $kacar) - $kacar;

    $bul=mysqli_query($baglanti,"select * from genelduyurular order by DuyuruIDB desc limit $nereden,$kacar");
    $Gsayac=1;
    $foto = "111.png";





    echo"<div id=\"GDuyuru\" class=\"text-center\">";
	echo"<h3>Genel Duyurular</h3>";
    echo"<ul class=\"pagination\"  >";



    /**geri butonu ve aradaki ufak bosluk*/
    if($page != 1)
    {
    echo"<li><a id='pagin' href=\"index.php?page=".($page-1)."#GDuyuru\" class='fa fa-arrow-left' style='font-size:15px;'></a></li>";

    }


    if($ssayisi-2 < $page)
    {$sayfalimiti=$ssayisi;}
    else
    {$sayfalimiti=$page+2;}

    for($a=$page-2; $a<=$sayfalimiti; $a++){

        if($a==$page)
        {$lololo="active";}
        else
            $lololo="";

        if($a>0) {
            echo "<li><a href=\"index.php?page=$a#GDuyuru\"  class=$lololo >$a</a></li>";
        }
    }

    /**ileri butonu */
    if($page < $ssayisi) echo "<li><a href=\" index.php?page=".($page+1)."#GDuyuru \" class='fa fa-arrow-right' style='font-size:15px;'></a> </li>";
    echo"</ul>";
    echo"</div>";


    echo"  <div class=\"panel-group\" id=\"accordion\">";


    while($goster=mysqli_fetch_array($bul))
    {
        extract($goster);


        /**yayıncı fotosu  adresini databaseden çekiyor*/
        $arananid=$goster[yayiID];
        $fotoquery=mysqli_query($baglanti,"select * from personel WHERE KullaniciID=$arananid Limit 1");

        while($goster1=mysqli_fetch_array($fotoquery))
        {
            extract($goster1);
            $yayıncıfoto = $goster1[Foto];
        }

        /**tarih formatlama */
        setlocale(LC_TIME,'turkish');
        $tarih=strtotime($goster[tarihB]);
        $tarih=strftime('%d %B %Y',$tarih);
        $tarih= iconv('latin5','utf-8',$tarih);



        $Gsayac=$Gsayac+1;//divlerin ID'lerini belirlemek için kullanılan değişken     admin/pages/{$goster[dosyaB]}

        echo"<div class=\"panel panel-default\">";
           echo"        <div class=\"panel-heading\">
                  <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#$Gsayac\" aria-expanded=\"\">  
                          
                                <div class=\"panel panel-green\">
                                                        <div class=\"foto\" style=\"background:url($foto)\">
                                                        
                                                        
                                                        <img style='border-radius: 40px 40px 40px 40px' src='$yayıncıfoto'>
                                                        
                                                        
                                                        </div>
                                                        
                                                        <div class=\"baslik\" >
                                                        <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i>

                                                        {$goster[baslikB]}	
                                                        </div>              

                                </div>	
                            
                         </a>
                </div>
    
    
                     
                         <div id=\"$Gsayac\" class=\"panel-collapse collapse\">
                            <ul>
                            <br>
                                {$goster[icerikB]} <br>
                                
                              ";
                              if($goster[dosyaB]!="") {
                                  echo "__________________________";
                                  echo "<p></p><a href='../kou_bil/admin/pages/{$goster[dosyaB]}'>      EK DOSYA</a>";
                              }
                                 
                                echo"




                            <br>
                            </ul>
                            
                
                     </div>
                      <div class=\"panel-footer\">
                     
                                            <div class=\"yayinlayan\">     
                                             <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                           {$goster[yayinlayanB]} <br>
                                           
                                            </div>
                                            
                                            <div class=\"tarih\">
                                                   $tarih
                                                 <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                          </div>
                      </div>
    
            
     
    
    
    
           <p></p>";
        echo"</div>";

    }

    echo"</div>";

}
?>



<?php
function bolum_duyuru_sayfasi($page2)
{
    $baglanti = mysqli_connect("localhost", "root", "", "bilgisayarkocaeli");
    mysqli_query($baglanti, "SET NAMES UTF8");
    $page2 = @$_GET["page2"];
    if ($page2 == "" || !is_numeric($page2)) {
        $page2 = 1;
    }
    $kacar = 6;
    $ksayisi = mysqli_num_rows(mysqli_query($baglanti, "SELECT * FROM bolumduyurulari"));
    $ssayisi = ceil($ksayisi / $kacar);
    $nereden = ($page2 * $kacar) - $kacar;
    $bul = mysqli_query($baglanti, "select * from bolumduyurulari order by DuyuruIDB desc limit $nereden,$kacar");
    $Bsayac = 1000000;
    $foto = "111.png";


    echo "<div id=\"BDuyuru\" class=\"text-center\">";
		echo"<h3>Bölüm Duyuruları</h3>";

    echo "<ul class=\"pagination\"  >";


    /**geri butonu ve aradaki ufak bosluk*/
    if ($page2 != 1) {
        echo "<li><a id='pagin' href=\"index.php?page2=" . ($page2 - 1) . "#BDuyuru\" class='fa fa-arrow-left' style='font-size:15px;'></a></li>";

    }


    if ($ssayisi - 2 < $page2) {
        $sayfalimiti = $ssayisi;
    } else {
        $sayfalimiti = $page2 + 2;
    }

    for ($a = $page2 - 2; $a <= $sayfalimiti; $a++) {

        if ($a == $page2) {
            $lololo = "active";
        } else
            $lololo = "";

        if ($a > 0) {
            echo "<li><a href=\"index.php?page2=$a#BDuyuru\"  class=$lololo >$a</a></li>";
        }
    }

    /**ileri butonu ve aradaki ufak bosluk*/
    if ($page2 < $ssayisi) echo "<li><a href=\" index.php?page2=" . ($page2 + 1) . "#BDuyuru \" class='fa fa-arrow-right' style='font-size:15px;'></a> </li>";
    echo "</ul>";
    echo "</div>";


    echo "  <div class=\"panel-group\" id=\"accordion2\">";


    while ($goster = mysqli_fetch_array($bul)) {
        extract($goster);

        /**yayıncı fotosu  adresini databaseden çekiyor*/
        $arananid=$goster[yayiID];
        $fotoquery=mysqli_query($baglanti,"select * from personel WHERE KullaniciID=$arananid Limit 1");

        while($goster1=mysqli_fetch_array($fotoquery))
        {
            extract($goster1);
            $yayıncıfoto = $goster1[Foto];
        }


        setlocale(LC_TIME, 'turkish');
        $tarih = strtotime($goster[tarihB]);
        $tarih = strftime('%d %B %Y', $tarih);
        $tarih = iconv('latin5', 'utf-8', $tarih);


        $Bsayac = $Bsayac + 1;//divlerin ID'lerini belirlemek için kullanılan değişken

        echo "<div class=\"panel panel-default\">";
        echo "        <div class=\"panel-heading\">
                  <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#$Bsayac\" aria-expanded=\"\">  
                          
                                <div class=\"panel panel-green\">
                                                        <div class=\"foto\" style=\"background:url($foto)\">
                                                        
                                                         <img style='border-radius: 40px 40px 40px 40px' src='$yayıncıfoto'>
                                                        </div>
                                                        
                                                        <div class=\"baslik\" >
                                                        <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i>

                                                        {$goster[baslikB]}	
                                                        </div>              

                                </div>	
                            
                         </a>
                </div>
    
    
                     
                         <div id=\"$Bsayac\" class=\"panel-collapse collapse\">
                            <ul>
                            <br>
                                {$goster[icerikB]} <br>
                                
                              ";
                              if($goster[dosyaB]!="") {
                                  echo "__________________________";
                                  echo "<p></p><a href='../kou_bil/admin/pages/{$goster[dosyaB]}'>      EK DOSYA</a>";
                              }

                                echo"




                            <br>


                
                
                     </div>
                      <div class=\"panel-footer\">
                     
                                            <div class=\"yayinlayan\">     
                                             <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                           {$goster[yayinlayanB]} 
                                            </div>
                                            
                                            <div class=\"tarih\">
                                                   $tarih
                                                 <i class=\"fa fa-calendar\" aria-hidden=\"true\"> &nbsp;&nbsp;</i>
                                          </div>
                      </div>
               <p></p>";
        echo "</div>";

    }

    echo "</div>";


}
?>




<?php
function haber_etkinlik_duyuru_sayfasi($page3)
{
    $baglanti = mysqli_connect("localhost", "root", "", "bilgisayarkocaeli");
    mysqli_query($baglanti, "SET NAMES UTF8");
    $page3 = @$_GET["page3"];
    if ($page3 == "" || !is_numeric($page3)) {
        $page3 = 1;
    }
    $kacar = 6;
    $ksayisi = mysqli_num_rows(mysqli_query($baglanti, "SELECT * FROM haberlerveetkinlik"));
    $ssayisi = ceil($ksayisi / $kacar);
    $nereden = ($page3 * $kacar) - $kacar;
    $bul = mysqli_query($baglanti, "select * from haberlerveetkinlik order by DuyuruIDB desc limit $nereden,$kacar");
    $HEsayac = 2000000;
    $foto = "111.png";


    echo "<div id=\"HEDuyuru\" class=\"text-center\">";
		echo"<h3>Haber ve Etkinlikler</h3>";

    echo "<ul class=\"pagination\"  >";


    /**geri butonu ve aradaki ufak bosluk*/
    if ($page3 != 1) {
        echo "<li><a id='pagin' href=\"index.php?page3=" . ($page3 - 1) . "#HEDuyuru\" class='fa fa-arrow-left' style='font-size:15px;'></a></li>";

    }


    if ($ssayisi - 2 < $page3) {
        $sayfalimiti = $ssayisi;
    } else {
        $sayfalimiti = $page3 + 2;
    }

    for ($a = $page3 - 2; $a <= $sayfalimiti; $a++) {

        if ($a == $page3) {
            $lololo = "active";
        } else
            $lololo = "";

        if ($a > 0) {
            echo "<li><a href=\"index.php?page3=$a#HEDuyuru\"  class=$lololo >$a</a></li>";
        }
    }

    /**ileri butonu ve aradaki ufak bosluk*/
    if ($page3 < $ssayisi) echo "<li><a href=\" index.php?page3=" . ($page3 + 1) . "#HEDuyuru \" class='fa fa-arrow-right' style='font-size:15px;'></a> </li>";
    echo "</ul>";
    echo "</div>";


    echo "  <div class=\"panel-group\" id=\"accordion3\">";


    while ($goster = mysqli_fetch_array($bul)) {
        extract($goster);


        /**yayıncı fotosu  adresini databaseden çekiyor*/
        $arananid=$goster[yayiID];
        $fotoquery=mysqli_query($baglanti,"select * from personel WHERE KullaniciID=$arananid Limit 1");
            while($goster1=mysqli_fetch_array($fotoquery))
                {
                    extract($goster1);
                    $yayıncıfoto = $goster1[Foto];
                }

/**tarih formatlama*/
            setlocale(LC_TIME, 'turkish');
        $tarih = strtotime($goster[tarihB]);
        $tarih = strftime('%d %B %Y', $tarih);
        $tarih = iconv('latin5', 'utf-8', $tarih);


        $HEsayac = $HEsayac + 1;//divlerin ID'lerini belirlemek için kullanılan değişken

        echo "<div class=\"panel panel-default\">";
        echo "        <div class=\"panel-heading\">
                  <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#$HEsayac\" aria-expanded=\"\">  
                          
                                <div class=\"panel panel-green\">
                                                        <div class=\"foto\" style=\"background:url($foto)\">
                                                        <img style='border-radius:40px 40px 40px 40px' src='$yayıncıfoto'>
                                                        </div>
                                                        
                                                        <div class=\"baslik\" >
                                                        <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i>

                                                        {$goster[baslikB]}	
                                                        </div>              

                                </div>	
                            
                         </a>
                </div>
    
    
                     
                         <div id=\"$HEsayac\" class=\"panel-collapse collapse\">
                            <ul>
                                {$goster[icerikB]} <br>
                            
                
                
                
               ";
        if($goster[dosyaB]!="") {
            echo " <p> ________________________________";
            echo "<p></p><a href='../kou_bil/admin/pages/{$goster[dosyaB]}'><p></p>EK DOSYA</a>";
        }

        echo "</ul>
                
                
                
                
                     </div>
                      <div class=\"panel-footer\">
                     
                                            <div class=\"yayinlayan\">     
                                             <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                           {$goster[yayinlayanB]} 
                                            </div>
                                            
                                            <div class=\"tarih\">
                                                   $tarih
                                                 <i class=\"fa fa-calendar\" aria-hidden=\"true\"> &nbsp;&nbsp;</i>
                                          </div>
                      </div>
               <p></p>";
        echo "</div>";

    }

    echo "</div>";




}

?>

<?php


function aramafonksiyonu($abcd)
{

        echo "<a href=\"index.php?page=\" class='fa fa-arrow-left' style='font-size:25px;'></a>";
        $baglanti = mysqli_connect("localhost", "root", "", "bilgisayarkocaeli");
         mysqli_query($baglanti, "SET NAMES UTF8");

        $Asayac = 1500000;
        $foto = "111.png";

    echo "  <div class=\"panel-group\" id=\"accordion4\">";
        for ($ii = 0; $ii < 3; $ii++) {

            switch ($ii) {
                case 0: {
                    echo "<center><h4>GENEL DUYURULAR</h4></center>";
                    $bul = mysqli_query($baglanti, "select * from genelduyurular WHERE (genelduyurular.icerikB LIKE '%$abcd%') OR (genelduyurular.baslikB LIKE '%$abcd%') OR (genelduyurular.yayinlayanB LIKE '%$abcd%')  order by DuyuruIDB DESC");
                    break;
                }
                case 1: {
                    echo "<center><h4>Bolum Duyuruları</h4></center>";
                    $bul = mysqli_query($baglanti, "select * from bolumduyurulari WHERE (bolumduyurulari.icerikB LIKE '%$abcd%') OR (bolumduyurulari.baslikB LIKE '%$abcd%') OR (bolumduyurulari.yayinlayanB LIKE '%$abcd%') order by DuyuruIDB DESC");
                    break;
                }
                case 2: {
                    echo "<center><h4>Haberler ve Etkinlikler</h4></center>";
                    $bul = mysqli_query($baglanti, "select * from haberlerveetkinlik WHERE (haberlerveetkinlik.icerikB LIKE '%$abcd%') OR (haberlerveetkinlik.baslikB LIKE '%$abcd%') OR (haberlerveetkinlik.yayinlayanB LIKE '%$abcd%')  order by DuyuruIDB DESC");
                    break;

                }
            }



            while ($goster = mysqli_fetch_array($bul)) {
                extract($goster);

                /**yayıncı fotosu  adresini databaseden çekiyor*/
                $arananid=$goster[yayiID];
                $fotoquery=mysqli_query($baglanti,"select * from personel WHERE KullaniciID=$arananid Limit 1");

                while($goster1=mysqli_fetch_array($fotoquery))
                {
                    extract($goster1);
                    $yayıncıfoto = $goster1[Foto];
                }

                setlocale(LC_TIME, 'turkish');
                $trh = strtotime($goster[tarihB]);
                $tarih = iconv('latin5', 'utf-8', strftime('%d %B %Y', $trh));

                $Asayac = $Asayac + 1;//divlerin ID'lerini belirlemek için kullanılan değişken

                echo "<div class=\"panel panel-default\">";
                echo "        <div class=\"panel-heading\">
                  <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion4\" href=\"#$Asayac\" aria-expanded=\"\">  
                     
                          
                          
                          
                                <div class=\"panel panel-green\">
                                                                                  
                                                        <div class=\"foto\" style=\"background:url($foto)\">
                                                        <img style='border-radius:20px 40px 40px 40px' src='$yayıncıfoto'>

                                                        </div>
                                                                            
                                                        
                                                        <div class=\"baslik\" >
                                                       <i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i>

                                                        {$goster[baslikB]}	<br/>
                                                        </div>              

                                </div>	
                            
                         </a>
                </div>
    
    
                    
                         <div id=\"$Asayac\" class=\"panel-collapse collapse\">
                            <ul>
                                {$goster[icerikB]} <br>
                            </ul>   
                                                
                                                
                          ";
                        if($goster[dosyaB]!="") {
                            echo "________________________";
                            echo "<p></p><a href='../kou_bil/admin/pages/{$goster[dosyaB]}'>    EK DOSYA</a>";
                        }
                        echo "
                                                                
                     </div>
                      <div class=\"panel-footer\">
                     
                                            <div class=\"yayinlayan\">     
                                             <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                           {$goster[yayinlayanB]} 
                                            </div>
                                            
                                            <div class=\"tarih\">
                                                   $tarih
                                                 <i class=\"fa fa-calendar\" aria-hidden=\"true\"> &nbsp;&nbsp;</i>
                                          </div>
                      </div>
    
            </div>
        
    
    
    
           <p></p>";

            }






        }
    echo "</div>";
        /** forun sonu */

}/** fonksiyonun sonu */
?>
