<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/elaadmin/layout-fix-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 08:16:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/logo.png') }}">
    <title>DISPSIAD</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="{{ asset('admin/images/logo.png') }}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>DISPSIAD</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>                        
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin/images/users/5.jpg') }}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Menu</li>                       
                        <li><a href="{{ url('home') }}"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li><a href="{{ url('data_buku') }}"><i class="fa fa-book"></i><span class="hide-menu">Data Buku</span></a></li>
                        <li><a href="{{ url('data_anggota') }}"><i class="fa fa-user-o"></i><span class="hide-menu">Data Anggota</span></a></li>
                        <li><a href="{{ url('data_transaksi') }}"><i class="fa fa-server"></i><span class="hide-menu">Data Transaksi</span></a></li>   
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-square"></i><span class="hide-menu"> Referensi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('jenis_pustaka') }}">Jenis Pustaka</a></li>
                                <li><a href="{{ url('kelas') }}">Kelas Pustaka</a></li>
                                <li><a href="#">Lokasi Pustaka</a></li>
                            </ul>
                        </li>    
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-server"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="has-arrow" href="#">Pengunjung</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{ url('lpengunjung_hari') }}">Pengunjung Hari Ini</a></li>
                                        <li><a href="{{ url('lpengunjung_bulan') }}">Pengunjung Bulan Ini</a></li>
                                    </ul>
                                </li>
                                <li><a class="has-arrow" href="#">Peminjaman</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{ url('lpeminjaman_hari') }}">Peminjaman Hari Ini</a></li>
                                        <li><a href="{{ url('lpeminjaman_bulan') }}">Peminjaman Bulan Ini</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('lbuku') }}">Buku</a></li>
                                <li><a href="{{ url('langgota') }}">Anggota</a></li>
                                <li><a href="{{ url('lstatistik_terbanyak') }}">Statistik Terbanyak</a></li>
                            </ul>
                        </li>                 
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
    @yield('content')
    <!-- footer -->
    <footer class="footer"> 2018 &copy; Informatika Universitas Jenderal Achmad Yani </a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('admin/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>

    <!-- Data Table -->
    <script src="{{ asset('admin/js/lib/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/datatables/datatables-init.js') }}"></script>
    <!-- End Data Table -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com/polygon/elaadmin/layout-fix-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 08:16:40 GMT -->
</html>