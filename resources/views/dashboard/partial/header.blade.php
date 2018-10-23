        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        Prime Fingers
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="mdi mdi-check-circle"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated fadeInUp">
                            <li>
                                <a href="javascript:void(0)">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- /.Task dropdown -->
                    <!-- /.dropdown -->
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                            <img src="{{asset('assets/rsc/plugins/images/users/adeniran.jpg')}}" alt="user-img" width="36" class="img-circle">
                            <b class="hidden-xs">Horpey</b>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeInUp">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <img src="{{asset('assets/rsc/plugins/images/users/adeniran.jpg')}}" alt="user" />
                                    </div>
                                    <div class="u-text">
                                        <h4>Horpey Adeniran</h4>
                                        <p class="text-muted">adeniran@gmail.com</p>
                                        <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="ti-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-wallet"></i> My Rewards</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i> Account Setting</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3>
                        <span class="fa-fw open-close">
                            <i class="ti-menu hidden-xs"></i>
                            <i class="ti-close visible-xs"></i>
                        </span>
                        <span class="hide-menu">
                            <img class="dash-logo" src="{{asset('assets/rsc/plugins/images/prime/prime-logo.png')}}" alt="Home">
                        </span>
                    </h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ url('dashboard') }}" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-view-dashboard fa-fw"></i>
                            <span class="hide-menu">Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('add_product') }}" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-cellphone-link fa-fw"></i>
                            <span class="hide-menu">New Product Test </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url("active_product") }}" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-folder fa-fw"></i>
                            <span class="hide-menu">Active Test </span>
                        </a>
                    </li>
                    <li>
                        <a href="history.html" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-format-list-numbers fa-fw"></i>
                            <span class="hide-menu">History </span>
                        </a>
                    </li>
                    <li>
                        <a href="billing.html" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-account fa-fw"></i>
                            <span class="hide-menu">Billing </span>
                        </a>
                    </li>
                    <li>
                        <a href="admins.html" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-account-multiple fa-fw"></i>
                            <span class="hide-menu">Manage Admins </span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.html" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-menu fa-fw"></i>
                            <span class="hide-menu">Settings </span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.html" class="waves-effect">
                            <i data-icon="v" class="mdi mdi-logout fa-fw"></i>
                            <span class="hide-menu">Log out </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- ============================================================== -->
