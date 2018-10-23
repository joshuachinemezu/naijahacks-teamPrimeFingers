@extends('dashboard.app')

@section('content')      
@include('dashboard.partial.header')
      
      <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20">
                            <i class="ti-settings text-white"></i>
                        </button> -->
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class=""></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-danger">
                                                <i class="ti-clipboard"></i>
                                            </span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">0</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Total Tests</h4>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-info">
                                                <i class="ti-clipboard"></i>
                                            </span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">0</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Active Tests</h4>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-success">
                                                <i class="ti-clipboard"></i>
                                            </span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">0</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Pending Tests</h4>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6  b-0">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-warning">
                                                <i class="ti-clipboard"></i>
                                            </span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">0</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Failed Tests</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="box-title m-b-20"><strong>Alpha Products</strong></h3>
                        <div class="white-box">
                            <div class="row row-in">
                                <!-- Tabstyle start -->
                                <section>
                                    <div class="sttabs tabs-style-line">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="#section-line-1"><span>Statistics</span></a></li>
                                                <li><a href="#section-line-2"><span>Questions/Task</span></a></li>
                                                <li><a href="#section-line-3"><span>Answers</span></a></li>
                                                <li><a href="#section-line-4"><span>Audio</span></a></li>
                                            </ul>
                                        </nav>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <section id="section-line-1">
                                                        <h3 class="box-title">Product line Chart</h3>
                                                        <ul class="list-inline text-right">
                                                            <li>
                                                                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>iPhone</h5>
                                                            </li>
                                                            <li>
                                                                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>iPad</h5>
                                                            </li>
                                                            <li>
                                                                <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>iPod</h5>
                                                            </li>
                                                        </ul>
                                                        <div id="morris-area-chart"></div>
                                                    </section>

                                                </div>

                                            </div>

                                        </div>
                                        <!-- /content -->
                                    </div>
                                    <!-- /tabs -->
                                </section>
                                <!-- Tabstyle start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Prime Fingers </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        @endsection
