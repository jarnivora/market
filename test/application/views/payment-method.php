<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="<?= base_url() ?>design/image/logo/logo-light.png">
<title>POSSI-MARKETPLACE</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>design/js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>design/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>design/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>design/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>design/css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>design/css/responsive.css" />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">

  <div id="header">
    <!-- Top Bar Start-->
   
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <!-- Logo Start -->
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
            <div id="logo"><a href="<?= base_url('home') ?>"><img class="img-responsive" src="<?= base_url() ?>design/image/logo/logo-light.png" title="possimarketplace" alt="possimarketplace" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart">
              <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
              <span class="cart-icon pull-left flip"></span>
              <span id="cart-total">2 item(s) - $1,132.00</span></button>
              <ul class="dropdown-menu">
                <li>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="text-center"><a href="<?= base_url('product') ?>"><img class="img-thumbnail" title="Xitefun Causal Wear Fancy Shoes" alt="Xitefun Causal Wear Fancy Shoes" src="<?= base_url() ?>design/image/product/sony_vaio_1-50x50.jpg"></a></td>
                        <td class="text-left"><a href="<?= base_url('product') ?>">Xitefun Causal Wear Fancy Shoes</a></td>
                        <td class="text-right">x 1</td>
                        <td class="text-right">$902.00</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                        <td class="text-center"><a href="<?= base_url('product') ?>"><img class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="<?= base_url() ?>design/image/product/samsung_tab_1-50x50.jpg"></a></td>
                        <td class="text-left"><a href="<?= base_url('product') ?>">Aspire Ultrabook Laptop</a></td>
                        <td class="text-right">x 1</td>
                        <td class="text-right">$230.00</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total</strong></td>
                          <td class="text-right">$940.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right">$4.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>VAT (20%)</strong></td>
                          <td class="text-right">$188.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right">$1,132.00</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="checkout"><a href="<?= base_url('cart') ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a href="<?= base_url('checkout') ?>" class="btn btn-primary"><i class="fa fa-share"></i> Checkout</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mini Cart End-->
          <!-- Search Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <!-- Search End-->
        </div>
      </div>
    </header>

    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="<?= base_url('help') ?>">Hello Username</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>


  <div id="container">
    <div class="container">
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          
          <div class="row">
            <div class="col-sm-4">
             
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                </div>
                <div class="panel-body">
                   <div class="form-group">
                      <table class="table table-container">
                          <tr>
                            <td>Total Transaksi</td>
                            <td>Rp. 900000</td>
                          </tr>
                          <tr>
                            <td>Biaya Layanan</td>
                            <td>Gratis</td>
                          </tr>
                          <tr class="btn-danger">
                            <td>Total Tagihan</td>
                            <td>Rp. 900000</td>
                          </tr>
                        </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="row">
               
                <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Payment Method</h4>
                    </div>
                      <div class="panel-body">
                        <div class="table-responsive">
                          <div class="panel-group" id="accordion">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#accordion-1">Credit Card<i class="fa fa-caret-down pull-right"></i></a></h4>
                                </div>
                                <div id="accordion-1" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <div class="col-md-offset-1 col-md-10">
                                      <form class="form-horizontal">
                                          <div class="form-group">
                                            <label class="label-control">Nomor Kartu Kredit / Debit</label>
                                            <input type="text" class="form-control" name="">
                                          </div>
                                          <div class="form-group">
                                            <label class="label-control"> Masa Berlaku</label>
                                            <div class="row">
                                              <div class="col-md-6">
                                                    <select class="form-control" name="">
                                                      <option>Bulan</option>
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                      <option>6</option>
                                                      <option>7</option>
                                                      <option>8</option>
                                                      <option>9</option>
                                                      <option>10</option>
                                                      <option>11</option>
                                                      <option>12</option>
                                                    </select>
                                              </div>
                                              <div class="col-md-6">
                                                    <select class="form-control" name="">
                                                      <option>Tahun</option>
                                                      <option>17</option>
                                                      <option>18</option>
                                                      <option>19</option>
                                                      <option>20</option>
                                                      <option>21</option>
                                                    </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="label-control">Code CCV</label>
                                            <input type="text" class="form-control" name="">
                                          </div>
                                          <div class="form-group">
                                            <button class="btn btn-danger form-control"> BAYAR SEKARANG</button>
                                          </div>
                                      </form>
                                  </div>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#accordion-2">Bank Transfer <i class="fa fa-caret-down pull-right"></i></a></h4>
                                </div>
                                <div id="accordion-2" class="panel-collapse collapse">
                                   <div class="panel-body">
                                    <div class="col-md-offset-1 col-md-10">
                                      <form class="form-horizontal">
                                        <div class="form-group">
                                          <label class="label-control">Bank Tujuan</label>
                                          <select class="form-control" name="">
                                            <option>Pilih Bank</option>
                                            <option>Bank Mandiri</option>
                                            <option>Bank BCA</option>
                                            <option>Bank BNI</option>
                                            <option>Bank BRI</option>
                                            <option>Bank CIMB</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label class="label-control">Nama Pemilik Rekening</label>
                                          <input type="text" class="form-control" name="">
                                        </div>
                                        <div class="form-group">
                                          <label class="label-control">No Rekening</label>
                                          <input type="text" class="form-control" name="">
                                          <span>lorem ipsum dolor sit amet </span>
                                        </div>
                                        <div class="form-group">
                                          <input type="checkbox" name="">
                                          <span>Simpan no rekening <i class="fa fa-info"></i></span>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-danger form-control"> BAYAR SEKARANG</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#accordion-3">Internet Banking<i class="fa fa-caret-down pull-right"></i></a></h4>
                                </div>
                                <div id="accordion-3" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <div class="col-md-offset-1 col-md-10">
                                      <form class="form-horizontal">
                                          <div class="form-group">
                                            <label class="label-control">Nomor Kartu Kredit / Debit</label>
                                            <input type="text" class="form-control" name="">
                                          </div>
                                          <div class="form-group">
                                            <label class="label-control"> Masa Berlaku</label>
                                            <div class="row">
                                              <div class="col-md-6">
                                                    <select class="form-control" name="">
                                                      <option>Bulan</option>
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                      <option>6</option>
                                                      <option>7</option>
                                                      <option>8</option>
                                                      <option>9</option>
                                                      <option>10</option>
                                                      <option>11</option>
                                                      <option>12</option>
                                                    </select>
                                              </div>
                                              <div class="col-md-6">
                                                    <select class="form-control" name="">
                                                      <option>Tahun</option>
                                                      <option>17</option>
                                                      <option>18</option>
                                                      <option>19</option>
                                                      <option>20</option>
                                                      <option>21</option>
                                                    </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="label-control">Code CCV</label>
                                            <input type="text" class="form-control" name="">
                                          </div>
                                          <div class="form-group">
                                            <button class="btn btn-danger form-control"> BAYAR SEKARANG</button>
                                          </div>
                                      </form>
                                  </div>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#accordion-4">Convenience Store<i class="fa fa-caret-down pull-right "></i></a></h4>
                                </div>
                                <div id="accordion-4" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <div class="col-md-offset-1 col-md-10">
                                      <form class="form-horizontal">
                                          <div class="form-group">
                                            <label>Pilih Gerai</label>
                                            <select class="form-control" name="">
                                              <option>Pilih Gerai</option>
                                              <option>Indomeret</option>
                                              <option>Alfamart</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <a href="<?= base_url('konfirmasi_pembayaran') ?>" class="btn btn-danger form-control"> BAYAR SEKARANG</a>
                                          </div>
                                      </form>
                                  </div></div>
                                </div>
                              </div>
                          </div>
                          
                        </div>
                      </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
  <footer id="footer">
    <div class="fpart-first">
      <div class="container">
        <div class="row">
          <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h5>Contact Details</h5>
            <ul>
              <li class="address"><i class="fa fa-map-marker"></i>Komp bina samudera Gedung 2 Balitbang KKP
              <br/> lt. Dasar Jl. Pasir putih 1- ancol timur. Jakarta utara </li>
              <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
              <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="<?= base_url('contact_us') ?>">Contact Us</a>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Information</h5>
            <ul>
              <li><a href="<?= base_url('about_us') ?>">About Us</a></li>
              <li><a href="<?= base_url('about_us') ?>">Delivery Information</a></li>
              <li><a href="<?= base_url('about_us') ?>">Privacy Policy</a></li>
              <li><a href="<?= base_url('about_us') ?>">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Customer Service</h5>
            <ul>
              <li><a href="<?= base_url('contact_us') ?>">Contact Us</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="<?= base_url('sitemap') ?>">Site Map</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>Extras</h5>
            <ul>
              <li><a href="#">Brands</a></li>
              <li><a href="#">Gift Vouchers</a></li>
              <li><a href="#">Affiliates</a></li>
              <li><a href="#">Specials</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>My Account</h5>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="fpart-second">
      <div class="container">
        
        <div class="bottom-row">
          <div class="custom-text text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?= base_url() ?>design/image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?= base_url() ?>design/image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?= base_url() ?>design/image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?= base_url() ?>design/image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?= base_url() ?>design/image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?= base_url() ?>design/image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>
        </div>
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
 
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="<?= base_url() ?>design/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>