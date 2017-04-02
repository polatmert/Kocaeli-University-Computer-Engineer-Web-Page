<?php require '../../includes/config.php'; ?>

<?php error_reporting(E_ALL ^ E_DEPRECATED);?>
<?php
$dosyaadres="";

if(isset($_FILES['file'])){

    $file=$_FILES['file'];
    //print_r($file);
    $file_name=$file['name'];
    $file_tmp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];

    $file_ext=explode('.',$file_name);
    $file_ext=strtolower(end($file_ext));


    $allowed=array('txt','jpg','png','pdf','xlsx','doc','ppt');

    if(in_array($file_ext,$allowed)){
        if($file_error===0){
            if($file_size<=2097152) {
                $file_name_new=uniqid('',true).'.'.$file_ext;
                $file_destination='uploads/'.$file_name_new;


                if(move_uploaded_file($file_tmp,$file_destination)) {
                   // echo $file_destination; dosyanın kayıt edildiği asresi gösterir
                    $dosyaadres=$file_destination;
                }

            }



        }



    }



}
/*******/
if(isset($_POST['insert'])) {
    session_start();

    $tablo = mysqli_real_escape_string($conn, $_POST['aktiftablo']);
    $duyuruB = mysqli_real_escape_string($conn, $_POST['duyuruB']);
    $icerik = mysqli_real_escape_string($conn, $_POST['icerik']);
    $yyn=$_SESSION['KullaniciID'];




    /**ekleyen kişini idsinden arama yapıp ADINI çekiyor */
    $result = $conn->query("SELECT * FROM personel WHERE KullaniciID='$yyn' ");
    $row = $result->fetch_array(MYSQLI_BOTH);
    $yayinciAD=$row['Ad'];

    $query="INSERT INTO $tablo(baslikB,icerikB,yayinlayanB,yayiID,dosyaB)VALUES('$duyuruB','$icerik','$yayinciAD','$yyn','$dosyaadres')";

    if(mysqli_query($conn,$query))
    {
        echo "KAYITLAR BAŞARIYLA EKLENDİ";
    }
    else
        {
        echo "Hata :".$query.mysqli_error($conn);
        }
    mysqli_close($conn);
}

echo"<br><h2>10 Saniye Sonra Bir Önceki Sayfaya Yönlendireleceksiniz...</h2>";
Header("Refresh: 10; url=ekleme.php");
echo"<h3>Beklemek istemiyorsanız...  <a href='ekleme.php'>Geri Dön..</a></h3>";






?>