<?php
error_reporting
?>

<?php
//if(empty($_SESSION['username'])){
//    echo "Not found!";
//} else {
    switch ($_GET['act']) {
    // PROSES VIEW DATA PRODUK //      
      case 'view':
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informasi Administrasi Toko Rizky">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Sistem Informasi Administrasi Toko Rizky</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Toko <span class="lite">Rizky</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
    <div class="top-nav notification-row">
        <!-- user login dropdown start-->
          <div class="topbar-divider d-none d-sm-block"></div>
           <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                            <span class="profile-ava">
                                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 40px">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                
              <li>
                <a href="index.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

<!--sidebar start-->
    <!--sidebar start-->
      <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
              <a class="" href="?pg=dashboard">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="treeview">
             <a href="?pg=barangmasuk&act=view">
               <i class="fa fa-circle"></i> 
                <span>Barang Masuk</span> 
              </a>
            </li>
                        
          <li class="treeview">
             <a href="?pg=produk&act=view">
               <i class="fa fa-product-hunt"></i> 
                <span>Data Produk</span> 
              </a>
            </li>

            <li class="treeview">
              <a href="?pg=penjualan&act=view">
                <i class="fa fa-shopping-cart"></i>
                <span>Transaksi Penjualan</span> 
              </a>
            </li>

            <li class="treeview">
             <a href="?pg=supplier&act=view">
               <i class="fa fa-user"></i> 
                <span>Supplier</span> 
              </a>
            </li>


            <li class="treeview">
             <a href="?pg=hutang&act=view">
               <i class="fa fa-money"></i> 
                <span>Piutang Dagang</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="?pg=lappj&act=view">
                <i class="fa fa-files-o"></i>
                <span>Rekap Laporan</span> 
              </a>
            </li>

          </ul>
       </div>
        <!-- /.sidebar -->
      </aside>
    <!--sidebar end-->


        <!--main content start-->
        <section id="main-content">
        <section class="wrapper">
          <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Data Produk</h3>
            <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Dashboard</a></li>
              <li><i class="fa fa-th-list"></i>Data Produk</li>
            </ol>
          </div>
        </div>


<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box-header">
    <a href="?pg=produk&act=add"> <button type="button" class="btn btn-info"><i class = "fa fa-plus"> Tambah Data </i></button> </a>
    </div><!-- /.box-header -->
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <a style="margin-bottom:10px" href="lap_produk.php" target="blank" class="btn btn-danger"><span class='fa fa-file-pdf-o'></span>   Simpan ke PDF</a>
                    <thead>
                      <tr>
                        <th><center>No</center></th>
                        <th><center>Nama Produk</center></th>
                        <th><center>Harga/Satuan</center></th>
                        <th><center>Stok Masuk</center></th>
                        <th><center>Satuan</center></th>
                        <th><center>Supplier</center></th>
                        <th><center>Tanggal Pemasukan</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                      </tr>
                    </thead>
          
                    <tbody>
                    <?php
                    $tampil=mysqli_query($koneksi, "SELECT * FROM produk order by id_produk asc");
                    $no = 1;
                      while ($r=mysqli_fetch_array($tampil)){
                    ?>
                        <tr>
                        <td><center><?php echo "$no"?></center></td>
                        <td><center><?php echo "$r[nama_produk]"?></center></td>
                        <td align="right"><?php echo "Rp.". number_format("$r[harga]",'0','.','.')?></td>
                        <td><center><?php echo "$r[stokproduk]"?></center></td>
                        <td><center><?php echo "$r[satuan]"?></center></td>
                        <td><center><?php echo "$r[supplier]"?></center></td>
                        <td><center><?php echo "$r[tglmasuk]"?></center></td>
                        <div class="btn-group">
                        <td><a href="?pg=produk&act=edit&id=<?php echo $r['id_produk']?>"><center><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></center></a></td>
                        <td><a href="?pg=produk&act=delete&id=<?php echo $r['id_produk']?>"><center><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"><i class = "fa fa-trash-o"></i></button></center></a></td>
                      </div>
                        </tr>
            <?php
                    $no++;
                    }
                    ?>
          
               </tbody>
                  </table>
                  </div><!-- /.box-body -->
              </div>
              </div><!-- /.box -->
              </div> <!-- /.col -->
  </div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.content-wrapper -->

      <?php
   break;
      // PROSES TAMBAH DATA PRODUK //
      case 'add': 
//proses
    if(isset($_POST['add'])) {
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $stokproduk=$_POST['stokproduk'];
    $satuan=$_POST['satuan'];
    $supplier=$_POST['supplier'];
    $tglmasuk=$_POST['tglmasuk'];
   
//script validasi data
 
    $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk WHERE 
  id_produk='$id_produk'"));
    if ($cek > 0){
    echo "<script>window.alert('Nama Barang yang anda masukan sudah ada')
    window.location='?pg=produk&act=view'</script>";
    }else {
    $query = mysqli_query($koneksi, "INSERT INTO produk VALUES ('','$_POST[nama_produk]',
                '$_POST[harga]','$_POST[stokproduk]','$_POST[satuan]','$_POST[supplier_id]','$_POST[tglmasuk]')");
                
    echo "<script>window.alert('Data Berhasil DI Simpan')
    window.location='?pg=produk&act=view'</script>";
    }
    }
    ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Produk </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=produk&act=view">Data Produk</a></li>
            <li class="active"><a href="#">Tambah Data Produk</a></li>
             </ol>
        </section>
<br><br>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-11">
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <!-- form start -->
                <form role="form" method = "POST" action="">
                  <div class="box-body">
                    
                    <center><h2 class="modal-title" face="Times New Roman"><b>Tambah Produk</b></h2></center>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Produk</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-shopping-cart"></i>
                    </div>
                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Harga</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-shopping-cart"></i>
                    </div>
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Produk" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Stok Produk</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-th-list"></i>
                    </div>
                      <input type="number" class="form-control" id="stokproduk" name="stokproduk" placeholder="Stok Produk" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    </div>
           <div class="form-group">
                      <label for="exampleInputEmail1">Satuan</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-plus"></i>
                    </div>
                      <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Supplier</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                      <select class="form-control select" name="supplier_id" style="width: 100%;">
                      <option value="">Silahkan Pilih</option>
                      <optgroup label="Supplier">
                      <?php
                      $tampil=mysqli_query($koneksi, "SELECT * FROM supplier ORDER BY supplier_id");
                      while($r=mysqli_fetch_array($tampil)){
                      ?>
                      <option value="<?php echo $r['supplier_id']?>"><?php echo $r['supplier_nama'] ?></option>
                      <?php
                    }
                    ?>
                    </optgroup>
                      </select>
                    </div>
                  </div>
           <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Pemasukan</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                      <input class="form-control" id="date" name="tglmasuk" placeholder="MM/DD/YYY" type="text" required data-fv-notempty-message="Tidak boleh kosong" />
                    </div>
                  </div>
                    
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
              
          
            <!-- Tombol Bagian Bawah -->

            <div class="row">
            <!-- left column -->
              <div class="col-md-4 col-md-offset-5">

              <button type="submit" name = 'add' class="btn btn-info">Simpan</button>
              &nbsp;
              <button type="reset" class="btn btn-success">Reset</button>
              &nbsp;
              <button onclick="goBack()" class="btn btn-danger">Cancel</button>
                  <script>
                      function goBack() {
                          window.history.back();
                      }
                  </script>
                  
            </form>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div> <!-- /.col -->
  </div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.content-wrapper -->
    

    <?php
      break;
      // PROSES EDIT DATA PRODUK //
      case 'edit':
      $d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id]'"));
            if (isset($_POST['update'])) {

                mysqli_query($koneksi, "UPDATE produk SET nama_produk='$_POST[nama_produk]',
                  harga='$_POST[harga]',stokproduk='$_POST[stokproduk]',satuan='$_POST[satuan]',supplier='$_POST[supplier]',tglmasuk='$_POST[tglmasuk]' WHERE id_produk='$_POST[id]'");
                echo "<script>window.location='?pg=produk&act=view'</script>";
          }
              ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Produk </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=produk&act=view">Data Produk</a></li>
            <li class="active">Update Data Produk</li>
             </ol>
        </section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <!-- form start -->
                <form role="form" method = "POST" action="">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Produk</label>
                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" 
                      required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['nama_produk'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Harga</label>
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value= "<?php echo $d['harga'];?>">
                      <input type="hidden" class="form-control" id="id" name="id" required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['id_produk'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Stok Produk</label>
                      <input type="number" class="form-control" id="stokproduk" name="stokproduk" placeholder="Stok Produk" value= "<?php echo $d['stokproduk'];?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Satuan</label>
                      <input type="text" class="form-control" id="satuan" name="satuan" placeholder="satuan" 
                      required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['satuan'];?>">
                    </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1">Supplier</label>
                      <input type="text" class="form-control" id="supplier" name="supplier" placeholder="supplier" 
                       required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['supplier'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Pemasukan</label>
                      <input type="text" class="form-control" id="date" name="tglmasuk" placeholder="MM/DD/YYY"  value= "<?php echo $d['tglmasuk'];?>">
                    </div>
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
              </div> <!-- /.col -->

              </div> <!-- /.row -->

          
            <!-- Tombol Bagian Bawah -->

            <div class="row">
            <!-- left column -->
              <div class="col-md-4 col-md-offset-5">

              <button type="submit" name = 'update' class="btn btn-info">Update</button>
              &nbsp;
              <button type="reset" class="btn btn-success">Reset</button>
              &nbsp;
               <button onclick="goBack()" class="btn btn-danger">Cancel</button>
                  <script>
                      function goBack() {
                          window.history.back();
                      }
                  </script>
     
    <?php
    break;

    // PROSES HAPUS DATA PENGGUNA //
      case 'delete':
      mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$_GET[id]'");
      echo "<script>window.location='?pg=produk&act=view'</script>";
      break;

    }
    ?>