<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Progress Bar</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-5.0.2/css/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- SIDE MENU-->
        @include('layouts.menus.menu')
        <!-- SIDE MENU-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            @include('layouts.menus.header')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Basic Progress Bar</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="muted">To create a default progress bar, add a
                                            <code>.progress</code> class to a
                                            <code>&lt;div&gt;</code> element:</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="muted">To create a default progress bar, add a
                                            <code>.progress</code> class to a
                                            <code>&lt;div&gt;</code> element:</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Striped</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="muted">To create a default progress bar, add a
                                            <code>.progress-bar-striped</code> class to a
                                            <code>&lt;div&gt;</code> element:</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                                style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                                style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Animated Progress Bar</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="muted">To create a default progress bar, add a
                                            <code>.progress-bar-striped and .progress-bar-animated</code> class to a
                                            <code>&lt;div&gt;</code> element:</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 100%" aria-valuenow="100"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Animated Labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="muted">To create a default progress bar, add a
                                            <code>.progress-bar-striped and .progress-bar-animated</code> class to a
                                            <code>&lt;div&gt;</code> element:</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                                role="progressbar" style="width: 90%" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100">90%</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Heights</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="muted">To create a height progress bar, add a
                                            <code>.progress-bar</code> class to a
                                            <code>&lt;div&gt;</code> element:</p>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-5.0.2/js/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-5.0.2/js/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
