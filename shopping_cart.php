﻿<?php
  include("db/connect.php");
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
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
                        <button type="button" class="search-btn-bg"><a href="login.php">Đăng ký</a></button>
                        <button type="button" class="search-btn-bg"><a href="login.php">Đăng nhập</a></button>
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
                        <!--level0-wrapper2--> </div>
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
                        <!--level0-wrapper2--> </div>
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

        <!-- Main Container -->
        <section class="main-container col1-layout wow bounceInUp animated">
            <div class="main container">
                <div class="col-main">
                    <div class="cart">
                        <div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>
                        <div class="table-responsive">
                            <form method="post" action="#">
                                <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
                                <fieldset>
                                    <table class="data-table cart-table" id="shopping-cart-table">
                                        <thead>
                                            <tr class="first last">
                                                <th rowspan="1">&nbsp;</th>
                                                <th rowspan="1"><span class="nobr">Product Name</span></th>
                                                <th rowspan="1" class="hidden-phone"></th>
                                                <th rowspan="1" class="hidden-phone"><span class="nobr">Move to Wishlist</span></th>
                                                <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                                                <th class="a-center " rowspan="1">Qty</th>
                                                <th colspan="1" class="a-center">Subtotal</th>
                                                <th class="a-center" rowspan="1">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="first last">
                                                <td class="a-right last" colspan="8"><button onclick="setLocation('http://magento.magikthemes.com/magikClassic/womens.html')" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                                                    <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                                                    <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr class="first odd">
                                                <td class="image"><a class="product-image" title="Sample Product" href="product_detail.html"><img width="75" alt="Sample Product" src="products-images/product2.jpg"></a></td>
                                                <td>
                                                    <h2 class="product-name"> <a href="product_detail.html">Sample Product</a> </h2>
                                                </td>
                                                <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                                                <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                                                <td class="a-center hidden-table"><span class="cart-price"> <span class="price">$29.95</span> </span></td>
                                                <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name="cart[10522][qty]"></td>
                                                <td class="a-center movewishlist"><span class="cart-price"> <span class="price">$29.95</span> </span></td>
                                                <td class="a-center last"><a class="button remove-item" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                                            </tr>
                                            <tr class="last even">
                                                <td class="image"><a class="product-image" title="Sample Product" href="product_detail.html"><img width="75" alt="Sample Product" src="products-images/product3.jpg"></a></td>
                                                <td>
                                                    <h2 class="product-name"> <a href="product_detail.html">Sample Product</a> </h2>
                                                </td>
                                                <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                                                <td class="a-center hidden-table"><a class="link-wishlist1 use-ajax" href="#">Move</a></td>
                                                <td class="a-center hidden-table"><span class="cart-price"> <span class="price">$0.00</span> </span></td>
                                                <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name="cart[10523][qty]"></td>
                                                <td class="a-center movewishlist"><span class="cart-price"> <span class="price">$0.00</span> </span></td>
                                                <td class="a-center last"><a class="button remove-item" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </form>
                        </div>
                        <!-- BEGIN CART COLLATERALS -->
                        <div class="cart-collaterals row">
                            <div class="col-sm-4">
                                <div class="shipping">
                                    <h3>Estimate Shipping and Tax</h3>
                                    <div class="shipping-form">
                                        <form id="shipping-zip-form" method="post" action="#">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <ul class="form-list">
                                                <li>
                                                    <label class="required" for="country"><em>*</em>Country</label>
                                                    <div class="input-box">
                                                        <select title="Country" class="validate-select" id="country" name="country_id">
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos [Keeling] Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo - Brazzaville</option>
                                                            <option value="CD">Congo - Kinshasa</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d’Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong SAR China</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macau SAR China</option>
                                                            <option value="MK">Macedonia</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar [Burma]</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territories</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn Islands</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">São Tomé and Príncipe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option selected="selected" value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UM">U.S. Minor Outlying Islands</option>
                                                            <option value="VI">U.S. Virgin Islands</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican City</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="region_id">State/Province</label>
                                                    <div class="input-box">
                                                        <select title="State/Province" name="region_id" id="region_id">
                                                            <option value="">Please select region, state or province</option>
                                                            <option value="1" title="Alabama">Alabama</option>
                                                            <option value="2" title="Alaska">Alaska</option>
                                                            <option value="3" title="American Samoa">American Samoa</option>
                                                            <option value="4" title="Arizona">Arizona</option>
                                                            <option value="5" title="Arkansas">Arkansas</option>
                                                            <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                                                            <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                                                            <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                                                            <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                                                            <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                                                            <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                                                            <option value="12" title="California">California</option>
                                                            <option value="13" title="Colorado">Colorado</option>
                                                            <option value="14" title="Connecticut">Connecticut</option>
                                                            <option value="15" title="Delaware">Delaware</option>
                                                            <option value="16" title="District of Columbia">District of Columbia</option>
                                                            <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                                            <option value="18" title="Florida">Florida</option>
                                                            <option value="19" title="Georgia">Georgia</option>
                                                            <option value="20" title="Guam">Guam</option>
                                                            <option value="21" title="Hawaii">Hawaii</option>
                                                            <option value="22" title="Idaho">Idaho</option>
                                                            <option value="23" title="Illinois">Illinois</option>
                                                            <option value="24" title="Indiana">Indiana</option>
                                                            <option value="25" title="Iowa">Iowa</option>
                                                            <option value="26" title="Kansas">Kansas</option>
                                                            <option value="27" title="Kentucky">Kentucky</option>
                                                            <option value="28" title="Louisiana">Louisiana</option>
                                                            <option value="29" title="Maine">Maine</option>
                                                            <option value="30" title="Marshall Islands">Marshall Islands</option>
                                                            <option value="31" title="Maryland">Maryland</option>
                                                            <option value="32" title="Massachusetts">Massachusetts</option>
                                                            <option value="33" title="Michigan">Michigan</option>
                                                            <option value="34" title="Minnesota">Minnesota</option>
                                                            <option value="35" title="Mississippi">Mississippi</option>
                                                            <option value="36" title="Missouri">Missouri</option>
                                                            <option value="37" title="Montana">Montana</option>
                                                            <option value="38" title="Nebraska">Nebraska</option>
                                                            <option value="39" title="Nevada">Nevada</option>
                                                            <option value="40" title="New Hampshire">New Hampshire</option>
                                                            <option value="41" title="New Jersey">New Jersey</option>
                                                            <option value="42" title="New Mexico">New Mexico</option>
                                                            <option value="43" title="New York">New York</option>
                                                            <option value="44" title="North Carolina">North Carolina</option>
                                                            <option value="45" title="North Dakota">North Dakota</option>
                                                            <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="47" title="Ohio">Ohio</option>
                                                            <option value="48" title="Oklahoma">Oklahoma</option>
                                                            <option value="49" title="Oregon">Oregon</option>
                                                            <option value="50" title="Palau">Palau</option>
                                                            <option value="51" title="Pennsylvania">Pennsylvania</option>
                                                            <option value="52" title="Puerto Rico">Puerto Rico</option>
                                                            <option value="53" title="Rhode Island">Rhode Island</option>
                                                            <option value="54" title="South Carolina">South Carolina</option>
                                                            <option value="55" title="South Dakota">South Dakota</option>
                                                            <option value="56" title="Tennessee">Tennessee</option>
                                                            <option value="57" title="Texas">Texas</option>
                                                            <option value="58" title="Utah">Utah</option>
                                                            <option value="59" title="Vermont">Vermont</option>
                                                            <option value="60" title="Virgin Islands">Virgin Islands</option>
                                                            <option value="61" title="Virginia">Virginia</option>
                                                            <option value="62" title="Washington">Washington</option>
                                                            <option value="63" title="West Virginia">West Virginia</option>
                                                            <option value="64" title="Wisconsin">Wisconsin</option>
                                                            <option value="65" title="Wyoming">Wyoming</option>
                                                        </select>
                                                        <input type="text" style="display:none;" class="input-text" title="State/Province" name="region" id="region">
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="postcode">Zip/Postal Code</label>
                                                    <div class="input-box">
                                                        <input type="text" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="buttons-set11">
                                                <button class="button get-quote" title="Get a Quote" type="button"><span>Get a Quote</span></button>
                                            </div>
                                            <!--buttons-set11-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="discount">
                                    <h3>Discount Codes</h3>
                                    <form method="post" action="#" id="discount-coupon-form">
                                        <label for="coupon_code">Enter your coupon code if you have one.</label>
                                        <input type="hidden" value="0" id="remove-coupone" name="remove">
                                        <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                                        <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="totals col-sm-4">
                                <h3>Shopping Cart Total</h3>
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">

                                        <tfoot>
                                            <tr>
                                                <td colspan="1" class="a-left"><strong>Grand Total</strong></td>
                                                <td class="a-right"><strong><span class="price">$77.38</span></strong></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td colspan="1" class="a-left"> Subtotal </td>
                                                <td class="a-right"><span class="price">$77.38</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="checkout">
                                        <li>
                                            <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button>
                                        </li>

                                        <li><a title="Checkout with Multiple Addresses" href="#">Checkout with Multiple Addresses</a> </li>

                                    </ul>
                                </div>
                                <!--inner-->

                            </div>
                        </div>

                        <!--cart-collaterals-->

                    </div>
                    <div class="crosssel wow bounceInUp animated">
                        <div class="">
                            <h2>Based on your selection, you may be interested in the following items:</h2>
                        </div>
                        <div class="category-products">
                            <ul class="products-grid crosssel-pro">
                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a href="product_detail.html" title="Sample Product" class="product-image"> <img src="products-images/product11.jpg" alt="Sample Product"> </a>
                                                <div class="new-label new-top-left">New</div>
                                                <div class="item-box-hover">
                                                    <div class="box-inner">
                                                        <div class="actions">
                                                            <div class="add_cart">
                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                            </div>
                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">$125.00</span> </span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a href="product_detail.html" title="Sample Product" class="product-image"> <img src="products-images/product12.jpg" alt="Sample Product"> </a>
                                                <div class="sale-label sale-top-left">Sale</div>
                                                <div class="item-box-hover">
                                                    <div class="box-inner">
                                                        <div class="actions">
                                                            <div class="add_cart">
                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                            </div>
                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:40%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a href="product_detail.html" title="Sample Product" class="product-image"> <img src="products-images/product13.jpg" alt="Sample Product"> </a>
                                                <div class="item-box-hover">
                                                    <div class="box-inner">
                                                        <div class="actions">
                                                            <div class="add_cart">
                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                            </div>
                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a href="product_detail.html" title="Sample Product" class="product-image"> <img src="products-images/product14.jpg" alt="Sample Product"> </a>
                                                <div class="item-box-hover">
                                                    <div class="box-inner">
                                                        <div class="actions">
                                                            <div class="add_cart">
                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                            </div>
                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                                            <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a href="product_detail.html" title="Sample Product"> Sample Product </a> </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:100%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="top-banner-section wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner1">
                            <div class="top-b-text"><strong>Designer Shoes</strong> For Women</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col free-shipping"><strong>Free Shipping</strong> on order over $199</div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner2">
                            <div class="top-b-text"><strong>Luxury Handbags</strong>2015 New Arrive</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col last offer"><strong>New Collection</strong> Lorem ipsum.</div>
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
                                        <li class="first"><a href="#" title="How to buy">How to buy</a></li>
                                        <li><a href="faq.html" title="FAQs">FAQs</a></li>
                                        <li><a href="#" title="Payment">Payment</a></li>
                                        <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
                                        <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                                        <li class="last"><a href="#" title="Return policy">Return policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-column pull-left collapsed-block">
                                <h4>Style Advisor<a class="expander visible-xs" href="#TabBlock-2">+</a></h4>
                                <div class="tabBlock" id="TabBlock-2">
                                    <ul class="links">
                                        <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
                                        <li><a title="Information" href="#">Information</a></li>
                                        <li><a title="Addresses" href="#">Addresses</a></li>
                                        <li><a title="Addresses" href="#">Discount</a></li>
                                        <li><a title="Orders History" href="#">Orders History</a></li>
                                        <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-column pull-left collapsed-block">
                                <h4>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                                <div class="tabBlock" id="TabBlock-3">
                                    <ul class="links">
                                        <li class="first"><a href="#" title="privacy policy">Privacy policy</a></li>
                                        <li><a href="#" title="Search Terms">Search Terms</a></li>
                                        <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                                        <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                                        <li><a href="#" title="Suppliers">Suppliers</a></li>
                                        <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <div class="footer-column-last">
                                <div class="newsletter-wrap collapsed-block">
                                    <h4>Sign up for emails<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                                    <div class="tabBlock" id="TabBlock-4">
                                        <form id="newsletter-validate-detail" method="post" action="#">
                                            <div id="container_form_news">
                                                <div id="container_form_news2">
                                                    <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onfocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                                                    <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="social">
                                    <h4>Follow Us</h4>
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
                        <div style="text-align:center"><a href="index.html"><img src="images/footer-logo.png" alt="footer-logo"></a></div>
                        <address>
                            <i class="icon-location-arrow"></i> 123 Main Street, Anytown, CA 12345 USA <i class="icon-mobile-phone"></i><span> +(408) 394-7557</span> <i class="icon-envelope"></i><a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12 coppyright">&copy; 2015 Magikcommerce. All Rights Reserved.</div>
                        <div class="col-sm-7 col-xs-12 company-links">
                            <ul class="links">
                                <li><a title="Magento Themes" href="#">Magento Themes</a></li>
                                <li><a title="Premium Themes" href="#">Premium Themes</a></li>
                                <li><a title="Responsive Themes" href="#">Responsive Themes</a></li>
                                <li class="last"><a title="Magento Extensions" href="#">Magento Extensions</a></li>
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
                <div class="home"><a href="index.html"><i class="icon-home"></i>Home</a> </div>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="grid.html">Grid</a></li>
                    <li> <a href="list.html">List</a></li>
                    <li> <a href="product_detail.html">Product Detail</a></li>
                    <li> <a href="shopping_cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a>

                    </li>
                    <li> <a href="wishlist.html">Wishlist</a></li>
                    <li> <a href="dashboard.html">Dashboard</a></li>
                    <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
                    <li> <a href="about_us.html">About us</a></li>
                    <li><a href="compare.html">Compare</a></li>

                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="quick_view.html">Quick view</a></li>
                    <li><a href="login.html">Login</a></li>

                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog_detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="404error.html">404 Error Page</a></li>
                </ul>
            </li>
            <li><a href="grid.html">Women</a>
                <ul>
                    <li> <a href="grid.html" class="">Stylish Bag</a>
                        <ul>
                            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
                            <li> <a href="grid.html" class="">Diaper Bags</a></li>
                            <li> <a href="grid.html" class="">Bags</a></li>
                            <li> <a href="grid.html" class="">Hobo handbags</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Material Bag</a>
                        <ul>
                            <li> <a href="grid.html">Beaded Handbags</a></li>
                            <li> <a href="grid.html">Fabric Handbags</a></li>
                            <li> <a href="grid.html">Handbags</a></li>
                            <li> <a href="grid.html">Leather Handbags</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Shoes</a>
                        <ul>
                            <li> <a href="grid.html">Flat Shoes</a></li>
                            <li> <a href="grid.html">Flat Sandals</a></li>
                            <li> <a href="grid.html">Boots</a></li>
                            <li> <a href="grid.html">Heels</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Jwellery</a>
                        <ul>
                            <li> <a href="grid.html">Bracelets</a></li>
                            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
                            <li> <a href="grid.html">Pendants</a></li>
                            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Dresses</a>
                        <ul>
                            <li> <a href="grid.html">Casual Dresses</a></li>
                            <li> <a href="grid.html">Evening</a></li>
                            <li> <a href="grid.html">Designer</a></li>
                            <li> <a href="grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Swimwear</a>
                        <ul>
                            <li> <a href="grid.html">Swimsuits</a></li>
                            <li> <a href="grid.html">Beach Clothing</a></li>
                            <li> <a href="grid.html">Clothing</a></li>
                            <li> <a href="grid.html">Bikinis</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Men</a>
                <ul>
                    <li> <a href="grid.html" class="">Shoes</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.html">Dresses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.html">Jackets</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.html">Watches</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
                        </ul>
                    </li>
                    <li> <a href="#/sunglasses.html">Sunglasses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Accesories</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Electronics</a>
                <ul>
                    <li> <a href="grid.html"><span>Mobiles</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Samsung</span></a></li>
                            <li> <a href="grid.html"><span>Nokia</span></a></li>
                            <li> <a href="grid.html"><span>IPhone</span></a></li>
                            <li> <a href="grid.html"><span>Sony</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html" class=""><span>Accesories</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
                            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
                            <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
                            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Cameras</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Camcorders</span></a></li>
                            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
                            <li> <a href="grid.html"><span>Digital SLR</span></a></li>
                            <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>MP3 Players</span></a></li>
                            <li> <a href="grid.html"><span>IPods</span></a></li>
                            <li> <a href="grid.html"><span>Speakers</span></a></li>
                            <li> <a href="grid.html"><span>Video Players</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Computer</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
                            <li> <a href="grid.html"><span>Pendrives</span></a></li>
                            <li> <a href="grid.html"><span>Headphones</span></a></li>
                            <li> <a href="grid.html"><span>PC Components</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Appliances</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
                            <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
                            <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
                            <li> <a href="grid.html"><span>Water Purifier</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Furniture</a>
                <ul>
                    <li> <a href="grid.html">Living Room</a>
                        <ul>
                            <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
                            <li> <a href="grid.html">Sofas</a></li>
                            <li> <a href="grid.html">Chairs</a></li>
                            <li> <a href="grid.html">Tables</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html" class="">Dining &amp; Bar</a>
                        <ul>
                            <li> <a href="grid.html">Dining Table Sets</a></li>
                            <li> <a href="grid.html">Serving Trolleys</a></li>
                            <li> <a href="grid.html">Bar Counters</a></li>
                            <li> <a href="grid.html">Dining Cabinets</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Bedroom</a>
                        <ul>
                            <li> <a href="grid.html">Beds</a></li>
                            <li> <a href="grid.html">Chest of Drawers</a></li>
                            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
                            <li> <a href="grid.html">Nightstands</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Kitchen</a>
                        <ul>
                            <li> <a href="grid.html">Kitchen Racks</a></li>
                            <li> <a href="grid.html">Kitchen Fillings</a></li>
                            <li> <a href="grid.html">Wall Units</a></li>
                            <li> <a href="grid.html">Benches &amp; Stools</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Kids</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
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
</body>



</html>