<?php include("includes/config.php")?>
<?php include("includes/header.php")?>
<?php include("includes/functions.php")?>


<?php
error_reporting(E_ALL ^ E_NOTICE);

$aranan=$_POST['arama'];

echo "<div class=\"row\">";
echo "<div class=\"col-sm-12  col-md-push-2 col-md-8  col-lg-8\" >";
aramafonksiyonu($aranan);
echo "</div>";
echo "</div>";
?>


<?php include("includes/footer.php") ?>
