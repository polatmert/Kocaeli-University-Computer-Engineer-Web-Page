<?php require '../../includes/config.php'; ?>
<?php

if(isset($_FILES['file'])){


    $file=$_FILES['file'];
   // print_r($file);
    $file_name=$file['name'];
    $file_tmp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];

    $file_ext=explode('.',$file_name);
    $file_ext=strtolower(end($file_ext));


    $allowed=array('txt','jpg','png');

    if(in_array($file_ext,$allowed)){
        if($file_error===0){
            if($file_size<=20917152) {
                $file_name_new=uniqid('',true).'.'.$file_ext;
                $file_destination='../../img/home/'.$file_name_new;//resmine imghome a upload ediyoruz


                if(move_uploaded_file($file_tmp,$file_destination)) {
                   // echo $file_destination;
                    $dosyaadres='img/home/'.$file_name_new;//dosya adresine fotonun konumunu atıyoruz
                }

            }



        }



    }

}



if(isset($_POST['insert'])) {




    /**ekleyen kişini idsinden arama yapıp ADINI çekiyor */


    $query="INSERT INTO sliderfoto(fotoadres)VALUES('$dosyaadres')";

    if(mysqli_query($conn,$query))
    {
        echo "kayıtlar eklendi";
    }
    else
    {
        echo "Hata :".$query.mysqli_error($conn);
    }
    mysqli_close($conn);
}



echo"<br><h2>10 Saniye Sonra Bir Önceki Sayfaya Yönlendireleceksiniz...</h2>";
Header("Refresh: 10; url=sliderekleme.php");
echo"<h3>Beklemek istemiyorsanız...  <a href='ekleme.php'>Geri Dön..</a></h3>";




?>