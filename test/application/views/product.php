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
          <div id="top-links" class="nav pull-left flip">
            <ul class="breadcrumb">
              <li><a href="<?= base_url('home') ?>"><i class="fa fa-home"></i></a></li>
              <li><a href="<?= base_url('category') ?>">Category Name</a></li>
              <li><a href="#">Product Name</a></li>
            </ul>
          </div>
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="<?= base_url('help') ?>">Hello Username</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <?php $i=1; foreach($data['get_product'] as $tampil): ?>
  <div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <div itemscope itemtype="http://schema.org/Product">
           <h1 class="subtitle"><?= $tampil->nama_produk ?></h1>
            <div class="row product-info">
              <div class="col-sm-6">
                <div class="image"><img class="img-responsive" itemprop="image" id="zoom_01" src="<?= base_url() ?>design/image/product/macbook_air_1-350x350.jpg" title="Laptop Silver black" alt="Laptop Silver black" data-zoom-image="<?= base_url() ?>design/image/product/macbook_air_1-500x500.jpg" /> </div>
                <div class="center-block text-center"><span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span></div>
                <div class="image-additional" id="gallery_01"> <a class="thumbnail" href="#" data-zoom-image="<?= base_url() ?>design/image/product/macbook_air_1-500x500.jpg" data-image="<?= base_url() ?>design/image/product/macbook_air_1-350x350.jpg" title="Laptop Silver black"></a> </div>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled description">
                  <li><b>Brand:</b> <a href="#"><span itemprop="brand"><?= $tampil->nama_merk ?></span></a></li>
                  <!-- <li><b>Product Code:</b> <span itemprop="mpn">Product 17</span></li> -->
                  <li><b>Availability:</b> <span class="instock">In Stock</span></li>
                </ul>
                <ul class="price-box">
                  <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="price">Rp <?= $tampil->hrgjual_produk ?><span itemprop="availability" content="In Stock"></span></span></li>
                  <li></li>
                  <li>Ex Tax: $950.00</li>
                </ul>
                <div id="product">
                  <h3 class="subtitle">Available Options</h3>
                  <div class="form-group required">
                    <label class="control-label">Color</label>
                    <select class="form-control" id="input-option200" name="option[200]">
                      <option value=""> --- Please Select --- </option>
                      <option value="4">Black </option>
                      <option value="3">Silver </option>
                      <option value="1">Green </option>
                      <option value="2">Blue </option>
                    </select>
                  </div>
                  <div class="cart">
                    <div>
                      <div class="qty">
                        <label class="control-label" for="input-quantity">Qty</label>
                        <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                        <a class="qtyBtn plus" href="javascript:void(0);">+</a><br />
                        <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                        <div class="clear"></div>
                      </div>
                      <button type="button" id="button-cart" class="btn btn-primary btn-lg">Add to Cart</button>
                    </div>
                    <div>
                      <button type="button" class="wishlist" onClick=""><i class="fa fa-heart"></i> Add to Wish List</button>
                    </div>
                  </div>
                </div>
                <hr>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                <!-- AddThis Button END -->
              </div>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
              <li><a href="#tab-specification" data-toggle="tab">Specification</a></li>
            </ul>
            <div class="tab-content">
              <div itemprop="description" id="tab-description" class="tab-pane active">
                <div>
                  <p><?= $tampil->desk_produk ?></p>
                </div>
              </div>
              <div id="tab-specification" class="tab-pane">
                <table class="table table-bordered">
                <thead>
                    <tr>
                      <td colspan="2"><strong>Processor</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><!-- <?= $tampil->spek_produk ?> --></td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <h3 class="subtitle">Related Products</h3>
            <div class="owl-carousel related_pro">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?= base_url('product') ?>">Aspire Ultrabook Laptop</a></h4>
                  <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                </div>
                <div class="button-group">
                  <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                  <div class="add-to-links">
                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  </div>
                </div>
              </div>
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_pro_1-200x200.jpg" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?= base_url('product') ?>"> Strategies for Acquiring Your Own Laptop </a></h4>
                  <p class="price"> <span class="price-new">$1,400.00</span> <span class="price-old">$1,900.00</span> <span class="saving">-26%</span> </p>
                </div>
                <div class="button-group">
                  <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                  <div class="add-to-links">
                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  </div>
                </div>
              </div>
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?= base_url('product') ?>">Ideapad Yoga 13-59341124 Laptop</a></h4>
                  <p class="price"> $2.00 </p>
                </div>
                <div class="button-group">
                  <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                  <div class="add-to-links">
                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  </div>
                </div>
              </div>
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?= base_url('product') ?>">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                  <p class="price"> $122.00 </p>
                </div>
                <div class="button-group">
                  <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                  <div class="add-to-links">
                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  </div>
                </div>
              </div>
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?= base_url('product') ?>">Samsung Galaxy S4</a></h4>
                  <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                </div>
                <div class="button-group">
                  <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                  <div class="add-to-links">
                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  </div>
                </div>
              </div>
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a></div>
                <div class="caption">
                  <h4><a href="<?= base_url('product') ?>">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                  <p class="price"> $122.00 </p>
                </div>
                <div class="button-group">
                  <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                  <div class="add-to-links">
                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Bestsellers</h3>
          <div class="side-item">
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/apple_cinema_30-50x50.jpg" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Brand Fashion Cotton T-Shirt</a></h4>
                <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$122.00</span> <span class="saving">-10%</span></p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/iphone_1-50x50.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">iPhone5</a></h4>
                <p class="price"> $123.20 </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_1-50x50.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Ideapad Yoga 13-59341124 Laptop</a></h4>
                <p class="price"> $2.00 </p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/sony_vaio_1-50x50.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Xitefun Causal Wear Fancy Shoes</a></h4>
                <p class="price"> <span class="price-new">$902.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-25%</span> </p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/FinePix-Long-Zoom-Camera-50x50.jpg" alt="FinePix S8400W Long Zoom Camera" title="FinePix S8400W Long Zoom Camera" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">FinePix S8400W Long Zoom Camera</a></h4>
                <p class="price">$122.00</p>
              </div>
            </div>
          </div>

        </aside>
        <!--Right Part End -->
      </div>
    </div>
  </div>
  <? $i++; endforeach; ?>
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
<script type="text/javascript" src="<?= base_url() ?>design/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/swipebox/lib/ios-orientationchange-fix.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/swipebox/src/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>design/js/custom.js"></script>
<script type="text/javascript">
// Elevate Zoom for Product Page image
$("#zoom_01").elevateZoom({
	gallery:'gallery_01',
	cursor: 'pointer',
	galleryActiveClass: 'active',
	imageCrossfade: true,
	zoomWindowFadeIn: 500,
	zoomWindowFadeOut: 500,
	lensFadeIn: 500,
	lensFadeOut: 500,
	loadingIcon: 'image/progress.gif'
	});
//////pass the images to swipebox
$("#zoom_01").bind("click", function(e) {
  var ez =   $('#zoom_01').data('elevateZoom');
	$.swipebox(ez.getGalleryList());
  return false;
});
</script>
<!-- JS Part End-->
</body>
</html>