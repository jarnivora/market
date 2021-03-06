<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url() ?>design/admin/assets/images/favicon.ico">

        <!-- Sweet Alert -->
        <link href="<?= base_url() ?>design/admin/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>design/admin/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>design/admin/assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?= base_url() ?>design/admin/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?= base_url() ?>design/admin/assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="<?= base_url('admin/home') ?>" class="logo">
                            <img src="<?= base_url() ?>design/admin/assets/images/logo.png" alt="logo" class="logo-lg" />
                            <img src="<?= base_url() ?>design/admin/assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= base_url() ?>design/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="<?= base_url() ?>design/admin/assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#">Stanley Jones</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="<?= base_url('admin/home') ?>"><i class="ti-home"></i> Dashboard </a></li>

                                <li><a href="<?= base_url('admin/ui_elements') ?>"><span class="label label-custom pull-right">11</span> <i class="ti-paint-bucket"></i> UI Elements </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Components <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="<?= base_url('admin/components_range_slider') ?>">Range Slider</a></li>
                                        <li><a href="<?= base_url('admin/components_alerts') ?>">Alerts</a></li>
                                        <li><a href="<?= base_url('admin/components_icons') ?>">Icons</a></li>
                                        <li><a href="<?= base_url('admin/components_widgets') ?>">Widgets</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?= base_url('admin/typography') ?>"><i class="ti-spray"></i> Typography </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Forms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="<?= base_url('admin/forms_general') ?>">General Elements</a></li>
                                        <li><a href="<?= base_url('admin/forms_advanced') ?>">Advanced Form</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Tables <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="<?= base_url('admin/tables_basic') ?>">Basic tables</a></li>
                                        <li><a href="<?= base_url('admin/tables_advanced') ?>">Advanced tables</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?= base_url('admin/charts') ?>"><span class="label label-custom pull-right">5</span> <i class="ti-pie-chart"></i> Charts </a></li>

                                <li><a href="<?= base_url('admin/maps') ?>"><i class="ti-location-pin"></i> Maps </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="<?= base_url('admin/pages_login') ?>">Login</a></li>
                                        <li><a href="<?= base_url('admin/pages_register') ?>">Register</a></li>
                                        <li><a href="<?= base_url('admin/pages_forget_password') ?>">Forget Password</a></li>
                                        <li><a href="<?= base_url('admin/pages_lock_screen') ?>">Lock-screen</a></li>
                                        <li><a href="<?= base_url('admin/pages_blank') ?>">Blank page</a></li>
                                        <li><a href="<?= base_url('admin/pages_error') ?>">Error 404</a></li>
                                        <li><a href="<?= base_url('admin/pages_confirm_mail') ?>">Confirm Mail</a></li>
                                        <li><a href="<?= base_url('admin/pages_session_expired') ?>">Session Expired</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-widget"></i> Extra Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="<?= base_url('admin/extras_timeline') ?>">Timeline</a></li>
                                        <li><a href="<?= base_url('admin/extras_invoice') ?>">Invoice</a></li>
                                        <li><a href="<?= base_url('admin/extras_profile') ?>">Profile</a></li>
                                        <li><a href="<?= base_url('admin/extras_calendar') ?>">Calendar</a></li>
                                        <li><a href="<?= base_url('admin/extras_faqs') ?>">FAQs</a></li>
                                        <li><a href="<?= base_url('admin/extras_pricing') ?>">Pricing</a></li>
                                        <li><a href="<?= base_url('admin/extras_contacts') ?>">Contacts</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-share"></i> Multi Level <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                                        <li><a href="javascript: void(0);" aria-expanded="true">Level 1.2 <span class="fa arrow"></span></a>
                                            <ul class="nav-third-level nav" aria-expanded="true">
                                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-20">
                                    <h4 class="header-title">Bootstrap Alerts</h4>

                                    <div class="row">
                                        <div class="col-sm-6 m-t-20">
                                            <h6>Default Alert</h6>
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Well done!</strong> You successfully read this important alert
                                                message.
                                            </div>
                                            <div class="alert alert-info alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not
                                                super important.
                                            </div>
                                            <div class="alert alert-warning alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Holy guacamole!</strong> You should check in on some of those
                                                fields below.
                                            </div>
                                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting
                                                again.
                                            </div>
                                        </div>
                                        <!-- end col -->


                                        <div class="col-sm-6 m-t-20">
                                            <h6>Icon Examples</h6>
                                            <div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-check-all"></i>
                                                <strong>Well done!</strong> You successfully read this important alert
                                                message.
                                            </div>
                                            <div class="alert alert-icon alert-info alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-information"></i>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not
                                                super important.
                                            </div>
                                            <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-alert"></i>
                                                <strong>Holy guacamole!</strong> You should check in on some of those
                                                fields below.
                                            </div>
                                            <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-block-helper"></i>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting
                                                again.
                                            </div>
                                        </div>
                                        <!-- end col -->

                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-sm-6 m-t-20">
                                            <h6>Default Alert (White)</h6>
                                            <div class="alert alert-success alert-white alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Well done!</strong> You successfully read this important alert
                                                message.
                                            </div>
                                            <div class="alert alert-info alert-white alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not
                                                super important.
                                            </div>
                                            <div class="alert alert-warning alert-white alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Holy guacamole!</strong> You should check in on some of those
                                                fields below.
                                            </div>
                                            <div class="alert alert-danger alert-white alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting
                                                again.
                                            </div>
                                        </div>
                                        <!-- end col -->


                                        <div class="col-sm-6 m-t-20">
                                            <h6>Icon Examples (White)</h6>
                                            <div class="alert alert-icon alert-white alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-check-all"></i>
                                                <strong>Well done!</strong> You successfully read this important alert
                                                message.
                                            </div>
                                            <div class="alert alert-icon alert-white alert-info alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-information"></i>
                                                <strong>Heads up!</strong> This alert needs your attention, but it's not
                                                super important.
                                            </div>
                                            <div class="alert alert-icon alert-white alert-warning alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-alert"></i>
                                                <strong>Holy guacamole!</strong> You should check in on some of those
                                                fields below.
                                            </div>
                                            <div class="alert alert-icon alert-white alert-danger alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="mdi mdi-block-helper"></i>
                                                <strong>Oh snap!</strong> Change a few things up and try submitting
                                                again.
                                            </div>
                                        </div>
                                        <!-- end col -->

                                    </div>
                                    <!-- end row -->

                                </div>
                                <!-- end bootstrap alert -->


                                <div class="p-t-50">
                                    <h4 class="header-title">Sweet Alert 2</h4>

                                    <p class="text-muted m-b-30">
                                        A beautiful and customizable replacement for JavaScript's popup boxes
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="min-width:50%;">Alert Type</th>
                                                        <th>Example</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="middle-align">A basic message</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="middle-align">A title with a text under</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">A success message!</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">A warning message, with a function attached to the "Confirm"-button...</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">By passing a parameter, you can execute something else for "Cancel".</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">A message with custom Image Header</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">A message with auto close timer</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">Custom HTML description and buttons</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="custom-html-alert">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">A message with custom width, padding and background</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="custom-padding-width-alert">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">Ajax request example</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="ajax-alert">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">Chaining modals (queue) example</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="chaining-alert">Click me</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="middle-align">Dynamic queue example</td>
                                                        <td>
                                                            <button class="btn btn-default waves-effect waves-light btn-sm" id="dynamic-alert">Click me</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                                <!-- end Sweet Alert section -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.slimscroll.min.js"></script>

        <!-- Sweet-Alert  -->
        <script src="<?= base_url() ?>design/admin/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- App Js -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.app.js"></script>

    </body>
</html>