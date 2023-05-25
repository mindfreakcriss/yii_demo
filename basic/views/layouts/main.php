<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

//AppAsset::register($this);
\app\assets\SleekAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
<?php $this->beginBody() ?>

<div class="wrapper">
    <div id="toaster"></div>
    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    <aside class="left-sidebar bg-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="index" title="Sleek Dashboard">
                    <svg
                            class="brand-icon"
                            xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid"
                            width="30"
                            height="33"
                            viewBox="0 0 30 33"
                    >
                        <g fill="none" fill-rule="evenodd">
                            <path
                                    class="logo-fill-blue"
                                    fill="#7DBCFF"
                                    d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                            />
                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                    </svg>
                    <span class="brand-name text-truncate">Sleek Dashboard</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="nav-text">Dashboard</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="index.html">
                                        <span class="nav-text">Ecommerce</span>

                                    </a>
                                </li>



                                <li >
                                    <a class="sidenav-item-link" href="analytics.html">
                                        <span class="nav-text">Analytics</span>

                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                           aria-expanded="false" aria-controls="app">
                            <i class="mdi mdi-pencil-box-multiple"></i>
                            <span class="nav-text">App</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="app"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li >
                                    <a class="sidenav-item-link" href="chat.html">
                                        <span class="nav-text">Chat</span>

                                    </a>
                                </li>


                                <li >
                                    <a class="sidenav-item-link" href="contacts.html">
                                        <span class="nav-text">Contacts</span>

                                    </a>
                                </li>


                                <li >
                                    <a class="sidenav-item-link" href="team.html">
                                        <span class="nav-text">Team</span>

                                    </a>
                                </li>


                                <li >
                                    <a class="sidenav-item-link" href="calendar.html">
                                        <span class="nav-text">Calendar</span>

                                    </a>
                                </li>


                            </div>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </aside>

    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
<!--                    <div class="input-group">-->
<!--                        <button type="button" name="search" id="search-btn" class="btn btn-flat">-->
<!--                            <i class="mdi mdi-magnify"></i>-->
<!--                        </button>-->
<!--                        <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."-->
<!--                               autofocus autocomplete="off" />-->
<!--                    </div>-->
<!--                    <div id="search-results-container">-->
<!--                        <ul id="search-results"></ul>-->
<!--                    </div>-->
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <li class="right-sidebar-in right-sidebar-2-menu">
                            <i class="mdi mdi-settings mdi-spin"></i>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <span class="d-none d-lg-inline-block">Abdus Salam</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <div class="d-inline-block">
                                        Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                                    </div>
                                </li>

                                <li>
                                    <a href="index">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="index"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                </li>
                                <li class="right-sidebar-in">
                                    <a href="index"> <i class="mdi mdi-settings"></i> Setting </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="index"> <i class="mdi mdi-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


        </header>

        <div class="content-wrapper">
            <div class="content">
                <!-- Top Statistics -->
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">71,503</h2>
                                <p>Online Signups</p>
                                <div class="chartjs-wrapper">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini  mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">9,503</h2>
                                <p>New Visitors Today</p>
                                <div class="chartjs-wrapper">
                                    <canvas id="dual-line"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">71,503</h2>
                                <p>Monthly Total Order</p>
                                <div class="chartjs-wrapper">
                                    <canvas id="area-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4">
                            <div class="card-body">
                                <h2 class="mb-1">9,503</h2>
                                <p>Total Revenue This Year</p>
                                <div class="chartjs-wrapper">
                                    <canvas id="line"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-8 col-md-12">
                        <!-- Sales Graph -->
                        <div class="card card-default" data-scroll-height="675">
                            <div class="card-header">
                                <h2>Sales Of The Year</h2>
                            </div>
                            <div class="card-body">
                                <canvas id="linechart" class="chartjs"></canvas>
                            </div>
                            <div class="card-footer d-flex flex-wrap bg-white p-0">
                                <div class="col-6 px-0">
                                    <div class="text-center p-4">
                                        <h4>$6,308</h4>
                                        <p class="mt-2">Total orders of this year</p>
                                    </div>
                                </div>
                                <div class="col-6 px-0">
                                    <div class="text-center p-4 border-left">
                                        <h4>$70,506</h4>
                                        <p class="mt-2">Total revenue of this year</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <!-- Doughnut Chart -->
                        <div class="card card-default" data-scroll-height="675">
                            <div class="card-header justify-content-center">
                                <h2>Orders Overview</h2>
                            </div>
                            <div class="card-body" >
                                <canvas id="doChart" ></canvas>
                            </div>
                            <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                            <div class="card-footer d-flex flex-wrap bg-white p-0">
                                <div class="col-6">
                                    <div class="py-4 px-4">
                                        <ul class="d-flex flex-column justify-content-between">
                                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
                                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 border-left">
                                    <div class="py-4 px-4 ">
                                        <ul class="d-flex flex-column justify-content-between">
                                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
                                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="right-sidebar-2">
                <div class="right-sidebar-container-2">
                    <div class="slim-scroll-right-sidebar-2">

                        <div class="right-sidebar-2-header">
                            <h2>Layout Settings</h2>
                            <p>User Interface Settings</p>
                            <div class="btn-close-right-sidebar-2">
                                <i class="mdi mdi-window-close"></i>
                            </div>
                        </div>

                        <div class="right-sidebar-2-body">
                            <span class="right-sidebar-2-subtitle">Header Layout</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
                            </div>

                            <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
                            <div class="no-col-space">
                                <select class="right-sidebar-2-select" id="sidebar-option-select">
                                    <option value="sidebar-fixed">Fixed Default</option>
                                    <option value="sidebar-fixed-minified">Fixed Minified</option>
                                    <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                                    <option value="sidebar-static">Static Default</option>
                                    <option value="sidebar-static-minified">Static Minified</option>
                                    <option value="sidebar-static-offcanvas">Static Offcanvas</option>
                                </select>
                            </div>

                            <span class="right-sidebar-2-subtitle">Header Background</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
                            </div>

                            <span class="right-sidebar-2-subtitle">Navigation Background</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
                            </div>

                            <span class="right-sidebar-2-subtitle">Direction</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
                            </div>

                            <div class="d-flex justify-content-center" style="padding-top: 30px">
                                <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
                                    Settings</div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                    <a
                            class="text-primary"
                            href="http://www.iamabdus.com/"
                            target="_blank"
                    >Abdus</a
                    >.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </footer>

    </div>

<!--        <div class="content-wrapper">-->
<!--            <div class="content">-->
<!--                --><?php //= Alert::widget() ?>
<!--                --><?php //= $content ?>
<!--            </div>-->
<!--        </div>-->
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
