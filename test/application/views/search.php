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
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="<?= base_url('home') ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?= base_url('search') ?>">Search</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">Search</h1>
          <label>Search Criteria</label>
          <div class="row">
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Keywords" value="anything" name="search">
            </div>
            <div class="col-sm-3">
              <select class="form-control" name="category_id">
                <option value="0">All Categories</option>
                <option value="0">Mask</option>
                <option value="0">Regulator </option>
                <option value="0">Bouyancy Compensation Device </option>
                <option value="0">Wetsuit & Drysuit  </option>
                <option value="0">Weight belt  </option>
                <option value="0">Fins  </option>
                <option value="0">Tank </option>
                <option value="0">Gauges  </option>
                <option value="0">Dive Computer  </option>
                <option value="0">Torch  </option>
              </select>
            </div>
            <div class="col-sm-3">
              <input type="button" class="btn btn-primary" id="button-search" value="Search">
            </div>
          </div>
          <br>
          <div class="product-filter">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <div class="btn-group">
                  <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                  <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
                <a href="<?= base_url('compare') ?>" id="compare-total">Product Compare (0)</a> </div>
              <div class="col-sm-2 text-right">
                <label class="control-label" for="input-sort">Sort By:</label>
              </div>
              <div class="col-md-3 col-sm-2 text-right">
                <select id="input-sort" class="form-control col-sm-3">
                  <option value="" selected="selected">Default</option>
                  <option value="">Name (A - Z)</option>
                  <option value="">Name (Z - A)</option>
                  <option value="">Price (Low &gt; High)</option>
                  <option value="">Price (High &gt; Low)</option>
                  <option value="">Rating (Highest)</option>
                  <option value="">Rating (Lowest)</option>
                  <option value="">Model (A - Z)</option>
                  <option value="">Model (Z - A)</option>
                </select>
              </div>
              <div class="col-sm-1 text-right">
                <label class="control-label" for="input-limit">Show:</label>
              </div>
              <div class="col-sm-2 text-right">
                <select id="input-limit" class="form-control">
                  <option value="" selected="selected">20</option>
                  <option value="">25</option>
                  <option value="">50</option>
                  <option value="">75</option>
                  <option value="">100</option>
                </select>
              </div>
            </div>
          </div>
          <br />
          <div class="row products-category">
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_pro_1-200x200.jpg" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>"> Strategies for Acquiring Your Own Laptop </a></h4>
                    <p class="description"> Latest Intel mobile architecture
                      
                      Powered by the most advanced mobile processors from Intel, t..</p>
                    <p class="price"> <span class="price-new">$1,400.00</span> <span class="price-old">$1,900.00</span> <span class="saving">-26%</span> <span class="price-tax">Ex Tax: $1,400.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/nikon_d300_1-200x200.jpg" alt="Digital Camera for Elderly" title="Digital Camera for Elderly" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Digital Camera for Elderly</a></h4>
                    <p class="description"> Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines bra..</p>
                    <p class="price"> <span class="price-new">$92.00</span> <span class="price-old">$98.00</span> <span class="saving">-6%</span> <span class="price-tax">Ex Tax: $75.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick="cart.add('31');"><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="FinePix S8400W Long Zoom Camera" title="FinePix S8400W Long Zoom Camera" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">FinePix S8400W Long Zoom Camera</a></h4>
                    <p class="description">Product 8
                      ..</p>
                    <p class="price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                    <p class="description">Born to be worn.
                      Clip on the worlds most wearable music player and take up to 240 songs with you an..</p>
                    <p class="price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/palm_treo_pro_1-200x200.jpg" alt="HTC M7 with Stunning Looks" title="HTC M7 with Stunning Looks" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">HTC M7 with Stunning Looks</a></h4>
                    <p class="description">Redefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to busi..</p>
                    <p class="price"> $337.99 <span class="price-tax">Ex Tax: $279.99</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Ideapad Yoga 13-59341124 Laptop</a></h4>
                    <p class="description"> Intel Core 2 Duo processor
                      
                      Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, th..</p>
                    <p class="price"> $2.00 <span class="price-tax">Ex Tax: $0.00</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">iPhone5</a></h4>
                    <p class="description">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name o..</p>
                    <p class="price"> $123.20 <span class="price-tax">Ex Tax: $101.00</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/macbook_air_1-200x200.jpg" alt="Laptop Silver black" title="Laptop Silver black" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Laptop Silver black</a></h4>
                    <p class="description">MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don’t lose inches a..</p>
                    <p class="price"> <span class="price-new">$1,142.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-5%</span> <span class="price-tax">Ex Tax: $950.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_nano_1-200x200.jpg" alt="Mp3 Player" title="Mp3 Player" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Mp3 Player</a></h4>
                    <p class="description"> Video in your pocket.
                      
                      Its the small iPod with one very big idea: video. The worlds most popular..</p>
                    <p class="price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_classic_1-200x200.jpg" alt="Portable Mp3 Player" title="Portable Mp3 Player" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Portable Mp3 Player</a></h4>
                    <p class="description"> More room to move.
                      
                      With 80GB or 160GB of storage and up to 40 hours of battery life, the new ..</p>
                    <p class="price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Samsung Galaxy S4</a></h4>
                    <p class="description">Revolutionary multi-touch interface.
                      iPod touch features the same multi-touch screen technology as ..</p>
                    <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> <span class="price-tax">Ex Tax: $50.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="<?= base_url('product') ?>"><img src="<?= base_url() ?>design/image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="<?= base_url('product') ?>">Aspire Ultrabook Laptop</a></h4>
                    <p class="description">Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with An..</p>
                    <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> <span class="price-tax">Ex Tax: $190.00</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 text-left">
              <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&gt;</a></li>
                <li><a href="#">&gt;|</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-right">Showing 1 to 12 of 15 (2 Pages)</div>
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