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
                                <div class="panel-wrapper collapse in" aria-expanded="true">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="form-body">
                                                <h3 class="box-title m-b-20"><strong>Continue the Process</strong></h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Instructions</label>
                                                            <textarea class="form-control" rows="5" placeholder="Tell Users what their frame of Mind should be"></textarea></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">App Link</label>
                                                        <div class="form-group">
                                                            <input type="url" id="applink" class="form-control"
                                                                placeholder="Link to Download app"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h3 class="box-title m-b-20"><strong>Tasks</strong></h3>
                                                        <a href="https://docs.google.com/forms/u/0/" target="_blank">Create
                                                            a
                                                            google Form Now</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Google Form Link</label>
                                                        <div class="form-group">
                                                            <input type="url" id="applink" class="form-control"
                                                                placeholder="Google Form Link Created"></div>
                                                    </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="form-actions m-t-20">
                                    <a href="plans.html" class="btn btn-prime">Next</a>
                                </div>

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
