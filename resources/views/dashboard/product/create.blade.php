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
                                                    <h3 class="box-title m-b-20"><strong>Test for an App</strong></h3>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">App Test Title</label>
                                                                <input type="text" id="productName" class="form-control"
                                                                    placeholder="Write your App Title"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">App Link</label>
                                                            <div class="form-group">
                                                                <input type="url" id="applink" class="form-control"
                                                                    placeholder="Link to Download app"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Test Type</label>
                                                                <select class="form-control">
                                                                    <option>--Select Type of Test--</option>
                                                                    <option>Question Based</option>
                                                                    <option>A/B Testing</option>
                                                                    <option>Screen/Audio Recording</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Target Audience</label>
                                                                <select class="form-control">
                                                                    <option>--Select based on Skills/Job Occupation--</option>
                                                                    <option>Students</option>
                                                                    <option>UX Designers</option>
                                                                    <option>Elderly</option>
                                                                    <option>Teachers</option>
                                                                    <option>Doctors</option>
                                                                    <option>Bus Driver</option>
                                                                    <option>Accountants</option>
                                                                    <option>Married Couples</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                            </form>
                                            <div class="col-md-12">
                                                <form action="#" class="dropzone">
                                                    <label class="control-label">Upload APK File</label>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple /> </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions m-t-20">
                                        <a href="{{url('create_product/link/new')}}" class="btn btn-prime">Next</a>
                                    </div>
    
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
