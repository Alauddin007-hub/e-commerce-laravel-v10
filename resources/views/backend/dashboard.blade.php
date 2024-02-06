@extends('backend.layouts.app')

@section('title','Dashboard')

@section('content')

<div id="main-container">
    <!-- Header -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
    <header class="navbar navbar-inverse navbar-fixed-top">
        <!-- Left Header Navigation -->
        <ul class="nav navbar-nav-custom">
            <!-- Main Sidebar Toggle Button -->
            <li>
                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                </a>
            </li>
            <!-- END Main Sidebar Toggle Button -->

            <!-- Header Link -->
            <li class="hidden-xs animation-fadeInQuick">
                <a href=""><strong>WELCOME</strong></a>
            </li>
            <!-- END Header Link -->
        </ul>
        <!-- END Left Header Navigation -->

        <!-- Right Header Navigation -->
        <ul class="nav navbar-nav-custom pull-right">
            <!-- Search Form -->
            <li>
                <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                    <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                </form>
            </li>
            <!-- END Search Form -->

            <!-- Alternative Sidebar Toggle Button -->
            <li>
                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');this.blur();">
                    <i class="gi gi-settings"></i>
                </a>
            </li>
            <!-- END Alternative Sidebar Toggle Button -->

            <!-- User Dropdown -->
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar">
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">
                        <strong>ADMINISTRATOR</strong>
                    </li>
                    <li>
                        <a href="page_app_email.html">
                            <i class="fa fa-inbox fa-fw pull-right"></i>
                            Inbox
                        </a>
                    </li>
                    <li>
                        <a href="page_app_social.html">
                            <i class="fa fa-pencil-square fa-fw pull-right"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="page_app_media.html">
                            <i class="fa fa-picture-o fa-fw pull-right"></i>
                            Media Manager
                        </a>
                    </li>
                    <li class="divider">
                    <li>
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                            <i class="gi gi-settings fa-fw pull-right"></i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="page_ready_lock_screen.html">
                            <i class="gi gi-lock fa-fw pull-right"></i>
                            Lock Account
                        </a>
                    </li>
                    <li>
                        <a href="page_ready_login.html">
                            <i class="fa fa-power-off fa-fw pull-right"></i>
                            Log out
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END User Dropdown -->
        </ul>
        <!-- END Right Header Navigation -->
    </header>
    <!-- END Header -->

    <!-- Page content -->
    <div id="page-content">
        <!-- First Row -->
        <div class="row">
            <!-- Simple Stats Widgets -->
            <div class="col-sm-6 col-lg-3">
                <a href="javascript:void(0)" class="widget">
                    <div class="widget-content widget-content-mini text-right clearfix">
                        <div class="widget-icon pull-left themed-background">
                            <i class="gi gi-cardio text-light-op"></i>
                        </div>
                        <h2 class="widget-heading h3">
                            <strong><span data-toggle="counter" data-to="2835"></span></strong>
                        </h2>
                        <span class="text-muted">SALES</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="javascript:void(0)" class="widget">
                    <div class="widget-content widget-content-mini text-right clearfix">
                        <div class="widget-icon pull-left themed-background-success">
                            <i class="gi gi-user text-light-op"></i>
                        </div>
                        <h2 class="widget-heading h3 text-success">
                            <strong>+ <span data-toggle="counter" data-to="2862"></span></strong>
                        </h2>
                        <span class="text-muted">NEW USERS</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="javascript:void(0)" class="widget">
                    <div class="widget-content widget-content-mini text-right clearfix">
                        <div class="widget-icon pull-left themed-background-warning">
                            <i class="gi gi-briefcase text-light-op"></i>
                        </div>
                        <h2 class="widget-heading h3 text-warning">
                            <strong>+ <span data-toggle="counter" data-to="75"></span></strong>
                        </h2>
                        <span class="text-muted">PROJECTS</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a href="javascript:void(0)" class="widget">
                    <div class="widget-content widget-content-mini text-right clearfix">
                        <div class="widget-icon pull-left themed-background-danger">
                            <i class="gi gi-wallet text-light-op"></i>
                        </div>
                        <h2 class="widget-heading h3 text-danger">
                            <strong>$ <span data-toggle="counter" data-to="5820"></span></strong>
                        </h2>
                        <span class="text-muted">EARNINGS</span>
                    </div>
                </a>
            </div>
            <!-- END Simple Stats Widgets -->
        </div>
        <!-- END First Row -->

        <!-- Second Row -->
        <div class="row">
            <div class="col-sm-6 col-lg-8">
                <!-- Chart Widget -->
                <div class="widget">
                    <div class="widget-content border-bottom">
                        <span class="pull-right text-muted">2013</span>
                        Last Year's Data
                    </div>
                    <div class="widget-content border-bottom themed-background-muted">
                        <!-- Flot Charts (initialized in js/pages/readyDashboard.js), for more examples you can check out http://www.flotcharts.org/ -->
                        <div id="chart-classic-dash" style="height: 393px;"></div>
                    </div>
                    <div class="widget-content widget-content-full">
                        <div class="row text-center">
                            <div class="col-xs-4 push-inner-top-bottom border-right">
                                <h3 class="widget-heading"><i class="gi gi-wallet text-dark push-bit"></i> <br><small>$ 41k</small></h3>
                            </div>
                            <div class="col-xs-4 push-inner-top-bottom">
                                <h3 class="widget-heading"><i class="gi gi-cardio text-dark push-bit"></i> <br><small>17k Sales</small></h3>
                            </div>
                            <div class="col-xs-4 push-inner-top-bottom border-left">
                                <h3 class="widget-heading"><i class="gi gi-life_preserver text-dark push-bit"></i> <br><small>3k+ Tickets</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Chart Widget -->
            </div>
            <div class="col-sm-6 col-lg-4">
                <!-- Stats User Widget -->
                <a href="page_ready_profile.html" class="widget">
                    <div class="widget-content border-bottom text-dark">
                        <span class="pull-right text-muted">This week</span>
                        Featured Author
                    </div>
                    <div class="widget-content border-bottom text-center themed-background-muted">
                        <img src="img/placeholders/avatars/avatar13@2x.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                        <h2 class="widget-heading h3 text-dark">Anna Wigren</h2>
                        <span class="text-muted">
                            <strong>Logo Designer</strong>, Sweden
                        </span>
                    </div>
                    <div class="widget-content widget-content-full-top-bottom">
                        <div class="row text-center">
                            <div class="col-xs-6 push-inner-top-bottom border-right">
                                <h3 class="widget-heading"><i class="gi gi-briefcase text-dark push-bit"></i> <br><small>35 Projects</small></h3>
                            </div>
                            <div class="col-xs-6 push-inner-top-bottom">
                                <h3 class="widget-heading"><i class="gi gi-heart_empty text-dark push-bit"></i> <br><small>5.3k Likes</small></h3>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END Stats User Widget -->

                <!-- Mini Widgets Row -->
                <div class="row">
                    <div class="col-xs-6">
                        <a href="javascript:void(0)" class="widget">
                            <div class="widget-content themed-background-info text-light-op text-center">
                                <div class="widget-icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                            </div>
                            <div class="widget-content text-dark text-center">
                                <strong>98k</strong><br>Followers
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <a href="javascript:void(0)" class="widget">
                            <div class="widget-content themed-background-danger text-light-op text-center">
                                <div class="widget-icon">
                                    <i class="fa fa-database"></i>
                                </div>
                            </div>
                            <div class="widget-content text-dark text-center">
                                <strong>15</strong><br>
                                Active Servers
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Mini Widgets Row -->
            </div>
        </div>
        <!-- END Second Row -->

        <!-- Third Row -->
        <div class="row">
            <div class="col-sm-4">
                <!-- Project Widget -->
                <div class="widget">
                    <div class="widget-content border-bottom">
                        <span class="pull-right text-muted">60%</span>
                        Project
                    </div>
                    <a href="javascript:void(0)" class="widget-content themed-background-muted text-right clearfix">
                        <img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                        <h2 class="widget-heading h3 text-muted">Logo</h2>
                        <div class="progress progress-striped progress-mini active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="widget-content themed-background-muted border-top text-right clearfix">
                        <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                        <h2 class="widget-heading h3 text-muted">Icon Pack</h2>
                        <div class="progress progress-striped progress-mini active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="widget-content themed-background-muted border-top text-right clearfix">
                        <img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                        <h2 class="widget-heading h3 text-muted">Design</h2>
                        <div class="progress progress-striped progress-mini active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                        </div>
                    </a>
                    <div class="widget-content widget-content-full border-top">
                        <div class="row text-center">
                            <div class="col-xs-6 push-inner-top-bottom border-right">
                                <i class="fa fa-check-circle-o"></i> On Time
                            </div>
                            <div class="col-xs-6 push-inner-top-bottom">
                                <i class="fa fa-clock-o"></i> 17 Days
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Project Widget -->
            </div>
            <div class="col-sm-4">
                <!-- Statistics Widget -->
                <div class="widget">
                    <div class="widget-content border-bottom">
                        <span class="pull-right text-muted"><i class="fa fa-check"></i></span>
                        Weekly Sales
                    </div>
                    <div class="widget-content border-bottom themed-background-muted text-center">
                        <span id="widget-dashchart-sales">12,15,14,18,16,15,16,17</span>
                    </div>
                    <div class="widget-content widget-content-full-top-bottom border-bottom">
                        <div class="row text-center">
                            <div class="col-xs-6 push-inner-top-bottom border-right">
                                <h3 class="widget-heading"><i class="gi gi-book_open text-dark push"></i> <br><small>123 Total Sales</small></h3>
                            </div>
                            <div class="col-xs-6 push-inner-top-bottom">
                                <h3 class="widget-heading"><i class="gi gi-user_add text-dark push"></i> <br><small>+10% Clients</small></h3>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-full">
                        <div class="row text-center">
                            <div class="col-xs-6 push-inner-top-bottom border-right">
                                <h3 class="widget-heading"><i class="gi gi-briefcase text-dark push"></i> <br><small>5 Products</small></h3>
                            </div>
                            <div class="col-xs-6 push-inner-top-bottom">
                                <h3 class="widget-heading"><i class="gi gi-truck text-dark push"></i> <br><small>10 Deliveries</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Statistics Widget -->
            </div>
            <div class="col-sm-4">
                <!-- Story Widget -->
                <div class="widget">
                    <div class="widget-content">
                        <span class="pull-right text-muted">Featured</span>
                        Story
                    </div>
                    <div class="widget-image">
                        <img src="img/placeholders/photos/photo9.jpg" alt="image">
                        <div class="widget-image-content">
                            <h2 class="widget-heading"><a href="page_ready_article.html" class="text-light"><strong>The trip that changed my life</strong></a></h2>
                            <h3 class="widget-heading text-light-op h4">It changed the way I think</h3>
                        </div>
                        <i class="gi gi-airplane"></i>
                    </div>
                    <div class="widget-content widget-content-full text-dark">
                        <div class="row text-center">
                            <div class="col-xs-4 push-inner-top-bottom border-right">
                                <i class="fa fa-heart-o"></i> 9.5k
                            </div>
                            <div class="col-xs-4 push-inner-top-bottom border-right">
                                <i class="fa fa-eye"></i> 76k
                            </div>
                            <div class="col-xs-4 push-inner-top-bottom">
                                <i class="fa fa-share-alt"></i> 7.2k
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Story Widget -->
            </div>
        </div>
        <!-- END Third Row -->
    </div>
    <!-- END Page Content -->
</div>

@endsection