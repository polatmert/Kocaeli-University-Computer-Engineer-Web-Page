
<?php


function tabloGenelDuyuru(){
    require '../../includes/config.php';
    $sql="SELECT DuyuruIDB,baslikB,icerikB,DATE_FORMAT(tarihB,'%d.%m.%Y / %k:%i')AS tarih,yayinlayanB,dosyaB FROM genelduyurular";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            $DuyuruIDB=$row['DuyuruIDB'];
            $baslikB = $row['baslikB'];
            $icerikB = $row['icerikB'];
            $tarih = $row['tarih'];
            $yayinlayanB = $row['yayinlayanB'];
            $dosyaB = $row['dosyaB'];




            echo
                "<tr class=\"odd gradeX\">
<td><a href=\"sil.php?del=".($DuyuruIDB)." \" class=\"btn btn-danger\">sil</td>
<td>$yayinlayanB</td>
<td>$baslikB</td>
<td>$icerikB</td>
<td class=\"center\">$tarih</td>
<td class=\"center\">$dosyaB</td>
</tr> ";


        }
    }
}
?>




<?php
function tabloBolumduyuru(){
    require '../../includes/config.php';
$sql="SELECT DuyuruIDB,baslikB,icerikB,DATE_FORMAT(tarihB,'%d.%m.%Y / %k:%i')AS tarih,yayinlayanB,dosyaB FROM bolumduyurulari";

$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        $DuyuruIDB=$row['DuyuruIDB'];
        $baslikB = $row['baslikB'];
        $icerikB = $row['icerikB'];
        $tarih = $row['tarih'];
        $yayinlayanB = $row['yayinlayanB'];
        $dosyaB = $row['dosyaB'];

echo
"<tr class=\"odd gradeX\">
<td><a href=\"sil2.php?del=".($DuyuruIDB)." \" class=\"btn btn-warning\">sil</td>
<td>$yayinlayanB</td>
<td>$baslikB</td>
<td>$icerikB</td>
<td class=\"center\">$tarih</td>
<td class=\"center\"><img src=\"$dosyaB\"> </td>
</tr> ";


    }
}
}
?>




<?php
function tabloHaberler(){
    require '../../includes/config.php';
    $sql="SELECT DuyuruIDB,baslikB,icerikB,DATE_FORMAT(tarihB,'%d.%m.%Y / %k:%i')AS tarih,yayinlayanB,dosyaB FROM haberlerveetkinlik";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            $DuyuruIDB=$row['DuyuruIDB'];
            $baslikB = $row['baslikB'];
            $icerikB = $row['icerikB'];
            $tarih = $row['tarih'];
            $yayinlayanB = $row['yayinlayanB'];
            $dosyaB = $row['dosyaB'];

            echo
                "<tr class=\"odd gradeX\">
<td><a href=\"sil3.php?del=".($DuyuruIDB)." \" class=\"btn btn-info\">sil</td>
<td>$yayinlayanB</td>
<td>$baslikB</td>
<td>$icerikB</td>
<td class=\"center\">$tarih</td>
<td class=\"center\">$dosyaB</td>
</tr> ";


        }
    }
}
?>

