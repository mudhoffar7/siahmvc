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
    {{ stylesheet_link ('template/html/bootstrap/dist/css/bootstrap.min.css')}}
    <!-- Menu CSS -->
    {{ stylesheet_link ('template/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}} 
    <!-- toast CSS -->
    {{ stylesheet_link ('template/plugins/bower_components/toast-master/css/jquery.toast.css')}}
    <!-- morris CSS -->
    {{ stylesheet_link ('template/plugins/bower_components/morrisjs/morris.css')}} 
    <!-- chartist CSS -->
    {{ stylesheet_link ('template/plugins/bower_components/chartist-js/dist/chartist.min.css')}}
    {{ stylesheet_link ('template/plugins/bower_components/chartist-plugin-tooltip-master/dist/artist-plugin-tooltip.css')}}
    <!-- animation CSS -->
    {{ stylesheet_link('template/html/css/animate.css')}}
    <!-- Custom CSS -->
    {{ stylesheet_link('template/html/css/style.css')}} 
    <!-- color CSS -->
    {{ stylesheet_link('template/html/css/colors/default.css')}}
    
    <!-- Java script -->
    {{ javascript_include ('template/plugins/bower_components/jquery/dist/jquery.min.js')}}
    <!-- Bootstrap Core JavaScript -->
    <!-- Menu Plugin JavaScript -->
    {{ javascript_include ('template/html/bootstrap/dist/js/bootstrap.min.js')}}
    <!--slimscroll JavaScript -->
    {{ javascript_include ('template/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}
    <!--Wave Effects -->
    {{ javascript_include ('template/html/js/jquery.slimscroll.js')}}
    <!--Counter js -->
    {{ javascript_include ('template/html/js/waves.js')}}
    <!-- chartist chart -->
    {{ javascript_include ('template/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}
    {{ javascript_include ('template/plugins/bower_components/counterup/jquery.counterup.min.js')}}
    <!-- Sparkline chart JavaScript -->
    {{ javascript_include ('template/plugins/bower_components/chartist-js/dist/chartist.min.js')}}
    {{ javascript_include ('template/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}
    <!-- Custom Theme JavaScript -->
    {{ javascript_include ('template/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}

    {{ javascript_include ('template/html/js/custom.min.js')}}
    {{ javascript_include ('template/html/js/dashboard1.js')}}
    {{ javascript_include ('template/plugins/bower_components/toast-master/js/jquery.toast.js')}}
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
                        <a type="button" href="{{url("login/logout")}}" class="waves-effect"><i class="fa fa-power-off fa-fw"></i> Logout</a>
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
    {% block content %}
    {% endblock %}
</body>
</html>
