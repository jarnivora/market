<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>POSSI-DASHBOARD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url() ?>design/admin/assets/logo/logo-light.png">

        <!-- DataTables -->
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>design/admin/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
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
                            <img src="<?= base_url() ?>design/admin/assets/images/possi.png" alt="logo" class="logo-lg" />
                            <img src="<?= base_url() ?>design/admin/assets/logo/logo-light.png" alt="logo" class="logo-sm hidden" />
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
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= base_url() ?>design/admin/assets/logo/logo-light.png" alt="user-img" class="img-circle"> </a>
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
                                    <img src="<?= base_url() ?>design/admin/assets/logo/logo-light.png" alt="" class="thumb-md img-circle">
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
                                <li>
                                    <a href="javascript: void(0);"><i class="ti-notepad"></i> Products <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav">
                                        <li><a href="<?= base_url('admin/add_product') ?>"><i class="fa fa-plus"></i> Add Product</a></li>
                                        <li><a href="<?= base_url('admin/manage_products') ?>"><i class="ti-pencil"></i> Manage Products</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);"><i class="fa fa-cubes"></i> Category <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav">
                                        <li><a href="<?= base_url('admin/add_category') ?>"><i class="fa fa-plus"></i> Add Category</a></li>
                                        <li><a href="<?= base_url('admin/manage_category') ?>"><i class="ti-pencil"></i> Manage Category</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);"><i class="ti-money"></i> Transactions <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav">
                                        <li><a href="<?= base_url('admin/orders_history') ?>"><i class="fa ti-file"></i> History Order</a></li>

                                        <li><a href="<?= base_url('admin/shipping') ?>"><i class="fa ti-truck"></i> Shipping</a></li>

                                        <li><a href="<?= base_url('admin/payments') ?>"><i class="ti-money"></i> Payment History</a></li>

                                        <li><a href="<?= base_url('admin/retur') ?>"><i class="ti-receipt"></i> Retur</a></li>

                                        <li><a href="<?= base_url('admin/orders') ?>"><i class="ti-shopping-cart-full"></i> Manage Orders</a></li>
                                        <li><a href="<?= base_url('admin/complaints') ?>"><i class="ti-comments"></i> Complaints</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);"><i class="fa fa-shopping-bag"></i> Supplier <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav">
                                        <li><a href="<?= base_url('admin/add_supplier') ?>"><i class="fa fa-plus"></i> Add Supplier</a></li>
                                        <li><a href="<?= base_url('admin/manage_supplier') ?>"><i class="ti-pencil"></i> Manage Supplier</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);"><i class="fa fa-cubes"></i> Brand <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav">
                                        <li><a href="<?= base_url('admin/add_brand') ?>"><i class="fa fa-plus"></i> Add Brand</a></li>
                                        <li><a href="<?= base_url('admin/manage_brand') ?>"><i class="ti-pencil"></i> Manage Brand</a></li>
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
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="./"><i class="fa fa-dashboard"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">Transactions</a>
                                    </li>
                                    <li></li>
                                </ul>
                                <h4 class="header-title m-t-0 m-b-20">Payments History</h4>
                            </div>
                        </div> <!-- end row -->
                        <table id="mainTable" class="table table-striped">
                            <thead><tr>
                                <th>ID</th>
                                <th>Sender</th>
                                <th>Recipient</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr></thead>
                            <tbody><tr>
                                <td>1</td>
                                <td>Bank BCA #102 568 2302</td>
                                <td>Bank BCA (300 400 3004)</td>
                                <td>Rp 500.000</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link" data-toggle="dropdown">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="disabled">
                                                <a href="#" disabled>No actions available</a>
                                            </li>
                                            <!--<li>
                                                <a href="<?= base_url('admin/add_product') ?>">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#delModal">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>-->
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bank BCA #102 568 2302</td>
                                <td>Bank BCA (300 400 3004)</td>
                                <td>Rp 395.000</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link" data-toggle="dropdown">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="disabled">
                                                <a href="#" disabled>No actions available</a>
                                            </li>
                                            <!--<li>
                                                <a href="<?= base_url('admin/add_product') ?>">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#delModal">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>-->
                                        </ul>
                                    </div>
                                </td>
                            </tr></tbody>
                        </table>
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div>
                            Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

                <div class="clearfix"></div>

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->

        <div id="delModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close">&times;</button>
                        <b class="modal-title">Delete Product</b>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this product?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger">Confirm</button>
                        <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.app.js"></script>
        <!-- Datatable js -->
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script>
            $('#mainTable').dataTable();
        </script>


    </body>
</html>