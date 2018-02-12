<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="template/plugins/images/favicon.png">
    <title>SIA</title>
    <!-- Bootstrap Core CSS -->
    <?= $this->tag->stylesheetLink('template/html/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- Menu CSS -->
    <?= $this->tag->stylesheetLink('template/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') ?> 
    <!-- toast CSS -->
    <?= $this->tag->stylesheetLink('template/plugins/bower_components/toast-master/css/jquery.toast.css') ?>
    <!-- morris CSS -->
    <?= $this->tag->stylesheetLink('template/plugins/bower_components/morrisjs/morris.css') ?> 
    <!-- chartist CSS -->
    <?= $this->tag->stylesheetLink('template/plugins/bower_components/chartist-js/dist/chartist.min.css') ?>
    <?= $this->tag->stylesheetLink('template/plugins/bower_components/chartist-plugin-tooltip-master/dist/artist-plugin-tooltip.css') ?>
    <!-- animation CSS -->
    <?= $this->tag->stylesheetLink('template/html/css/animate.css') ?>
    <!-- Custom CSS -->
    <?= $this->tag->stylesheetLink('template/html/css/style.css') ?> 
    <!-- color CSS -->
    <?= $this->tag->stylesheetLink('template/html/css/colors/default.css') ?>
    
    <!-- Java script -->
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/jquery/dist/jquery.min.js') ?>
    <!-- Bootstrap Core JavaScript -->
    <!-- Menu Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('template/html/bootstrap/dist/js/bootstrap.min.js') ?>
    <!--slimscroll JavaScript -->
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') ?>
    <!--Wave Effects -->
    <?= $this->tag->javascriptInclude('template/html/js/jquery.slimscroll.js') ?>
    <!--Counter js -->
    <?= $this->tag->javascriptInclude('template/html/js/waves.js') ?>
    <!-- chartist chart -->
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/waypoints/lib/jquery.waypoints.js') ?>
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/counterup/jquery.counterup.min.js') ?>
    <!-- Sparkline chart JavaScript -->
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/chartist-js/dist/chartist.min.js') ?>
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') ?>
    <!-- Custom Theme JavaScript -->
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') ?>

    <?= $this->tag->javascriptInclude('template/html/js/custom.min.js') ?>
    <?= $this->tag->javascriptInclude('template/html/js/dashboard1.js') ?>
    <?= $this->tag->javascriptInclude('template/plugins/bower_components/toast-master/js/jquery.toast.js') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="template/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="template/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="template/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="template/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="template/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Farhan</b></a>
                    </li>
                    <li>    
                        <a type="button" href="<?= $this->url->get('login/logout') ?>" class="waves-effect"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Penilaian</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>SKEM</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Wisuda</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>SKPI</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>FRS</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Ekivalensi</a>
                    </li>
                </ul>
            </div>       
        </div>
        <!-- End Left Sidebar -->
    </div>
    <!-- End Wrapper -->
    
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <!-- table -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>March 2017</option>
                                    <option>April 2017</option>
                                    <option>May 2017</option>
                                    <option>June 2017</option>
                                    <option>July 2017</option>
                                </select>
                            </div>
                            <h3 class="box-title">Data Pengguna</h3>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"> Tambah</i></button>

                            <div class="table-responsive">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>HP</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php foreach ($data_pengguna as $v) { ?>
                                         <tr>
                                            <td><?= $v->id ?></td>
                                            <td><?= $v->nama ?></td>
                                            <td><?= $v->alamat ?></td>
                                            <td><?= $v->hp ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit<?= $v->id ?>"><i class="fa fa-pencil-square-o"> Edit</i></button>
                                                <a href="<?= $this->url->get('pengguna/delete/' . $v->id) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"> Hapus</i></a>
                                            </td>
                                        </tr>
                                         <?php } ?>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- End Page Content -->

        <!--modal Tambah-->

            <div id="modalTambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Pengguna</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" action="<?= $this->url->get('pengguna/create') ?>" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Nama:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Alamat</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Hp</label>
                        <div class="col-sm-10"> 
                          <input type="number" class="form-control" name="hp" placeholder="Masukkan No.HP">
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!--modal Edit-->
             <?php foreach ($data_pengguna as $v) { ?>
            <div id="modalEdit<?= $v->id ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Pengguna <?= $v->id ?></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" action="<?= $this->url->get('pengguna/edit/' . $v->id) ?>" method="POST">
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Nama:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama" value="<?= $v->nama ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Alamat</label>
                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="alamat" value="<?= $v->alamat ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Hp</label>
                        <div class="col-sm-10"> 
                          <input type="number" class="form-control" name="hp" value="<?= $v->hp ?>" >
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        <?php } ?>

</body>
</html>
