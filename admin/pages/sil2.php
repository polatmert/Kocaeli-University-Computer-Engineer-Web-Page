
<?php
require '../../includes/config.php';

$silinecek_id=$_GET['del'];
$conn->query("DELETE FROM bolumduyurulari WHERE DuyuruIDB=$silinecek_id");

header('location:duyuruTablo.php');


?>




