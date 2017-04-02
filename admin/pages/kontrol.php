<?php

$db_adres="localhost";
$db_user="root";
$db_pass="";
$db_tablo="bilgisayarkocaeli";

$baglan = new mysqli($db_adres,$db_user,$db_pass,$db_tablo);

$messErr_connectionDatabaseFailed = "Hata : Bağlantı sağlanamadı.";


if (!$baglan) {
    printf($messErr_connectionDatabaseFailed);
    printf("<br />");
}
else {


    if(isset($_GET['submit'])) {
        if (!empty($_GET['kullanici']) && !empty($_GET['sifre'])) {

            $kullanici = $_GET['kullanici'];
            $sifre = $_GET['sifre'];

            $query=mysqli_query($baglan," SELECT  * FROM personel WHERE KullaniciID='".$kullanici."' AND Sifre='".$sifre."' ");
            $numrows = mysqli_num_rows($query);

            if ($numrows != 0)
            {
                while ($row = mysqli_fetch_assoc($query))
                {
                    $dbbkullanici=$row['kullanici'];
                    $dbbsifre=$row['sifre'];

                }
                if ($kullanici==$dbbkullanici && $sifre==$dbbsifre)
                {

                    session_start();
                    $_SESSION['sess_kullanici'] = $kullanici;
                    header("Location: ekleme.php");
                }
            }
            else
            {
                echo "Kullanici adi veya şifre yanlış bro";
            }
        }
        else
        {
            echo "Lütfen kullanıcı numarası ve şifreyi boş bırakmayınız";
        }


    }

}



?>