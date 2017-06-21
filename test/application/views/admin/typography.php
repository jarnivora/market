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
                                <div class="">
                                    <h4 class="header-title">Typography</h4>

                                    <h1>This is a Heading 1</h1>
                                    <p class="text-muted">Suspendisse vel quam malesuada, aliquet sem sit
                                        amet, fringilla elit. Morbi
                                        tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien
                                        nec,
                                        varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros
                                        hendrerit
                                        est consequat posuere et at velit.</p>

                                    <div class="clearfix"></div>

                                    <h2>This is a Heading 2</h2>
                                    <p class="text-muted">In nec rhoncus eros. Vestibulum eu mattis nisl.
                                        Quisque viverra viverra magna
                                        nec pulvinar. Maecenas pellentesque porta augue, consectetur
                                        facilisis diam
                                        porttitor sed. Suspendisse tempor est sodales augue rutrum
                                        tincidunt.
                                        Quisque a malesuada purus.</p>

                                    <div class="clearfix"></div>

                                    <h3>This is a Heading 3</h3>
                                    <p class="text-muted">Vestibulum auctor tincidunt semper. Phasellus ut
                                        vulputate lacus. Suspendisse
                                        ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl
                                        nisi,
                                        feugiat quis bibendum vitae, dapibus in tellus.</p>

                                    <div class="clearfix"></div>

                                    <h4>This is a Heading 4</h4>
                                    <p class="text-muted">Nulla et mattis nunc. Curabitur scelerisque
                                        commodo condimentum. Mauris
                                        blandit, velit a consectetur egestas, diam arcu fermentum justo,
                                        eget
                                        ultrices arcu eros vel erat.</p>

                                    <div class="clearfix"></div>

                                    <h5>This is a Heading 5</h5>
                                    <p class="text-muted">Quisque nec turpis at urna dictum luctus.
                                        Suspendisse convallis dignissim
                                        eros at volutpat. In egestas mattis dui. Aliquam mattis dictum
                                        aliquet.
                                        Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.
                                        Vivamus
                                        pretium nec odio cursus elementum. Suspendisse molestie ullamcorper
                                        ornare.</p>

                                    <div class="clearfix"></div>

                                    <h6>This is a Heading 6</h6>
                                    <p class="text-muted">Donec ultricies, lacus id tempor condimentum, orci
                                        leo faucibus sem, a
                                        molestie libero lectus ac justo. ultricies mi eros, sit amet tempor
                                        nulla
                                        varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in
                                        tellus.</p>


                                    <div class="row p-t-50">
                                        <div class="col-sm-6 m-t-20">
                                            <h5 class="m-b-30">Inline text elements</h5>

                                            <p class="lead m-t-0">
                                                Your title goes here
                                            </p>

                                            You can use the mark tag to
                                            <mark>
                                                highlight</mark> text.

                                            <br><br>

                                            <del>This line of text is meant to be treated as deleted text.</del>

                                            <br><br>

                                            <ins>This line of text is meant to be treated as an addition to the document.</ins>

                                            <br><br>

                                            <strong>rendered as bold text</strong>

                                            <br><br>

                                            <em>rendered as italicized text</em>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h5 class="m-b-30">Contextual Text Colors</h5>

                                            <p class="text-custom">
                                                Etiam porta sem malesuada magna mollis euismod.
                                            </p>

                                            <p class="text-muted">
                                                Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                                            </p>
                                            <p class="text-primary">
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p class="text-success">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                            </p>
                                            <p class="text-info">
                                                Maecenas sed diam eget risus varius blandit sit amet non magna.
                                            </p>
                                            <p class="text-warning">
                                                Etiam porta sem malesuada magna mollis euismod.
                                            </p>
                                            <p class="text-danger">
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                            <p class="text-dark">
                                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>

                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row p-t-50">
                                        <div class="col-sm-4 m-t-20">
                                            <h5 class="m-b-30">Unordered</h5>

                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                </li>
                                                <li>
                                                    Facilisis in pretium nisl aliquet
                                                </li>
                                                <li>
                                                    Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>
                                                            Phasellus iaculis neque
                                                        </li>
                                                        <li>
                                                            Purus sodales ultricies
                                                        </li>
                                                        <li>
                                                            Vestibulum laoreet porttitor sem
                                                        </li>
                                                        <li>
                                                            Ac tristique libero volutpat at
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Aenean sit amet erat nunc
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="col-sm-4 m-t-20">
                                            <h5>Ordered</h5>

                                            <ol>
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Consectetur adipiscing elit
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                </li>
                                                <li>
                                                    Facilisis in pretium nisl aliquet
                                                </li>
                                                <li>
                                                    Nulla volutpat aliquam velit
                                                    <ol>
                                                        <li>
                                                            Phasellus iaculis neque
                                                        </li>
                                                        <li>
                                                            Purus sodales ultricies
                                                        </li>
                                                        <li>
                                                            Vestibulum laoreet porttitor sem
                                                        </li>
                                                        <li>
                                                            Ac tristique libero volutpat at
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Aenean sit amet erat nunc
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ol>
                                        </div>

                                        <div class="col-sm-4 m-t-20">
                                            <h5>Unstyled</h5>

                                            <ul class="list-unstyled">
                                                <li>
                                                    Lorem ipsum dolor sit amet
                                                </li>
                                                <li>
                                                    Integer molestie lorem at massa
                                                    <ul>
                                                        <li>
                                                            Phasellus iaculis neque
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Faucibus porta lacus fringilla vel
                                                </li>
                                                <li>
                                                    Eget porttitor lorem
                                                </li>
                                            </ul>

                                            <h5>Inline</h5>
                                            <p class="text-muted m-b-15 font-13">
                                                Place all list items on a single line with <code>
                                                    display: inline-block;</code>
                                                and some light padding.
                                            </p>

                                            <ul class="list-inline m-b-0">
                                                <li class="list-inline-item">
                                                    Lorem ipsum
                                                </li>
                                                <li class="list-inline-item">
                                                    Phasellus iaculis
                                                </li>
                                                <li class="list-inline-item">
                                                    Nulla volutpat
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <!-- end row -->


                                    <div class="row p-t-50">
                                        <div class="col-sm-6 m-t-20">
                                            <h5 class="m-b-30">Blockquotes</h5>

                                            <blockquote class="blockquote">
                                                <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite
                                                        title="Source Title">Source Title</cite></footer>
                                            </blockquote>

                                            <p class="text-muted m-b-15 m-t-20 font-13">
                                                Add <code>
                                                .blockquote-reverse</code>
                                                for a blockquote with right-aligned content.
                                            </p>

                                            <blockquote class="blockquote blockquote-reverse">
                                                <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite
                                                        title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>

                                        <div class="col-sm-6 m-t-20">
                                            <h5 class="m-b-30">Horizontal description</h5>

                                            <dl class="dl-horizontal row">
                                                <dt class="col-sm-3">Description lists</dt>
                                                <dd class="col-sm-9">A description list is perfect for defining terms.
                                                </dd>

                                                <dt class="col-sm-3">Euismod</dt>
                                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper
                                                    eget lacinia odio sem nec elit.
                                                </dd>
                                                <dd class="col-sm-9 col-sm-offset-3">Donec id elit non mi porta gravida
                                                    at eget metus.
                                                </dd>

                                                <dt class="col-sm-3">Malesuada porta</dt>
                                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.
                                                </dd>

                                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor
                                                    mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
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

        <!-- App Js -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.app.js"></script>

    </body>
</html>