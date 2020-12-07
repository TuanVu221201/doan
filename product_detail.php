<?php 
    include_once ('db/connect.php');
    // if(isset($_GET["id_sp"])){
    //   $idsp = $_GET["id_sp"];
    // }
    $idsp = $_GET["id_sp"];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons Icon -->
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <title>Classic premium HTML5 &amp; CSS3 template</title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/revslider.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
    <div id="page">
        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12">
                            <!-- Header Logo -->
                            <div class="logo"><a title="Magento Commerce" href="index.php"><img alt="Magento Commerce" src="images/logo.png"></a></div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-lg-9 col-xs-12 right_menu">
                            <div class="toplinks">
                                <div class="links">
                                    <!-- End Header Company -->
                                    <form action="http://htmldemo.magikcommerce.com/ecommerce/classic-html-template/version_3/cat" method="POST" id="search_mini_form" name="Categories">
                                        <button type="button" class="search-btn-bg">Đăng ký</button>
                                        <button type="button" class="search-btn-bg">Đăng nhập</button>
                                    </form>

                                </div>
                                <!-- links -->
                            </div>

                            <!-- Search-col -->
                            <div class="search-box pull-right">
                                <form action="http://htmldemo.magikcommerce.com/ecommerce/classic-html-template/version_3/cat" method="POST" id="search_mini_form" name="Categories">
                                    <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
                                    <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </form>
                            </div>

                            <!-- End Search-col  -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
        </div>
        <!-- Navbar -->
        <nav>
            <div class="container">
                <div class="row">
                    <div class="nav-inner col-lg-12">
                        <ul id="nav" class="hidden-xs">
                            <li class="level0 parent drop-menu active"><a href="index.php"><span>Home</span></a>
                            </li>
                            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Loại sản phẩm</span></a>
                                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                                    <div class="container">
                                        <div class="level0-wrapper2">
                                            <div class="col-1">
                                                <div class="nav-block nav-block-center">
                                                    <?php
                            $results_dsach_loai = mysqli_query($conn, 'SELECT * FROM chia_sp_loai');
                            while(($row_dsach_loai = mysqli_fetch_assoc($results_dsach_loai))!=NULL){
                          ?>
                                                    <ul class="level0">

                                                        <li class="level1 nav-6-1 parent item"><a href="grid.php" class=""><span><?php echo $row_dsach_loai['Ten_Loai'];?></span></a></li>


                                                    </ul>
                                                    <?php
                            }
                          ?>
                                                </div>
                                            </div>
                                            <!--nav-block nav-block-center-->

                                        </div>
                                        <!--level0-wrapper2-->
                                    </div>
                                </div>

                            </li>
                            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Sản phẩm theo ngày lễ</span></a>
                                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                                    <div class="container">
                                        <div class="level0-wrapper2">
                                            <div class="col-1">
                                                <div class="nav-block nav-block-center">
                                                    <?php
                            $results_dsach_dip = mysqli_query($conn, 'SELECT * FROM chia_sp_diple');
                            while(($row_dsach_dip = mysqli_fetch_assoc($results_dsach_dip))!=NULL){
                      ?>
                                                    <ul class="level0">
                                                        <li class="level1 nav-6-1 parent item"><a href="grid.php" class=""><span><?php echo $row_dsach_dip['Ten_DipLe'];?></span></a>
                                                        </li>

                                                    </ul>
                                                    <?php
                            }
                          ?>
                                                </div>
                                            </div>
                                            <!--nav-block nav-block-center-->
                                        </div>
                                        <!--level0-wrapper2-->
                                    </div>
                                </div>
                            </li>
                            <li class="level0 nav-8 level-top"><a href="grid.php" class="level-top"><span>Giới Thiệu</span></a></li>
                            <li class="level0 nav-8 level-top"><a href="grid.php" class="level-top"><span>Liên Hệ</span></a></li>
                        </ul>
                        <div class="menu_top">
                            <div class="top-cart-contain pull-right">

                                <!-- Giỏ hàng -->
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ Hàng (2)</span></a></div>
                                    <div>
                                        <div class="top-cart-content" style="display: none;">
                                            <div class="block-subtitle">
                                                <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                                                <!--top-subtotal-->
                                                <div class="pull-right">
                                                    <button title="View Cart" class="view-cart" type="button"><span><a href="shopping_cart.php">View Cart</a></span></button>
                                                </div>
                                                <!--pull-right-->
                                            </div>
                                            <!--block-subtitle-->
                                            <ul class="mini-products-list" id="cart-sidebar">
                                                <li class="item first">
                                                    <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="products-images/product4.jpg"></a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                            <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                                                            <p class="product-name"><a href="product_detail.php">Sample Product</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item last">
                                                    <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="products-images/product3.jpg"></a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                            <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                                                            <p class="product-name"><a href="product_detail.php">Sample Product</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!--actions-->
                                        </div>
                                    </div>

                                </div>
                                <!-- Top Cart -->
                                <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                                    <input value="" type="hidden">
                                    <input id="enable_module" value="1" type="hidden">
                                    <input class="effect_to_cart" value="1" type="hidden">
                                    <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav -->
        <!-- Breadcrumbs -->

        <!-- Breadcrumbs End -->
        <!-- Main Container -->
        <div class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <?php
                      $sl="SELECT * FROM `sanpham` WHERE idSP= '$idsp'";
                      $results_dsach_sp = mysqli_query($conn, $sl);
                      while(($row_dsach_sp = mysqli_fetch_assoc($results_dsach_sp))!=NULL){
                  ?>
                    <div class="row">
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="#" method="post" id="product_addtocart_form">
                                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                    <div class="product-img-box col-sm-5 col-xs-12 bounceInRight animated">
                                        <div class="new-label new-top-left"> New </div>
                                        <div class="product-image">
                                            <div class="large-image"> <a href="products-images/<?php echo $row_dsach_sp['Hinh1'];?>" class="cloud-zoom" id="zoom5" rel="useWrapper: false, adjustY:0, adjustX:20"> <img alt="Thumbnail" src="products-images/<?php echo $row_dsach_sp['Hinh1'];?>"> </a> </div>
                                            <div class="flexslider flexslider-thumb">
                                                <!-- <ul class="previews-list slides">
                                                    <li><a href='products-images/' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/<?php echo $row_dsach_sp['Hinh1'];?>' "><img src="products-images/<?php echo $row_dsach_sp['Hinh1'];?>" alt="Thumbnail 1" /></a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                        <!-- end: more-images -->
                                    </div>
                                    <div class="product-shop col-sm-7 col-xs-12 bounceInUp animated">
                                        <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                                        <div class="product-name">
                                            <h1><?php echo $row_dsach_sp['Ten_SP'];?></h1>
                                        </div>
                                        <div class="short-description">
                                            <!--<h2>Quick Overview</h2>-->
                                            <p><?php echo $row_dsach_sp['MoTa'];?></p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:60%" class="rating"></div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <div class="price-box">
                                                <p class="special-price"> <span class="price-label">Đơn giá:</span> <span id="product-price-48" class="price"> <?php echo $row_dsach_sp['DonGia'];?>đ </span> </p>
                                            </div>
                                        </div>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <label for="qty"></label>
                                                <div class="pull-left">
                                                    <div class="custom pull-left">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="<?php echo $row_dsach_sp['SoLuong'];?>" id="qty" name="qty">

                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                                    </div>
                                                </div>

                                                <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i>Thêm vào giỏ hàng</span></button>

                                            </div>
                                            <div class="email-addto-box">

                                                <ul class="add-to-links">
                                                    <li> <a class="link-wishlist" href="wishlist.html"><span>Thêm vào yêu thích</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="product-collateral col-sm-12 col-xs-12 bounceInUp animated">
                                <div class="add_info">
                                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                        <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Mô tả Sản phẩm </a> </li>

                                        <li> <a href="#reviews_tabs" data-toggle="tab">Đánh giá</a> </li>
                                    </ul>
                                    <div id="productTabContent" class="tab-content">
                                        <!-- Mô tả -->
                                        <div class="tab-pane fade in active" id="product_tabs_description">
                                            <div class="std">
                                                <p><?php echo $row_dsach_sp['MoTa'];?></p>
                                            </div>
                                        </div>

                                        <!-- review -->
                                        <div class="tab-pane fade" id="reviews_tabs">
                                            <div class="box-collateral box-reviews" id="customer-reviews">
                                                <div class="box-reviews1">
                                                    <div class="form-add">
                                                        <form id="review-form" method="post" action="http://www.magikcommerce.com/review/product/post/id/176/">
                                                            <h3>Viết đánh giá của riêng bạn</h3>
                                                            <fieldset>
                                                                <h4>Bạn đánh giá sản phẩm này như thế nào? <em class="required">*</em></h4>
                                                                <span id="input-message-box"></span>
                                                                <table id="product-review-table" class="data-table">

                                                                    <thead>
                                                                        <tr class="first last">
                                                                            <th>&nbsp;</th>
                                                                            <th><span class="nobr">1 *</span></th>
                                                                            <th><span class="nobr">2 *</span></th>
                                                                            <th><span class="nobr">3 *</span></th>
                                                                            <th><span class="nobr">4 *</span></th>
                                                                            <th><span class="nobr">5 *</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="first odd">
                                                                            <th>Price</th>
                                                                            <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                                                            <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                                                        </tr>
                                                                        <tr class="even">
                                                                            <th>Value</th>
                                                                            <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                                                            <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                                                        </tr>
                                                                        <tr class="last odd">
                                                                            <th>Quality</th>
                                                                            <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                                                            <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                                                            <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                                <div class="review1">
                                                                    <ul class="form-list">
                                                                        <li>
                                                                            <label class="required" for="nickname_field">Tên của bạn<em>*</em></label>
                                                                            <div class="input-box">
                                                                                <input type="text" class="input-text" id="nickname_field" name="nickname">
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <label class="required" for="summary_field">Tóm lược<em>*</em></label>
                                                                            <div class="input-box">
                                                                                <input type="text" class="input-text" id="summary_field" name="title">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="review2">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="required label-wide" for="review_field">Đánh giá<em>*</em></label>
                                                                            <div class="input-box">
                                                                                <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="buttons-set">
                                                                        <button class="button submit" title="Submit Review" type="submit"><span>Gửi đánh giá</span></button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="related-slider col-lg-12 col-xs-12 bounceInDown animated">
                                <div class="slider-items-products">
                                    <div class="slider-items-products">
                                        <div class="new_title center">
                                            <h2>Sản phẩm tương tự</h2>
                                        </div>

                                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4 products-grid">

                                                <!-- Item -->
                                                <?php
                                                  $id= $row_dsach_sp['id_Loai'];
                                                  $sl1 = "SELECT * FROM `sanpham` WHERE id_Loai = '$id'";
                                                    $results_dsach_sp1 = mysqli_query($conn, $sl1);
                                                    while(($row_dsach_sp1 = mysqli_fetch_assoc($results_dsach_sp1))!=NULL){
                                                  ?>
                                                <div class="item">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.php?id_sp=<?php echo $row_dsach_sp1['idSP'];?>"> <img alt="Sample Product" src="products-images/<?php echo $row_dsach_sp1['Hinh1'];?>"></a>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Thêm vào Giỏ Hàng</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                                                            <span class="add-to-links"><a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.php" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Sample Product" href="product_detail.php?id_sp=<?php echo $row_dsach_sp1['idSP'];?>"> <?php echo $row_dsach_sp1['Ten_SP'];?> </a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:30%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box">
                                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $row_dsach_sp1['DonGia'];?>đ </span> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <!-- End Item -->


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Main Container End -->

        <!-- Upsell Product Slider -->
        <section class="upsell-pro bounceInUp animated">
            <div class="container">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2>Upsell Products</h2>
                    </div>
                    <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">


                            <!-- Item -->
                            <?php
                                                  // $id= $row_dsach_sp['id_Loai'];
                                                  $sl1 = "SELECT * FROM `sanpham`";
                                                    $results_dsach_sp1 = mysqli_query($conn, $sl1);
                                                    while(($row_dsach_sp1 = mysqli_fetch_assoc($results_dsach_sp1))!=NULL){
                                                  ?>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.php?id_sp=<?php echo $row_dsach_sp1['idSP'];?>"> <img alt="Sample Product" src="products-images/<?php echo $row_dsach_sp1['Hinh1'];?>"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="actions">
                                                        <div class="add_cart">
                                                            <button class="button btn-cart" type="button"><span>Thêm vào Giỏ Hàng</span></button>
                                                        </div>
                                                        <div class="product-detail-bnt"><a href="quick_view.php" class="button detail-bnt"><span>Quick View</span></a></div>
                                                        <span class="add-to-links"><a href="wishlist.php" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.php" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Sample Product" href="product_detail.php?id_sp=<?php echo $row_dsach_sp1['idSP'];?>"> <?php echo $row_dsach_sp1['Ten_SP'];?> </a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div style="width:30%" class="rating"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $row_dsach_sp1['DonGia'];?>đ </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- End Item -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Upsell Product Slider End -->
        <div class="top-banner-section wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner1">
                            <div class="top-b-text"><strong>Chậu hoa</strong></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner2">
                            <div class="top-b-text"><strong>Thiệp mời</strong></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner3">
                            <div class="top-b-text"><strong>Hộp quà</strong></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner4">
                            <div class="top-b-text"><strong>Trang trí</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner section -->
    <div class="brand-logo">
        <div class="container">
            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
                        <!-- End Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <section class="footer-navbar">
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-lg-8">
                            <div class="footer-column pull-left collapsed-block">
                                <h4>Shopping Guide<a class="expander visible-xs" href="#TabBlock-1">+</a></h4>
                                <div class="tabBlock" id="TabBlock-1">
                                    <ul class="links">
                                        <li class="first"><a href="#" title="How to buy">Mua thế nào</a></li>
                                        <li><a href="faq.php" title="FAQs">FAQs</a></li>
                                        <li><a href="#" title="Payment">thanh toán</a></li>
                                        <li><a href="#" title="Shipment&lt;/a&gt;">Lô hàng</a></li>
                                        <li><a href="#" title="Where is my order?">Đơn hàng của tôi ở đâu?</a></li>
                                        <li class="last"><a href="#" title="Return policy">Chính sách hoàn trả</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-column pull-left collapsed-block">
                                <h4>Style Advisor<a class="expander visible-xs" href="#TabBlock-2">+</a></h4>
                                <div class="tabBlock" id="TabBlock-2">
                                    <ul class="links">
                                        <li class="first"><a title="Your Account" href="login.php">Tài khoản của bạn</a></li>
                                        <li><a title="Information" href="#">Thông tin</a></li>
                                        <li><a title="Addresses" href="#">Addresses</a></li>
                                        <li><a title="Addresses" href="#">Giảm giá</a></li>
                                        <li><a title="Orders History" href="#">Lịch sử đơn hàng</a></li>
                                        <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-column pull-left collapsed-block">
                                <h4>Thông tin<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                                <div class="tabBlock" id="TabBlock-3">
                                    <ul class="links">
                                        <li class="first"><a href="#" title="privacy policy">Chính sách bảo mật</a></li>
                                        <li><a href="#" title="Search Terms">Cụm từ tìm kiếm</a></li>
                                        <li><a href="#" title="Advanced Search">Tìm kiếm nâng cao</a></li>
                                        <li><a href="contact_us.php" title="Contact Us">Liên hệ</a></li>
                                        <li><a href="#" title="Suppliers">Các nhà cung cấp</a></li>
                                        <li class=" last"><a href="#" title="Our stores" class="link-rss">cửa hàng của chúng tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <div class="footer-column-last">
                                <div class="newsletter-wrap collapsed-block">
                                    <h4>Đăng ký nhận email<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                                    <div class="tabBlock" id="TabBlock-4">
                                        <form id="newsletter-validate-detail" method="post" action="#">
                                            <div id="container_form_news">
                                                <div id="container_form_news2">
                                                    <input type="text" class="input-text required-entry validate-email" value="Nhập địa chỉ email" onfocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                                                    <button class="button subscribe" title="Đăng ký" type="submit"><span>Đăng ký</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="social">
                                    <h4>Theo dõi</h4>
                                    <ul class="link">
                                        <li class="fb pull-left"><a href="#"></a></li>
                                        <li class="tw pull-left"><a href="#"></a></li>
                                        <li class="googleplus pull-left"><a href="#"></a></li>
                                        <li class="rss pull-left"><a href="#"></a></li>
                                        <li class="pintrest pull-left"><a href="#"></a></li>
                                        <li class="linkedin pull-left"><a href="#"></a></li>
                                        <li class="youtube pull-left"><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div style="text-align:center"><a href="index.php"><img src="images/footer-logo.png" alt="footer-logo"></a></div>
                        <address>
                            <i class="icon-location-arrow"></i> 123 Main Street, Anytown, CA 12345 USA <i class="icon-mobile-phone"></i><span> +(408) 394-7557</span> <i class="icon-envelope"></i><a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12 coppyright">&copy; 2015 Magikcommerce. Đã đăng ký Bản quyền.</div>
                        <div class="col-sm-7 col-xs-12 company-links">
                            <ul class="links">
                                <li><a title="Magento Themes" href="#">Chủ đề Magento</a></li>
                                <li><a title="Premium Themes" href="#">Chủ đề Premium</a></li>
                                <li><a title="Responsive Themes" href="#">Chủ đề Responsive</a></li>
                                <li class="last"><a title="Magento Extensions" href="#">Phần mở rộng Magento</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <div id="mobile-menu">
        <div class="mm-search">
            <form name="search">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button class="btn-default" type="submit"><i class="icon-search"></i></button>
                    </div>
                    <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
                </div>
            </form>
        </div>
        <ul>
            <li> </li>
            <li>
                <div class="home"><a href="index.php"><i class="icon-home"></i>Home</a> </div>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="grid.php">Grid</a></li>
                    <li> <a href="list.php">List</a></li>
                    <li> <a href="product_detail.php">Product Detail</a></li>
                    <li> <a href="shopping_cart.php">Shopping Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li> <a href="wishlist.php">Wishlist</a></li>
                    <li> <a href="dashboard.php">Dashboard</a></li>
                    <li> <a href="multiple_addresses.php">Multiple Addresses</a></li>
                    <li> <a href="about_us.php">About us</a></li>
                    <li><a href="compare.php">Compare</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="quick_view.php">Quick view</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="blog.php">Blog</a>
                        <ul>
                            <li><a href="blog_detail.php">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="contact_us.php">Contact us</a></li>
                    <li><a href="404error.php">404 Error Page</a></li>
                </ul>
            </li>
            <li><a href="grid.php">Women</a>
                <ul>
                    <li> <a href="grid.php" class="">Stylish Bag</a>
                        <ul>
                            <li> <a href="grid.php" class="">Clutch Handbags</a></li>
                            <li> <a href="grid.php" class="">Diaper Bags</a></li>
                            <li> <a href="grid.php" class="">Bags</a></li>
                            <li> <a href="grid.php" class="">Hobo handbags</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Material Bag</a>
                        <ul>
                            <li> <a href="grid.php">Beaded Handbags</a></li>
                            <li> <a href="grid.php">Fabric Handbags</a></li>
                            <li> <a href="grid.php">Handbags</a></li>
                            <li> <a href="grid.php">Leather Handbags</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Shoes</a>
                        <ul>
                            <li> <a href="grid.php">Flat Shoes</a></li>
                            <li> <a href="grid.php">Flat Sandals</a></li>
                            <li> <a href="grid.php">Boots</a></li>
                            <li> <a href="grid.php">Heels</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Jwellery</a>
                        <ul>
                            <li> <a href="grid.php">Bracelets</a></li>
                            <li> <a href="grid.php">Necklaces &amp; Pendent</a></li>
                            <li> <a href="grid.php">Pendants</a></li>
                            <li> <a href="grid.php">Pins &amp; Brooches</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Dresses</a>
                        <ul>
                            <li> <a href="grid.php">Casual Dresses</a></li>
                            <li> <a href="grid.php">Evening</a></li>
                            <li> <a href="grid.php">Designer</a></li>
                            <li> <a href="grid.php">Party</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Swimwear</a>
                        <ul>
                            <li> <a href="grid.php">Swimsuits</a></li>
                            <li> <a href="grid.php">Beach Clothing</a></li>
                            <li> <a href="grid.php">Clothing</a></li>
                            <li> <a href="grid.php">Bikinis</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.php">Men</a>
                <ul>
                    <li> <a href="grid.php" class="">Shoes</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.php">Sport Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Casual Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Leather Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">canvas shoes</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.php">Dresses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.php">Casual Dresses</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Evening</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Designer</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Party</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.php">Jackets</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.php">Coats</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Formal Jackets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Leather Jackets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Blazers</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.php">Watches</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.php">Fasttrack</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Casio</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Titan</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Tommy-Hilfiger</a></li>
                        </ul>
                    </li>
                    <li> <a href="#/sunglasses.php">Sunglasses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.php">Ray Ban</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Fasttrack</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Police</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Oakley</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Accesories</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.php">Backpacks</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Wallets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Laptops Bags</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.php">Belts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.php">Electronics</a>
                <ul>
                    <li> <a href="grid.php"><span>Mobiles</span></a>
                        <ul>
                            <li> <a href="grid.php"><span>Samsung</span></a></li>
                            <li> <a href="grid.php"><span>Nokia</span></a></li>
                            <li> <a href="grid.php"><span>IPhone</span></a></li>
                            <li> <a href="grid.php"><span>Sony</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php" class=""><span>Accesories</span></a>
                        <ul>
                            <li> <a href="grid.php"><span>Mobile Memory Cards</span></a></li>
                            <li> <a href="grid.php"><span>Cases &amp; Covers</span></a></li>
                            <li> <a href="grid.php"><span>Mobile Headphones</span></a></li>
                            <li> <a href="grid.php"><span>Bluetooth Headsets</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php"><span>Cameras</span></a>
                        <ul>
                            <li> <a href="grid.php"><span>Camcorders</span></a></li>
                            <li> <a href="grid.php"><span>Point &amp; Shoot</span></a></li>
                            <li> <a href="grid.php"><span>Digital SLR</span></a></li>
                            <li> <a href="grid.php"><span>Camera Accesories</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php"><span>Audio &amp; Video</span></a>
                        <ul>
                            <li> <a href="grid.php"><span>MP3 Players</span></a></li>
                            <li> <a href="grid.php"><span>IPods</span></a></li>
                            <li> <a href="grid.php"><span>Speakers</span></a></li>
                            <li> <a href="grid.php"><span>Video Players</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php"><span>Computer</span></a>
                        <ul>
                            <li> <a href="grid.php"><span>External Hard Disk</span></a></li>
                            <li> <a href="grid.php"><span>Pendrives</span></a></li>
                            <li> <a href="grid.php"><span>Headphones</span></a></li>
                            <li> <a href="grid.php"><span>PC Components</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php"><span>Appliances</span></a>
                        <ul>
                            <li> <a href="grid.php"><span>Vaccum Cleaners</span></a></li>
                            <li> <a href="grid.php"><span>Indoor Lighting</span></a></li>
                            <li> <a href="grid.php"><span>Kitchen Tools</span></a></li>
                            <li> <a href="grid.php"><span>Water Purifier</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.php">Furniture</a>
                <ul>
                    <li> <a href="grid.php">Living Room</a>
                        <ul>
                            <li> <a href="grid.php">Racks &amp; Cabinets</a></li>
                            <li> <a href="grid.php">Sofas</a></li>
                            <li> <a href="grid.php">Chairs</a></li>
                            <li> <a href="grid.php">Tables</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php" class="">Dining &amp; Bar</a>
                        <ul>
                            <li> <a href="grid.php">Dining Table Sets</a></li>
                            <li> <a href="grid.php">Serving Trolleys</a></li>
                            <li> <a href="grid.php">Bar Counters</a></li>
                            <li> <a href="grid.php">Dining Cabinets</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Bedroom</a>
                        <ul>
                            <li> <a href="grid.php">Beds</a></li>
                            <li> <a href="grid.php">Chest of Drawers</a></li>
                            <li> <a href="grid.php">Wardrobes &amp; Almirahs</a></li>
                            <li> <a href="grid.php">Nightstands</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.php">Kitchen</a>
                        <ul>
                            <li> <a href="grid.php">Kitchen Racks</a></li>
                            <li> <a href="grid.php">Kitchen Fillings</a></li>
                            <li> <a href="grid.php">Wall Units</a></li>
                            <li> <a href="grid.php">Benches &amp; Stools</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.php">Kids</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
    </div>

    <!-- End Footer -->
    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
    <script type="text/javascript" src="js/cloud-zoom.js"></script>
</body>


</html>