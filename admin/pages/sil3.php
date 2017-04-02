
<?php
require '../../includes/config.php';

$silinecek_id=$_GET['del'];
$conn->query("DELETE FROM haberlerveetkinlik WHERE DuyuruIDB=$silinecek_id");

header('location:duyuruTablo.php');


?>




