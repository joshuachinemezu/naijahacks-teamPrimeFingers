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
                            <h3 class="box-title"><strong>Create a New Product</strong></h3>
                            <p>Set up your test in minutes</p>
                            <div class="white-box">
                                <div class="row row-in">
                                    <div class="col-md-4 text-center">
                                        <h3><strong>Prototype</strong></h3>
                                        <img src="{{asset('assets/company/img/prototype.svg')}}" class="test-img" />
                                        <ul class="list-style-none m-b-10">
                                            <li>Adobe XD</li>
                                            <li>Figma, Sketch, and more</li>
                                            <li>Your own prototype URL</li>
                                        </ul>
                                        <a href="test-prototype.html" class="btn btn-prime">Test a Prototype</a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h3><strong>Website</strong></h3>
                                        <img src="{{asset('assets/company/img/website.svg')}}" class="test-img" />
                                        <ul class="list-style-none m-b-10">
                                            <li>Computers</li>
                                            <li>Smartphones</li>
                                            <li>Tablets</li>
                                        </ul>
                                        <a href="test-website.html" class="btn btn-prime">Test a Website</a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h3><strong>App</strong></h3>
                                        <img src="{{asset('assets/company/img/mobile-app.svg')}}" class="test-img" />
                                        <ul class="list-style-none m-b-10">
                                            <li>iOS</li>
                                            <li>Android</li>
                                            <li>Unreleased apps</li>
                                        </ul>
                                        <a href="test-app.html" class="btn btn-prime">Test an App</a>
                                    </div>
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
