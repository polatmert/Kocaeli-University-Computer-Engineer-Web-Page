<?php require '../../includes/config.php'; ?>
<?php
if(isset($_POST['submit'])) {

    $kid = $_POST['kullanici'];
    $sfr = $_POST['sifre'];

    if($kid!=''&&$sfr!='') {

        $result = $conn->query("SELECT * FROM personel WHERE KullaniciID='$kid' AND Sifre='$sfr'");

        $row = $result->fetch_array(MYSQLI_BOTH);

        $check_user = mysqli_num_rows($result);

        if ($check_user > 0) {
            $_SESSION['KullaniciID'] = $kid;
            $_SESSION['Sifre'] = $sfr;
            session_start();
            $_SESSION['Ad'] = $row['Ad'];
            $_SESSION["KullaniciID"]=$row['KullaniciID'];

            header('Location: ekleme.php');
        }
        else
            {
            echo "Kullanici ID veya şifre yanlış";
            }
    }
    else
        {
            echo"Boş bırakmayınız";
        }
}
?>