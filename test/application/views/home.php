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
            </ul>
          </div>

          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="<?= base_url('help') ?>">Hello Username</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div id="container">
    <div class="container">
      <div class="row">

        <!-- Left Part Start-->
        <aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Categories</h3>
          <div class="box-category">
            <ul id="cat_accordion">
              <?php $i=1; foreach($data['get_kategori'] as $tampil): ?>

              <li><a href="#"> <?= $tampil->nama_kategori ?></a></li>

              <?php $i++; endforeach; ?>
            </ul>
          </div>
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
        <!-- Left Part End-->
        <!--Middle Part Start-->

        <div id="content" class="col-sm-9">

          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="<?= base_url() ?>design/image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="<?= base_url() ?>design/image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="<?= base_url() ?>design/image/slider/banner-3.jpg" alt="banner 3" /></a> </div>
          </div>
          <!-- Slideshow End-->

          <!-- Featured Product Start-->
          <h3 class="subtitle">Featured</h3>
          <div class="owl-carousel product_carousel">
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/apple_cinema_30-200x200.jpg" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Brand Fashion Cotton T-Shirt</a></h4>
                <p class="price"><span class="price-new">$110.00</span><span class="price-old">$122.00</span><span class="saving">-10%</span></p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Aspire Ultrabook Laptop</a></h4>
                <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('49');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/sony_vaio_1-200x200.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Xitefun Causal Wear Fancy Shoes</a></h4>
                <p class="price"> <span class="price-new">$902.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-25%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('46');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Ideapad Yoga 13-59341124 Laptop</a></h4>
                <p class="price"> $2.00 </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('43');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">iPhone5</a></h4>
                <p class="price"> $123.20 </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/canon_eos_5d_1-200x200.jpg" alt="Long Sleeve Shirt Fashion Men" title="Long Sleeve Shirt Fashion Men" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>">Long Sleeve Shirt Fashion Men</a></h4>
                <p class="price"> <span class="price-new">$98.00</span> <span class="price-old">$122.00</span> <span class="saving">-20%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- Featured Product End-->

          <!-- Banner Start -->
          <div class="possimarketplace-banner">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="<?= base_url() ?>design/image/banner/sample-banner-4-400x150.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="<?= base_url() ?>design/image/banner/sample-banner-5-400x150.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
            </div>
          </div>
          <!-- Banner End -->














          <!-- Categories Product Slider Start -->
          <h3 class="subtitle">Wetsuit &amp; Drysuit - <a class="viewall" href="<?= base_url('category') ?>">view all</a></h3>
          <div class="owl-carousel latest_category_carousel">
          <?php $i=1; foreach($data['get_product'] as $tampil): ?>
            <div class="product-thumb">
              <div class="image"><a href="<?= base_url()?>home/product/<?= $tampil->id_produk ?>"><img src="<?= base_url($tampil->path.$tampil->gambar_produk) ?>" style="width: 200px; height: 200px;" alt="<?= $tampil->nama_produk ?>" title="<?= $tampil->nama_produk ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url('product') ?>"><?= $tampil->nama_produk ?></a></h4>
                <p class="price"> Rp <?= $tampil->hrgjual_produk ?> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          <?php $i++; endforeach; ?>
          </div>
          <!-- Categories Product Slider End -->
          










          <!-- Brand Product Slider Start-->
          <h3 class="subtitle">Fins - <a class="viewall" href="<?= base_url('category') ?>">view all</a></h3>
          <div class="owl-carousel latest_brands_carousel">
            <?php $i=1; foreach($data['get_product'] as $tampil): ?>
            <div class="product-thumb">
              <div class="image"><a href="<?= base_url()?>home/product/<?= $tampil->id_produk ?>"><img src="<?= base_url($tampil->path.$tampil->gambar_produk) ?>" style="width: 200px; height: 200px;" alt="<?= $tampil->nama_produk ?>" title="<?= $tampil->nama_produk ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?= base_url()?>home/product/<?= $tampil->id_produk ?>"><?= $tampil->nama_produk ?></a></h4>
                <p class="price"> Rp <?= $tampil->hrgjual_produk ?> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          <?php $i++; endforeach; ?>
          </div>
          <!-- Brand Product Slider End -->









          <!-- Brand Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/apple_logo-100x100.jpg" alt="Palm" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/canon_logo-100x100.jpg" alt="Sony" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/apple_logo-100x100.jpg" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/canon_logo-100x100.jpg" alt="Apple" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/apple_logo-100x100.jpg" alt="HTC" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/canon_logo-100x100.jpg" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="<?= base_url() ?>design/image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
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