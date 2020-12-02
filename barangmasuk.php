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
            <h3 class="page-header"><i class="fa fa-table"></i>Barang Masuk</h3>
            <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Dashboard</a></li>
              <li><i class="fa fa-th-list"></i>Barang Masuk</li>
            </ol>
          </div>
        </div>


<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box-header">
    <a href="?pg=barangmasuk&act=add"> <button type="button" class="btn btn-info"><i class = "fa fa-plus"> Tambah Data </i></button> </a>
    </div><!-- /.box-header -->
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th><center>No</center></th>
                        <th><center>No.Tansaksi</center></th>
                        <th><center>No.Fak</center></th>
                        <th><center>Tgl. Trans</center></th>
                        <th><center>Nama Supplier</center></th>
                        <th><center>Biaya kirim/Ongkos Kirim</center></th>
                        <th><center>Total Harga</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                      </tr>
                    </thead>
          
                    <tbody>
                    <?php
                    $tampil=mysqli_query($koneksi, "SELECT * FROM beli order by inc asc");
                    $no = 1;
                      while ($r=mysqli_fetch_array($tampil)){
                    ?>
                        <tr>
                        <td><center><?php echo "$no"?></center></td>
                        <td><center><?php echo "$r[beli_id]"?></center></td>
                        <td><center><?php echo "$r[no_fak]"?></center></td>
                        <td><center><?php echo "$r[tgl_trans]"?></center></td>
                        <td><center><?php echo "$r[supplier_nama]"?></center></td>
                        <td align="right"><?php echo "Rp.". number_format("$r[biaya_kirim]",'0','.','.')?></td>
                        <td align="right"><?php echo "Rp.". number_format("$r[total]",'0','.','.')?></td>
                        <div class="btn-group">
                        <td><a href="?pg=barangmasuk&act=edit&id=<?php echo $r['beli_id']?>"><center><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></center></a></td>
                        <td><a href="?pg=barangmasuk&act=delete&id=<?php echo $r['beli_id']?>"><center><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"><i class = "fa fa-trash-o"></i></button></center></a></td>
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
    $beli_id=$_POST['beli_id'];
    $no_fak=$_POST['no_fak'];
    $tgl_trans=$_POST['tgl_trans'];
    $supplier_nama=$_POST['supplier_nama'];
    $biaya_kirim=$_POST['biaya_kirim'];
    $total=$_POST['total'];
   
//script validasi data
 
    $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM beli WHERE 
  inc='$inc'"));
    if ($cek > 0){
    echo "<script>window.alert('Nama Barang yang anda masukan sudah ada')
    window.location='?pg=barangmasuk&act=view'</script>";
    }else {
    $query = mysqli_query($koneksi, "INSERT INTO beli VALUES ('','$_POST[beli_id]',
                '$_POST[no_fak]','$_POST[tgl_trans]','$_POST[supplier_id]','$_POST[biaya_kirim]','$_POST[total]')");
                
    echo "<script>window.alert('Data Berhasil DI Simpan')
    window.location='?pg=barangmasuk&act=view'</script>";
    }
    }
    ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Produk </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=produk&act=view">Barang Masuk</a></li>
            <li class="active"><a href="#">Tambah Data Barang Masuk</a></li>
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
                    <br>
                    <center><h2 class="modal-title" face="Times New Roman"><b>Tambah Data</b></h2></center>
                    <br>
                    <div class="form-group">
                      <?php
                      //memulai mengambil datanya
                      $sql = mysqli_query($koneksi, "select * from beli");
                      
                      $num = mysqli_num_rows($sql);
                      
                      if($num <> 0)
                      {
                      $kode = $num + 1;
                      }else
                      {
                      $kode = 1;
                      }
                      
                      //mulai bikin kode
                      $bikin_kode = str_pad($kode, 1, "0", STR_PAD_LEFT);
                      $kode_jadi = "BM-$bikin_kode";

                      ?>
                      <label for="exampleInputEmail1">Nomor Transaksi</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-files-o"></i>
                    </div>
                      <input type="text" class="form-control" id="beli_id" name="beli_id" placeholder="Nomor Transaksi" value="<?php echo $kode_jadi?>" required data-fv-notempty-message="Tidak boleh kosong" disabled>
                      <input type="hidden" class="form-control" id="beli_id" name="beli_id" placeholder="Nomor Transaksi" value="<?php echo $kode_jadi?>" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                  </div>
                   <div class="form-group">
                      <?php
                      //memulai mengambil datanya
                      $sql = mysqli_query($koneksi, "select * from beli");
                      
                      $num = mysqli_num_rows($sql);
                      
                      if($num <> 0)
                      {
                      $kode = $num + 1;
                      }else
                      {
                      $kode = 1;
                      }
                      
                      //mulai bikin kode
                      $bikin_kode = str_pad($kode, 1, "0", STR_PAD_LEFT);
                      $kode_jadi = "FAK-$bikin_kode";

                      ?>
                      <label for="exampleInputEmail1">No. Faktur</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-files-o"></i>
                    </div>
                      <input type="text" class="form-control" id="no_fak" name="no_fak" placeholder="Nomor Faktur" value="<?php echo $kode_jadi?>" required data-fv-notempty-message="Tidak boleh kosong" disabled>
                      <input type="hidden" class="form-control" id="no_fak" name="no_fak" placeholder="Nomor Faktur" value="<?php echo $kode_jadi?>" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Transaksi</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                      <input class="form-control" id="date" name="tgl_trans" placeholder="MM/DD/YYY" type="text"/>
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
                      <label for="exampleInputEmail1">Ongkos Kirim</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                    </div>
                      <input type="text" class="form-control" id="biaya_kirim" name="biaya_kirim" placeholder="Ongkos Kirim" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    </div>
                       <div class="form-group">
                      <label for="exampleInputEmail1">Total</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                      <input type="text" class="form-control" id="total" name="total" placeholder="Total Harga" required data-fv-notempty-message="Tidak boleh kosong">
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
      $d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM beli WHERE beli_id='$_GET[id]'"));
            if (isset($_POST['update'])) {

                mysqli_query($koneksi, "UPDATE beli SET tgl_trans='$_POST[tgl_trans]',
                  supplier_id='$_POST[supplier_id]',biaya_kirim='$_POST[biaya_kirim]',total='$_POST[total]' WHERE beli_id='$_POST[id]'");
                echo "<script>window.location='?pg=barangmasuk&act=view'</script>";
          }
              ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Produk </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=barangmasuk&act=view">Barang Masuk</a></li>
            <li class="active">Update Data Barang Masyk</li>
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
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input type="text" class="form-control" id="date" name="tgl_trans" placeholder="Tanggal" 
                      required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['tgl_trans'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Supplier</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                      <i class="fa fa-shopping-cart"></i>
                    </div>
                      <select class="form-control select" name="supplier_id" style="width: 100%;" value= "<?php echo $d['supplier_id'];?>">
                      <option value="">Silahkan Pilih</option>
                      <optgroup label="Nama Produk">
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
                      <input type="hidden" class="form-control" id="id" name="id" required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['supplier_id'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Biaya Kirim</label>
                      <input type="number" class="form-control" id="biaya_kirim" name="biaya_kirim" placeholder="biaya kirim" value= "<?php echo $d['biaya_kirim'];?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Total</label>
                      <input type="text" class="form-control" id="total" name="total" placeholder="Total" 
                      required data-fv-notempty-message="Tidak boleh kosong" value= "<?php echo $d['total'];?>">
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
      mysqli_query($koneksi, "DELETE FROM beli WHERE beli_id='$_GET[id]'");
      echo "<script>window.location='?pg=barangmasuk&act=view'</script>";
      break;

    }
    ?>