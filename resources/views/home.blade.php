@extends('layouts.panel')

@section('title', 'Home')

@section('content')

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('images/logo-mini.png')}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('images/logo-mini.png')}}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <!-- buscar por rut -->
        <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar por RUT">
                    <button class="btn btn-outline-primary" type="submit">buscar</button>
                </div>
            </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Reports </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-file-word mr-2"></i>doc </a>
                </div>
            </li>

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{asset('images/faces/face28.png')}}" alt="image">
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{auth()->user()->name}}</p>
                    </div>
                </a>
                @include('includes.panel.opcionesUser')
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count-symbol bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{asset('images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                            <p class="text-gray mb-0"> 1 Minutes ago </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{asset('images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                            <p class="text-gray mb-0"> 15 Minutes ago </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{asset('images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                            <p class="text-gray mb-0"> 18 Minutes ago </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                            <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                            <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="mdi mdi-link-variant"></i>
                            </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                            <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                            <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->
@include('includes.panel.menu')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

                <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                    <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                    <ul class="nav nav-tabs tab-transparent" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                        </li>
                    </ul>
                    <div class="d-md-block d-none">
                        <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                        <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                    </div>
                </div>
                <div class="tab-content tab-transparent-content">
                    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                                        <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                                        <p class="mt-4 mb-0">Completed</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                                        <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                                        <p class="mt-4 mb-0">Increased since yesterday</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                                        <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                                        <p class="mt-4 mb-0">Increased since yesterday</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                                        <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                                        <p class="mt-4 mb-0">Decreased since yesterday</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <h4 class="card-title mb-0">Recent Activity</h4>
                                                    <div class="dropdown dropdown-arrow-none">
                                                        <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                                            <h6 class="dropdown-header">Settings</h6>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                                                <div class="wrapper pb-5 border-bottom">
                                                    <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                                        <p class="mb-0 text-dark">Total Profit</p>
                                                        <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>
                                                    </div>
                                                    <h3 class="mb-0 text-dark font-weight-bold">$ 92556</h3>
                                                    <canvas id="total-profit"></canvas>
                                                </div>
                                                <div class="wrapper pt-5">
                                                    <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                                        <p class="mb-0 text-dark">Expenses</p>
                                                        <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>
                                                    </div>
                                                    <h3 class="mb-4 text-dark font-weight-bold">$ 59565</h3>
                                                    <canvas id="total-expences"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                                                <div class="pl-0 pl-lg-4 ">
                                                    <div class="d-xl-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                                            <h3 class="text-dark font-weight-bold mr-2 mb-0">Devices sales</h3>
                                                            <h5 class="mb-0">( growth 62% )</h5>
                                                        </div>
                                                        <div class="d-lg-flex">
                                                            <p class="mr-2 mb-0">Timezone:</p>
                                                            <p class="text-dark font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                                                        </div>
                                                    </div>
                                                    <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                                                    <canvas id="device-sales"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 grid-margin stretch-card">
                                <div class="card card-danger-gradient">
                                    <div class="card-body mb-4">
                                        <h4 class="card-title text-white">Account Retention</h4>
                                        <canvas id="account-retension"></canvas>
                                    </div>
                                    <div class="card-body bg-white pt-4">
                                        <div class="row pt-4">
                                            <div class="col-sm-6">
                                                <div class="text-center border-right border-md-0">
                                                    <h4>Conversion</h4>
                                                    <h1 class="text-dark font-weight-bold mb-md-3">$306</h1>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-center">
                                                    <h4>Cancellation</h4>
                                                    <h1 class="text-dark font-weight-bold">$1,520</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8  grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-xl-flex justify-content-between mb-2">
                                            <h4 class="card-title">Page views analytics</h4>
                                            <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                                        </div>
                                        <canvas id="page-view-analytic"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>

@endsection