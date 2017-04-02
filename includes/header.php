<?php require_once("includes/config.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> <title>KOCAELİ ÜNİVERSİTEİ BİLGİSAYAR MÜHENDİSLİĞİ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link  rel="stylesheet" href="font-awesome/css/font-awesome.css" />


</head>



<!--sayfa logosu-->

<!--sayfa logosu-->
<div class="row" style=" background-color: #f1f1f1;" > <!--butun sayfanın rowu-->
    <div class="col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1  col-md-10  col-lg-10 col-lg-offset-1s " style="background-color: #F8F8F8;">

        <div class="row">
            <div class="col-xs-12  col-sm-12 col-md-12  col-lg-12"  >
                <div class='banner' align="center" >
                   <a href="index.php"> <img src="logo2.png"  style="border-radius: 5px;width: 100%;height: 180px;"/></a>
                </div>
            </div>
        </div>

<body>

<nav class="navbar navbar-default">


  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">


        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class=""><a href="index.php"><i class="fa fa-home fa-3" aria-hidden="true" style="font-size: 25px"></i><span class="sr-only"></span></a></li>
              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hakkımızda <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                     <li><a href="tarihce.php">Tarihçe</a></li>
                     <li><a href="hakkimizda.php">Hakkımızda</a></li>
                     <li><a href="misyon.php">Misyon/Vizyon</a></li>
                     <!--    <li><a href="vizyon.php">Vizyon</a></li> iptal edildi. -->
                     <li><a href="anabilimdallari.php">Ana Bilim Dallari</a></li>
                     <li><a href="programciktilari.php">Program Çıktıları</a></li>
                 </ul>
              </li>

          <li class=""><a href="yonetim.php">Yönetim <span class="sr-only"></span></a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Araştırma <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="http://bilgisayar.kocaeli.edu.tr/akilli_sistemler_lab/" target="_blank">Akıllı Sistemler Araştırma Laboratuvarı</a></li>
                  <li><a href="http://bilgisayar.kocaeli.edu.tr/comnet/" target="_blank">Bilgisayar Ağları ve Haberleşme Araştırma Laboratuvarı</a></li>
                  <li><a href="http://embedded.kocaeli.edu.tr/" target="_blank">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı </a></li>
                  <li><a href="http://ipcv.kocaeli.edu.tr/wp/" target="_blank">Görüntü İşleme Araştırma Laboratuvarı</a></li>
                  <li><a href="http://ibel.kocaeli.edu.tr/" target="_blank">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a></li>
                  <li><a href="http://yapbenzet.kocaeli.edu.tr/" target="_blank">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a></li>
                  <li><a href="projeler.php">Projeler</a></li>
              </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personel <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="o_uyeleri.php">Öğretim Üyeleri</a></li>
                  <li><a href="o_elemanlari.php">Öğretim Elemanları</a></li>
                  <li><a href="idari_personel.php">İdari Personel </a></li>
                  <li><a href="admin/pages/login.php">Sisteme Giriş</a></li>
              </ul>
          </li>


          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lisans <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="http://mf.kocaeli.edu.tr/ogrenci/formlar.php" target="_blank">Öğrenci Dilekçe ve Formları</a></li>
                  <li><a href="dersplani.php">Ders Planı / Ders İçerikleri</a></li>


                  <li><a href="dersprogramı.zip">Ders Programı</a></li>
                  <li><a href="http://bilgisayar.kocaeli.edu.tr/files/2016-2017_Danismanliklari.pdf">Akademik Danışmanlar</a></li>

                  <li><a href="a_problemleri.php">Araştırma Problemleri ve Bitirme</a></li>
                  <li><a href="http://odb.kocaeli.edu.tr/akademik_takvim.php" target="_blank">Akademik Takvim</a></li>
                  <li><a href="mudek.php">MÜDEK</a></li>

                  <li><a href="http://mf.kocaeli.edu.tr/ogrenci/staj.php" target="_blank" >Staj</a></li>
              </ul>
          </li>



          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Y.Lisans/Doktora <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="calismaalanlari.php">Çalışma Alanları</a></li>
                  <li><a href="yuksek_lisans_ders_listesi.php">Ders Listesi</a></li>
                  <li><a href="2016-2017_Guz_Lisansustu.pdf">Ders Programı</a></li>

              </ul>
          </li>

          <li class=""><a href="https://www.facebook.com/groups/25429857332/">Mezunlar<span class="sr-only">(current)</span></a></li>
          <li class=""><a href="ulasim.php">İletişim<span class="sr-only">(current)</span></a></li>
          <li class=""><a href="http://bilgisayar.kocaeli.edu.tr/koubil3d.html">3DNavi<span class="sr-only">(current)</span></a></li>



      </ul>

      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
