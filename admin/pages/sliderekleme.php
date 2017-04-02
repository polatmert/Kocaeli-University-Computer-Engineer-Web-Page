<?php require '../../includes/config.php'; ?>


<?php session_start();

if(isset($_SESSION["Ad"]) ){}

else{
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Rviewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KOU D.Y.S</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script>
        function countChar(val) {
            var len = val.value.length;
            if (len >= 80) {
                val.value = val.value.substring(0, 80);
                return 1;
            } else {
                $('#charNum').text(80 - len);

            }
        };
    </script>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="ekleme.php">KOU Duyuru Yönetim Sistemi</a>

        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->

            <!-- /.dropdown-tasks -->

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["Ad"]; ?></a>

                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="ekleme.php"><i class="fa fa-dashboard fa-fw"></i> Anasayfa</a>
                    </li>

                    <!-- /.nav-second-level -->


                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Duyuru Yönetimi<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="ekleme.php">Duyuru Ekle</a>
                            </li>
                            <li>
                                <a href="duyuruTablo.php">Duyuru Görüntüle ve Sil</a>
                            </li>
                            <li>
                                <a href="sliderekleme.php">Slider Ekle</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->


            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Database'e Slider Aktar</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" action="slidereklemeBack.php" enctype="multipart/form-data">


                                                <label>Slider Ekle</label>
                                                <input type="file" name="file">

                                                <br>

                                                <input type="submit" name="insert" class="btn btn-primary">

                                        </form>

                                        <!-- /.row -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </div>
                                <!-- /#page-wrapper -->

                            </div>
                            <!-- /#wrapper -->

                            <!-- jQuery -->

                            <script src="../vendor/jquery/jquery.min.js"></script>

                            <!-- Bootstrap Core JavaScript -->
                            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

                            <!-- Metis Menu Plugin JavaScript -->
                            <script src="../vendor/metisMenu/metisMenu.min.js"></script>

                            <!-- Custom Theme JavaScript -->
                            <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
