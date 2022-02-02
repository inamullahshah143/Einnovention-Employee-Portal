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
    <title>Grid System</title>

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
                        <h5 class="heading-title">Fixed Grid</h5>
                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                            <div class="col">
                                <section class="card">
                                    <div class="card-body text-secondary">.col</div>
                                </section>
                            </div>
                        </div>

                        <h5 class="heading-title">Desktop Grid</h5>
                        <div class="row">
                            <div class="col col-lg-12">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-12</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-6</div>
                                </section>
                            </div>
                            <div class="col-lg-6 ">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-6</div>
                                </section>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-4</div>
                                </section>
                            </div>
                            <div class="col-lg-4">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-4</div>
                                </section>
                            </div>
                            <div class="col-lg-4">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-4</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-3</div>
                                </section>
                            </div>
                            <div class="col-lg-3">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-3</div>
                                </section>
                            </div>
                            <div class="col-lg-3">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-3</div>
                                </section>
                            </div>
                            <div class="col-lg-3">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-3</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-2</div>
                                </section>
                            </div>
                            <div class="col-lg-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-2</div>
                                </section>
                            </div>
                            <div class="col-lg-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-2</div>
                                </section>
                            </div>
                            <div class="col-lg-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-2</div>
                                </section>
                            </div>
                            <div class="col-lg-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-2</div>
                                </section>
                            </div>
                            <div class="col-lg-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-2</div>
                                </section>
                            </div>
                        </div>


                        <h4 class="heading-title">Mobile, Tablet, and Desktop</h4>

                        <div class="row">
                            <div class="col-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-2</div>
                                </section>
                            </div>
                            <div class="col-2">
                                <section class="card">
                                    <div class="card-body text-secondary">col-2</div>
                                </section>
                            </div>
                            <div class="col-lg-8">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-8</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <section class="card">
                                    <div class="card-body text-secondary">col-sm-3</div>
                                </section>
                            </div>
                            <div class="col-sm-3">
                                <section class="card">
                                    <div class="card-body text-secondary">col-sm-3</div>
                                </section>
                            </div>
                            <div class="col-lg-6">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-6</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <section class="card">
                                    <div class="card-body text-secondary">col-md-4</div>
                                </section>
                            </div>
                            <div class="col-md-4">
                                <section class="card">
                                    <div class="card-body text-secondary">col-md-4</div>
                                </section>
                            </div>
                            <div class="col-lg-4">
                                <section class="card">
                                    <div class="card-body text-secondary">col-lg-4</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <section class="card">
                                    <div class="card-body text-secondary">col-sm-6</div>
                                </section>
                            </div>
                            <div class="col-sm-6">
                                <section class="card">
                                    <div class="card-body text-secondary">col-sm-6</div>
                                </section>
                            </div>
                        </div>


                        <h5 class="heading-title">Offset Grid</h5>

                        <div class="row">
                            <div class="col-md-6 offset-md-6 col-sm-6 ml-auto">
                                <section class="card">
                                    <div class="card-body text-secondary">col-md-6 offset-md-6 col-sm-6 </div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 offset-md-3 mr-auto ml-auto">
                                <section class="card">
                                    <div class="card-body text-secondary">.col-md-6 .offset-md-3</div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <section class="card">
                                    <div class="card-body text-secondary"> .col-md-4 </div>
                                </section>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <section class="card">
                                    <div class="card-body text-secondary">.col-md-4 .ml-auto</div>
                                </section>
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
