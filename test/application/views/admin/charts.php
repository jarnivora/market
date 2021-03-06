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

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                                <h4 class="header-title m-t-0">Morris Charts</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Stacked Bar Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Create stacked bar charts using Morris.Bar(options), where options is an object
                                        containing the configuration options.
                                    </p>
                                    <div id="morris-bar-stacked" style="height: 300px;"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Area Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Create an area chart using Morris.Area(options). Area charts take all the
                                        same options as line charts.
                                    </p>

                                    <div id="morris-area-example" style="height: 300px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Line Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        The public API is terribly simple. It's just one function: Morris.Line
                                        (options), where options is an object containing some of the
                                        configuration options.
                                    </p>

                                    <div id="morris-line-example" style="height: 300px;"></div>

                                </div> <!-- p-20 m-b-20 -->

                            </div> <!-- end row -->

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Bar Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Create bar charts using Morris.Bar(options), where options is an object
                                        containing the configuration options.
                                    </p>

                                    <div id="morris-bar-example" style="height: 320px;"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Area Chart with Point</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Create an area chart using Morris.Area(options). Area charts take all the
                                        same options as line charts.
                                    </p>

                                    <div id="morris-area-with-dotted" style="height: 320px;"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Donut Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        This really couldn't be easier. Create a Donut chart using Morris.Donut(options).
                                    </p>

                                    <div id="morris-donut-example" style="height: 320px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row m-t-30">
                            <div class="col-sm-12 m-t-30">
                                <h4 class="header-title m-t-0">Flot Charts</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Multiple Statistics</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Stacked chart not only shows the trends over time, you can also see the cumulative
                                        sum of all data.Your awesome text goes here.
                                    </p>

                                    <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Realtime Statistics</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        You can update a chart periodically to get a real-time effect by using a timer
                                        to insert the new data in the plot and redraw it.
                                    </p>

                                    <div id="flotRealTime" style="height: 320px;" class="flot-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Line Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        The line chart is most often used chart, aslo the easiest to make, it shows trends over time,
                                        visualizes data and information, so users can know how exactly these numbers are relate to
                                        each other in one glance.
                                    </p>

                                    <div id="website-stats1" style="height: 320px;" class="flot-chart"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Donut Pie</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Pie chart is used to see the proprotion of each data groups, making Flot pie chart is pretty simple,
                                        in order to make pie chart you have to incldue jquery.flot.pie.js plugin.
                                    </p>

                                    <div id="donut-chart">
                                        <div id="donut-chart-container" class="flot-chart" style="height: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Pie Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Pie chart is used to see the proprotion of each data groups, making Flot pie chart is pretty simple,
                                        in order to make pie chart you have to incldue jquery.flot.pie.js plugin.
                                    </p>

                                    <div id="pie-chart">
                                        <div id="pie-chart-container" class="flot-chart" style="height: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Stacked Bar chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        With the stack plugin, you can have Flot stack the series. This is useful if you wish to display
                                        both a total and the constituents it is made of.
                                    </p>

                                    <div id="ordered-bars-chart" style="height: 320px;"></div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Line Chart</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        The line chart is most often used chart, aslo the easiest to make, it shows trends over time,
                                        visualizes data and information, so users can know how exactly these numbers are relate to
                                        each other in one glance.
                                    </p>

                                    <div id="line-chart-alt"  style="height:320px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0 m-b-30">Combine Chart</h5>

                                    <div id="combine-chart">
                                        <div id="combine-chart-container" class="flot-chart" style="height: 320px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row m-t-30">
                            <div class="col-sm-12 m-t-30">
                                <h4 class="header-title m-t-0">Knob Charts</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2"
                                           data-fgColor="#188ae2" data-displayInput=false value="35"/>
                                    <h6 class="text-muted m-t-10">Disable display input</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                           data-fgColor="#4bd396" value="29"/>
                                    <h6 class="text-muted m-t-10">Cursor mode</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#3ac9d6" data-displayPrevious=true value="44"/>
                                    <h6 class="text-muted m-t-10">Display previous value</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="p-20 m-b-20">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#f9c851" data-displayPrevious=true data-angleOffset=-125
                                           data-angleArc=250 value="44"/>
                                    <h6 class="text-muted m-t-10">Angle offset and arc</h6>
                                </div>
                            </div><!-- end col-->
                        </div><!-- end row -->



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

        <!--Morris Chart-->
		<script src="<?= base_url() ?>design/admin/assets/plugins/morris/morris.min.js"></script>
		<script src="<?= base_url() ?>design/admin/assets/plugins/raphael/raphael-min.js"></script>
		<script src="<?= base_url() ?>design/admin/assets/pages/jquery.morris.init.js"></script>

        <!-- Flot chart -->
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/pages/jquery.flot.init.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?= base_url() ?>design/admin/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- App Js -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('[data-plugin="knob"]').each(function(idx, obj) {
                $(this).knob();
             });
        </script>

    </body>
</html>