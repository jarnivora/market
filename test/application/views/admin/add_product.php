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
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>design/admin/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>design/admin/assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?= base_url() ?>design/admin/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?= base_url() ?>design/admin/assets/css/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>design/admin/assets/plugins/summernote/summernote.css" rel="stylesheet" />
        <script src="<?= base_url() ?>design/admin/assets/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div ><input type="text" name="mytext[]" class="form-control"/><a href="" class="remove_field" id="focusedinput">Remove</a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap2"); //Fields wrapper
    var add_button      = $(".add_field_button2"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div ><input type="file" name="mytext2[]" class="form-control"/><a href="" class="remove_field2" id="focusedinput">Remove</a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field2", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<script>

function startCalc()
{
interval = setInterval("calc()",1);
}
function calc()
{
harga = document.autoSumForm.jual.value;
tax = (harga  * 10 ) / 100;
document.autoSumForm.tax.value = tax.toFixed(0) ;
}
function stopCalc()
{
clearInterval(interval);
}
</script>

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
                                        <li><a href="<?= base_url('admin/orders') ?>"><i class="fa ti-file"></i> History Order</a></li>

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
                                    <li><a href="<?= base_url('admin/manage_products') ?>">Products</a></li>
                                    <li></li>
                                </ul>
                                <h4 class="header-title m-t-0 m-b-20">Add Product</h4>
                            </div>
                        </div> <!-- end row -->
                         <?= $this->session->flashdata('notification') ?>
                         <?= form_open_multipart('admin/add_product/save', 'name="autoSumForm"');?>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="nama_produk">
                                </div>

                                <div class="col-md-6">
                                    <label for="cat">Category</label>
                                    <select name="cat" id="cat" class="form-control">
                                    <?php $i=1; foreach($data['getdata2'] as $resUser): ?>
                                        <option value="<?= $resUser->id_kategori ?>"><?= $resUser->nama_kategori ?></option>
                                    <?php $i++; endforeach; ?>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="sellprice">Selling Price</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" id="sellprice" class="form-control" min="0" name="jual" onFocus="startCalc();" onBlur="stopCalc();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="name">Spesification Product</label>
                                    <div class="input_fields_wrap">
                                        <div>
                                        <input type="text" name="mytext[]" class="form-control"/><a href="" class="add_field_button">Tambah</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="sup">Supplier</label>
                                    <select name="sup" id="sup" class="form-control">
                                    <?php $i=1; foreach($data['getdata'] as $resUser): ?>
                                        <option value="<?= $resUser->id_supplier ?>"><?= $resUser->nama_supplier ?></option>
                                    <?php $i++; endforeach; ?>    
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="purchase">Purchase</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="number" id="purchase" name="beli" class="form-control" min="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="disc">Discount</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">%</span>
                                        <input type="number" id="disc" name="diskon" class="form-control" min="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="size">Size</label>
                                    <input type="text" class="form-control" name="ukuran" id="size">
                                </div>
                                <div class="col-md-4">
                                    <label for="weight">Weight</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Kg</span>
                                        <input type="number" id="weight" name="berat" class="form-control" min="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="stock">Stock</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Pcs</span>
                                        <input type="number" id="stock" name="stok" class="form-control" min="0">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="brand">Brand</label>
                                    <select name="merk" id="merk" class="form-control">
                                        <?php $i=1; foreach($data['getdata3'] as $resUser): ?>
                                        <option value="<?= $resUser->id_merk ?>"><?= $resUser->nama_merk ?></option>
                                    <?php $i++; endforeach; ?>   
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="tax">Tax</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input readonly type="number" class="form-control" name="tax" id="tax" onchange='tryNumberFormat(this.form.thirdBox);'>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="photos">Photos</label>
                                    <div class="input_fields_wrap2">
                                        <div>
                                        <input type="file" name="mytext2[]" class="form-control"/><a href="" class="add_field_button2">Tambah</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="desc">Description</label>
                                   
                                     <textarea name="desc" class="form-control" id="addr" rows="7"></textarea>   
                                    
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <a href="<?= base_url('admin/manage_products') ?>" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="pull-right btn btn-primary">Save</button>
                                </div>
                            </div>
                        <?= form_close(); ?>
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



        <!-- js placed at the end of the document so the pages load faster -->
        
        <script src="<?= base_url() ?>design/admin/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.slimscroll.min.js"></script>

        <script src="<?= base_url() ?>design/admin/assets/plugins/summernote/summernote.min.js"></script>

        <!-- App Js -->
        <script src="<?= base_url() ?>design/admin/assets/js/jquery.app.js"></script>

        <script>
            $('#desc').summernote({
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        </script>
    </body>
</html>