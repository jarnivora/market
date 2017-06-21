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
                        <a href="index.html" class="logo">
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
                                <li><a href="index.html"><i class="ti-home"></i> Dashboard </a></li>

                                <li><a href="ui-elements.html"><span class="label label-custom pull-right">11</span> <i class="ti-paint-bucket"></i> UI Elements </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Components <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="components-range-slider.html">Range Slider</a></li>
                                        <li><a href="components-alerts.html">Alerts</a></li>
                                        <li><a href="components-icons.html">Icons</a></li>
                                        <li><a href="components-widgets.html">Widgets</a></li>
                                    </ul>
                                </li>

                                <li><a href="typography.html"><i class="ti-spray"></i> Typography </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Forms <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="forms-general.html">General Elements</a></li>
                                        <li><a href="forms-advanced.html">Advanced Form</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-menu-alt"></i> Tables <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="tables-basic.html">Basic tables</a></li>
                                        <li><a href="tables-advanced.html">Advanced tables</a></li>
                                    </ul>
                                </li>

                                <li><a href="charts.html"><span class="label label-custom pull-right">5</span> <i class="ti-pie-chart"></i> Charts </a></li>

                                <li><a href="maps.html"><i class="ti-location-pin"></i> Maps </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-forget-password.html">Forget Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                        <li><a href="pages-blank.html">Blank page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                        <li><a href="pages-session-expired.html">Session Expired</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-widget"></i> Extra Pages <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>
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
                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Product Sold</h6>
                                    <h2 class="m-b-20"><span>1,890</span></h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Average Price</h6>
                                    <h2 class="m-b-20">$<span>22.56</span></h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                                    <h6 class="text-muted m-t-0 text-uppercase">Orders</h6>
                                    <h2 class="m-b-20">9,754</h2>
                                    <div class="progress progress-sm m-0">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                	<i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                	<h4 class="m-t-0 text-dark">Income status</h4>
                                	<h2 class="text-primary text-center m-b-30 m-t-30">$<span data-plugin="counterup">31570</span></h2>
                                	<p class="text-muted m-b-0">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-box">
                                	<i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                	<h4 class="m-t-0 text-dark">Sales status</h4>
                                	<h2 class="text-pink text-center m-b-30 m-t-30"><span data-plugin="counterup">683</span></h2>
                                	<p class="m-b-0 text-muted">Total sales: 2398 <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>7.85%</span></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-box">
                                	<i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right"></i>
                                	<h4 class="m-t-0 text-dark">Income status</h4>
                                	<h2 class="text-success text-center m-b-30 m-t-30">$<span data-plugin="counterup">3652</span></h2>
                                	<p class="m-b-0 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3><i class="text-primary mdi mdi-access-point-network"></i> <b data-plugin="counterup">8954</b></h3>
												<p class="text-muted">Lifetime total sales</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3><i class="text-custom mdi mdi-airplay"></i> <b data-plugin="counterup">7841</b></h3>
												<p class="text-muted">Income amounts</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3><i class="text-info mdi mdi-black-mesa"></i> <b data-plugin="counterup">6521</b></h3>
												<p class="text-muted">Total users</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center b-0">
												<h3><i class="text-danger mdi mdi-cellphone-link"></i> <b data-plugin="counterup">325</b></h3>
												<p class="text-muted">Total visits</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
                        <!--end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>design/admin/assets/images/users/avatar-3.jpg" class="img-circle img-thumbnail" alt="user-img" height="120" width="120">
                                        <h4 class="m-b-5">Oscar Harris</h4>
                                        <p class="text-muted m-b-20"><i>Web Designer</i></p>
                                    </div>
                                    <p class="text-muted line-h-24">In nec rhoncus eros. Vestibulum eu mattis nisl. Quisque viverra viverra magna nec
                                        pulvinar. Maecenas pellentesque porta augue, consectetur facilisis diam
                                        porttitor purus... <a href="" class="text-primary"><b>Read More</b></a> </p>

                                    <div class="row text-center m-t-30">
                                        <div class="col-xs-4">
                                            <h3 data-plugin="counterup" class="text-success">1,507</h3>
                                            <p class="text-muted">Total Sales</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h3 data-plugin="counterup" class="text-danger">916</h3>
                                            <p class="text-muted">Open Compaign</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h3 data-plugin="counterup" class="text-warning">22</h3>
                                            <p class="text-muted">Daily Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="panel bg-twitter social-feed-box">
                                    <div class="panel-body">
                                        <div class="">
                                            <span class="text-uppercase pull-right"><b>Latest Tweets</b></span>
                                            <i class="fa fa-twitter fa-2x"></i>
                                        </div>
                                        <div id="twitter-slider" class="carousel slide social-feed-slider" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators m-b-0">
                                                <li data-target="#twitter-slider" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#twitter-slider" data-slide-to="1"></li>
                                                <li data-target="#twitter-slider" data-slide-to="2"></li>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <div class="m-t-20" >
                                                        <h3 class="text-white m-b-5">Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin...</h3>
                                                        <span class="font-13"><small>10 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="m-t-20">
                                                        <h3 class="text-white m-b-5">Latin literature from 45 BC,making it over 2000 years old. Contrary to popular belief...</h3>
                                                        <span class="font-13"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="m-t-20">
                                                        <h3 class="text-white m-b-5">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin lit...</h3>
                                                        <span class="font-13"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="panel bg-facebook social-feed-box">
                                    <div class="panel-body">
                                        <div class="">
                                            <span class="text-uppercase pull-right"><b>Facebook Feed</b></span>
                                            <i class="fa fa-facebook fa-2x"></i>
                                        </div>

                                        <div id="facebook-slider" class="carousel slide social-feed-slider" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators m-b-0">
                                                <li data-target="#facebook-slider" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#facebook-slider" data-slide-to="1"></li>
                                                <li data-target="#facebook-slider" data-slide-to="2"></li>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <div class="m-t-20" >
                                                        <h3 class="text-white m-b-5">Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin...</h3>
                                                        <span class="font-13"><small>10 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="m-t-20">
                                                        <h3 class="text-white m-b-5">Latin literature from 45 BC,making it over 2000 years old. Contrary to popular belief...</h3>
                                                        <span class="font-13"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="m-t-20">
                                                        <h3 class="text-white m-b-5">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin lit...</h3>
                                                        <span class="font-13"><small>6 March, 2017</small></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--- end col -->


                            <div class="col-md-4">
                                <div class="card-box p-b-0">
                                    <a href="javascript:;" class="center-block text-center text-dark">
                                        <img src="<?= base_url() ?>design/admin/assets/images/users/avatar-4.jpg" class="thumb-xl img-thumbnail img-circle" alt="">
                                        <div class="h5 m-b-0"><strong>Arashas Smith</strong></div>
                                    </a>
                                    <div class="bg-custom pull-in-card p-20 widget-box-two m-b-0 m-t-30 list-inline text-center row">
                                        <div class="col-xs-4">
                                            <h4 class="text-white m-0 font-600">782</h4>
                                            <p class="text-white m-b-0">Followers</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h4 class="text-white m-0 font-600">834</h4>
                                            <p class="text-white m-b-0">Following</p>
                                        </div>
                                        <div class="col-xs-4">
                                            <h4 class="text-white m-0 font-600">2907</h4>
                                            <p class="text-white m-b-0">Likes</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default hover-effect">
                                    <div class="panel-heading p-0">
                                        <div class="pro-widget-img"></div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="clearfix col-lg-6 col-md-6 col-sm-6">
                                            <h4 class="m-t-0 m-b-5">Adhamdannaway</h4>
                                            <p class="c-gray f-16 align-center">Photographer</p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6 p-t-20">
                                            <div class="col-xs-4">
                                                <div class="text-center m-b-5">
                                                    <i class="mdi mdi-comment-processing"></i>
                                                </div>
                                                <div class="text-center">
                                                    1568
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="text-center m-b-5">
                                                    <i class="mdi mdi-thumb-up text-success"></i>
                                                </div>
                                                <div class="text-center">
                                                    866
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="text-center m-b-5">
                                                    <i class="mdi mdi-heart text-danger"></i>
                                                </div>
                                                <div class="text-center">
                                                    254
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- end row -->

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

        <!-- App Js -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.app.js"></script>

    </body>
</html>