@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
          
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))


    <!-- HIGHCHARTS -->
    {!! Charts::assets() !!}

    

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>TRACE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="../img/trace.png" style="width:50px;height:50px;">{!! config('adminlte.logo_mini', '') !!}</span>

                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>TRACE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                          </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have messages</li>
                            <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                <li><!-- start message -->
                                  <a href="#">
                                    <div class="pull-left">
                                      <img src="../img/trace.png" class="img-circle" alt="User Image">
                                    </div>
                                    <h4>
                                      Trace
                                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>Message Excerpt</p>
                                  </a>
                                </li><!-- end message -->
                                ...
                              </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                          </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../img/user.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Benok Sapalicio</span>
                              </a>
                              <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                  <img src="../img/user.jpg" class="img-circle" alt="User Image">
                                  <p>
                                    Benok Sapalicio
                                    <small>Administrator - <b>TRACE System</b></small>
                                  </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                  </div>
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                  </div>
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                  </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                  <div class="pull-right">
                                     @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                        <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                        <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}</a>
                                    @else
                                        <a href="#"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}</a>
                                        <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                            @if(config('adminlte.logout_method'))
                                                {{ method_field(config('adminlte.logout_method')) }}
                                            @endif
                                            {{ csrf_field() }}
                                        </form>
                                    @endif
                                  </div>
                                </li>
                              </ul>
                            </li>                
                    </ul>
                </div>
                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <!-- user panel (Optional) -->
                        <div class="user-panel">
                          <div class="pull-left image">
                            <img src="../img/user.jpg" class="img-circle" alt="User Image">
                          </div>
                          <div class="pull-left info">
                            <p>Welcome, Benok!</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                          </div>
                        </div><!-- /.user-panel -->

                        <!-- Search Form (Optional) -->
                        <form action="#" method="get" class="sidebar-form">
                          <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </form><!-- /.sidebar-form -->
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->


        </aside>

        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/app.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
