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
      <!-- Breadcrumb Start
      <ul class="breadcrumb">
        <li><a href="<?= base_url('home') ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?= base_url('faq') ?>">FAQ</a></li>
      </ul>-->
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">Help &amp; FAQ</h1>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h3>My Account &amp; My Orders</h3>
            </div>
            <div class="col-sm-9">
              <div class="faq">
                <div> <a href="#faq1" data-parent="#accordion" data-toggle="collapse" class="panel-title">What is 'My Account'? How do I update my information ? <i class="fa fa-caret-down"></i></a>
                  <div id="faq1" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq2" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I merge my accounts linked to different email ids? <i class="fa fa-caret-down"></i></a>
                  <div id="faq2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis.</p>
                      <ul>
                        <li>Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</li>
                        <li>Consectetuer adipiscing elit. Donec eros tellus.</li>
                        <li>Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est.</li>
                        <li>Morbi id tellus. Nullam ac nisi non eros gravida venenatis.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div> <a href="#faq3" data-parent="#accordion" data-toggle="collapse" class="panel-title"> How do I know my order has been confirmed? <i class="fa fa-caret-down"></i></a>
                  <div id="faq3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq4" data-parent="#accordion" data-toggle="collapse" class="panel-title">Can I order a product that is 'Out of Stock'? <i class="fa fa-caret-down"></i></a>
                  <div id="faq4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis.</p>
                      <ul>
                        <li>Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</li>
                        <li>Consectetuer adipiscing elit. Donec eros tellus.</li>
                        <li>Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est.</li>
                        <li>Morbi id tellus. Nullam ac nisi non eros gravida venenatis.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h3>Shopping</h3>
            </div>
            <div class="col-sm-9">
              <div class="faq">
                <div> <a href="#faq5" data-parent="#accordion" data-toggle="collapse" class="panel-title">I see different prices with the same title. Why? <i class="fa fa-caret-down"></i></a>
                  <div id="faq5" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq6" data-parent="#accordion" data-toggle="collapse" class="panel-title">Why do I see different prices for the same product? <i class="fa fa-caret-down"></i></a>
                  <div id="faq6" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq7" data-parent="#accordion" data-toggle="collapse" class="panel-title">Is it necessary to have an account to shop on Marketshop? <i class="fa fa-caret-down"></i></a>
                  <div id="faq7" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq8" data-parent="#accordion" data-toggle="collapse" class="panel-title">What do I need to know before getting an order gift wrapped? <i class="fa fa-caret-down"></i></a>
                  <div id="faq8" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq9" data-parent="#accordion" data-toggle="collapse" class="panel-title">What is Advantage? <i class="fa fa-caret-down"></i></a>
                  <div id="faq9" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h3>Payments</h3>
            </div>
            <div class="col-sm-9">
              <div class="faq">
                <div> <a href="#faq10" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I pay for a purchase? <i class="fa fa-caret-down"></i></a>
                  <div id="faq10" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq11" data-parent="#accordion" data-toggle="collapse" class="panel-title">Are there any hidden charges (Octroi or Sales Tax) when I make a purchase? <i class="fa fa-caret-down"></i></a>
                  <div id="faq11" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq12" data-parent="#accordion" data-toggle="collapse" class="panel-title">What is Cash on Delivery? <i class="fa fa-caret-down"></i></a>
                  <div id="faq12" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq13" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I pay using a credit/debit card? <i class="fa fa-caret-down"></i></a>
                  <div id="faq13" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq14" data-parent="#accordion" data-toggle="collapse" class="panel-title">Is it safe to use my credit/debit card on this store? <i class="fa fa-caret-down"></i></a>
                  <div id="faq14" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq15" data-parent="#accordion" data-toggle="collapse" class="panel-title">What is a 3D Secure password? <i class="fa fa-caret-down"></i></a>
                  <div id="faq15" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq16" data-parent="#accordion" data-toggle="collapse" class="panel-title">How can I get the 3D Secure password for my credit/debit card? <i class="fa fa-caret-down"></i></a>
                  <div id="faq16" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq17" data-parent="#accordion" data-toggle="collapse" class="panel-title">Can I use my bank's Internet Banking feature to make a payment? <i class="fa fa-caret-down"></i></a>
                  <div id="faq17" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq18" data-parent="#accordion" data-toggle="collapse" class="panel-title">Can I make a credit/debit card or Internet Banking payment through my mobile? <i class="fa fa-caret-down"></i></a>
                  <div id="faq18" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq19" data-parent="#accordion" data-toggle="collapse" class="panel-title">How does 'Instant Cashback' work? <i class="fa fa-caret-down"></i></a>
                  <div id="faq19" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq20" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I place a Cash on Delivery (COD) order? <i class="fa fa-caret-down"></i></a>
                  <div id="faq20" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h3>Gift Voucher</h3>
            </div>
            <div class="col-sm-9">
              <div class="faq">
                <div> <a href="#faq21" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I buy/gift an e-Gift Voucher? <i class="fa fa-caret-down"></i></a>
                  <div id="faq21" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq22" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I make a purchase with an e-Gift Voucher? <i class="fa fa-caret-down"></i></a>
                  <div id="faq22" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq23" data-parent="#accordion" data-toggle="collapse" class="panel-title">Does an e-Gift Voucher expire? <i class="fa fa-caret-down"></i></a>
                  <div id="faq23" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq24" data-parent="#accordion" data-toggle="collapse" class="panel-title">Can I use promotional codes with e-Gift Vouchers? <i class="fa fa-caret-down"></i></a>
                  <div id="faq24" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq25" data-parent="#accordion" data-toggle="collapse" class="panel-title">Is there a limit on how many e-Gift vouchers I can use on a single order? <i class="fa fa-caret-down"></i></a>
                  <div id="faq25" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq26" data-parent="#accordion" data-toggle="collapse" class="panel-title">What Terms & Conditions apply to e-Gift Vouchers? <i class="fa fa-caret-down"></i></a>
                  <div id="faq26" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h3>Order Status</h3>
            </div>
            <div class="col-sm-9">
              <div class="faq">
                <div> <a href="#faq27" data-parent="#accordion" data-toggle="collapse" class="panel-title">How do I check the current status of my orders? <i class="fa fa-caret-down"></i></a>
                  <div id="faq27" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq28" data-parent="#accordion" data-toggle="collapse" class="panel-title">What do the different order status mean? <i class="fa fa-caret-down"></i></a>
                  <div id="faq28" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq29" data-parent="#accordion" data-toggle="collapse" class="panel-title">When and how can I cancel an order? <i class="fa fa-caret-down"></i></a>
                  <div id="faq29" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h3>Shipping</h3>
            </div>
            <div class="col-sm-9">
              <div class="faq">
                <div> <a href="#faq30" data-parent="#accordion" data-toggle="collapse" class="panel-title">What are the delivery charges? <i class="fa fa-caret-down"></i></a>
                  <div id="faq30" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq31" data-parent="#accordion" data-toggle="collapse" class="panel-title">Are there any hidden costs (sales tax, octroi etc) on items sold by sellers? <i class="fa fa-caret-down"></i></a>
                  <div id="faq31" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq32" data-parent="#accordion" data-toggle="collapse" class="panel-title">What is the estimated delivery time? <i class="fa fa-caret-down"></i></a>
                  <div id="faq32" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq33" data-parent="#accordion" data-toggle="collapse" class="panel-title">Why does the estimated delivery time vary from seller to seller? <i class="fa fa-caret-down"></i></a>
                  <div id="faq33" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq34" data-parent="#accordion" data-toggle="collapse" class="panel-title">Why does the delivery date not correspond to the delivery timeline mentioned? <i class="fa fa-caret-down"></i></a>
                  <div id="faq34" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq35" data-parent="#accordion" data-toggle="collapse" class="panel-title">Seller does not/cannot ship to my area. Why? <i class="fa fa-caret-down"></i></a>
                  <div id="faq35" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq36" data-parent="#accordion" data-toggle="collapse" class="panel-title">I need to return an item, how do I arrange for a pick-up? <i class="fa fa-caret-down"></i></a>
                  <div id="faq36" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
                <div> <a href="#faq37" data-parent="#accordion" data-toggle="collapse" class="panel-title">Does deliver internationally? <i class="fa fa-caret-down"></i></a>
                  <div id="faq37" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
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