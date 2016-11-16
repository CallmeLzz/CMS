<head>
    <?php
        if (!class_exists('lessc')) {
            include ('./././libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./././less/type-10.less', './././css/type-10.css');
    ?>
</head>
<body>
    <div class="type-10">
        <div id="header">
            <?php include'partial/currencies.php'; ?>
<!--             <div id="languages_block_top" class="dib">
                <div id="countries" class="dd_el">
                    <span class="selected_language smooth02">
                        <img src="http://alysum.promokit.eu/img/l/1.jpg" class="dib" width="16" height="11" alt="en"><a class="dib" href="http://alysum.promokit.eu/en/"> English</a>
                        <svg class="svgic svgic-account">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-arrowdown"></use>
                        </svg>
                    </span>
                    <ul id="first-languages" class="countries_ul dd_container">
                        <li class="smooth02 main_bg_hvr"> <img src="http://alysum.promokit.eu/img/l/2.jpg" class="dib" width="16" height="11" alt="de"><a href="http://alysum.promokit.eu/de/" title="Deutsch">Deutsch</a></li>
                        <li class="smooth02 main_bg_hvr"> <img src="http://alysum.promokit.eu/img/l/3.jpg" class="dib" width="16" height="11" alt="es"><a href="http://alysum.promokit.eu/es/" title="Español">Español</a></li>
                        <li class="smooth02 main_bg_hvr"> <img src="http://alysum.promokit.eu/img/l/4.jpg" class="dib" width="16" height="11" alt="fr"><a href="http://alysum.promokit.eu/fr/" title="Français">Français</a></li>
                        <li class="smooth02 main_bg_hvr"> <img src="http://alysum.promokit.eu/img/l/7.jpg" class="dib" width="16" height="11" alt="ar"><a href="http://alysum.promokit.eu/ar/" title="العربية">العربية</a></li>
                    </ul>
                </div>
            </div>
            <div id="pk_customlinks" class="dib">
                <ul>
                    <li class="pk_account dd_el dib smooth02 main_bg_hvr">
                        <a href="#" title="My Account">
                            <svg class="svgic main_color svgic-account">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-account"></use>
                            </svg>
                            <span>My Account</span>
                        </a>
                        <div class="dd_container main_bg">
                            <div class="indent">
                                <ul>
                                    <li><a href="http://alysum.promokit.eu/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
                                    <li><a href="http://alysum.promokit.eu/en/order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
                                    <li><a href="http://alysum.promokit.eu/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
                                    <li><a href="http://alysum.promokit.eu/en/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
                                    <li><a href="http://alysum.promokit.eu/en/discount" title="My vouchers" rel="nofollow">My vouchers</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="pk_wishlist dd_el dib smooth02 main_bg_hvr">
                        <a href="http://alysum.promokit.eu/en/module/blockwishlist/mywishlist" title="My Wishlist">
                            <svg class="svgic main_color svgic-wishlist">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-wishlist"></use>
                            </svg>
                            <span>My Wishlist (<span class="wlQty">0</span>)</span>
                        </a>
                        <div id="pk_wishlist" class="dd_container main_bg">
                            <div class="indent">
                                <ul class="wishlist-list">
                                    <li class="no-products">No products</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="pk_watchlist dd_el dib smooth02 main_bg_hvr">
                        <a href="#" title="Recently viewed products">
                            <svg class="svgic main_color svgic-eye">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-eye"></use>
                            </svg>
                            <span>Watch List <span>(0)</span></span>
                        </a>
                        <div class="watchlist dd_container main_bg">
                            <div class="indent">
                                <ul>
                                    <li class="no-products">No viewed products yet.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="header_logo" class="align_center"> <a id="header_logo_img" href="http://alysum.promokit.eu/" title="Alysum"> <img class="logo" src="http://alysum.promokit.eu/img/logo.jpg" alt="Alysum" width="250" height="72"> <span id="logo-text" class="hidden"> <span class="logo">Alysum</span> <span class="slogan"></span> </span> </a></div>
            <div id="header_user" class="dib">
                <ul id="header_nav">
                    <li id="header_user_info">
                        <svg class="svgic main_color svgic-login">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-login"></use>
                        </svg>
                        <a href="http://alysum.promokit.eu/en/my-account" class="login main_color_hvr" rel="nofollow">Sign in</a> or <a href="http://alysum.promokit.eu/en/my-account" class="login main_color_hvr">Register</a>
                    </li>
                </ul>
            </div>
            <div id="search_block_top" class="smooth05">
                <form id="searchbox" method="get" action="//alysum.promokit.eu/en/search">
                    <input type="hidden" name="controller" value="search"> <input type="hidden" name="orderby" value="position"> <input type="hidden" name="orderway" value="desc"> <input class="search_query ac_input" type="text" id="search_query_top" name="search_query" value="" placeholder="Search..." autocomplete="off"> 
                    <button type="submit" name="submit_search" class="searchbutton smooth02 main_bg_hvr">
                        <svg class="svgic svgic-search smooth02 main_color">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-search"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <div id="shopping_cart" class="smooth05">
                <a href="http://alysum.promokit.eu/en/order" title="View my shopping cart" rel="nofollow">
                    <svg class="svgic svgic-cart main_color">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-cart"></use>
                    </svg>
                    <b>Cart:</b> <span class="ajax_cart_quantity mobile_cart_num main_bg">0</span> <span class="ajax_cart_quantity unvisible">0</span> <span class="ajax_cart_product_txt unvisible">Product</span> <span class="ajax_cart_product_txt_s unvisible">Products</span> <span class="ajax_cart_total unvisible"> </span> <span class="ajax_cart_no_product">(empty)</span> 
                </a>
                <div class="cart_block block exclusive">
                    <div class="block_content">
                        <div class="cart_block_list">
                            <p class="cart_block_no_products"> No products</p>
                            <div id="cart-prices">
                                <div class="cart-prices-line first-line"> <span class="unvisible"> Shipping </span> <span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible"> To be determined </span></div>
                                <div class="cart-prices-line"> <span>Tax:</span> <span id="cart_block_tax_cost" class="price ajax_cart_tax_cost lmroman">$0.00</span></div>
                                <div class="cart-prices-line last-line"> <span>Total:</span> <span id="cart_block_total" class="price ajax_block_cart_total lmroman main_color">$0.00</span></div>
                            </div>
                            <p id="cart-buttons"> <a id="button_order_cart" class="btn btn-default button button-small lmromancaps" href="http://alysum.promokit.eu/en/order" title="Check out" rel="nofollow">Checkout </a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="layer_cart">
                <div class="clearfix">
                    <div class="layer_cart_product">
                        <span class="cross" title="Close window">
                            <svg class="svgic svgic-cross smooth02">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#si-cross"></use>
                            </svg>
                        </span>
                        <h2 class="lmroman">Product successfully added to your shopping cart</h2>
                        <br class="clearfix">
                        <div class="product-image-container layer_cart_img col-xs-12 col-md-3"></div>
                        <div class="layer_cart_product_info col-xs-12 col-md-9">
                            <span id="layer_cart_product_title" class="product-name ellipsis"></span>
                            <div> <strong class="dark">Attributes:</strong> <span id="layer_cart_product_attributes"></span></div>
                            <div> <strong class="dark">Quantity:</strong> <span id="layer_cart_product_quantity"></span></div>
                            <div> <strong class="dark">Total:</strong> <span id="layer_cart_product_price"></span></div>
                            <div class="layer_cart_cart">
                                <h2 class="lmroman"> <span class="ajax_cart_product_txt_s unvisible"> There are <span class="ajax_cart_quantity">0</span> items in your cart. </span> <span class="ajax_cart_product_txt "> There is 1 item in your cart. </span></h2>
                                <div class="layer_cart_row"> <strong class="dark"> Total products (tax incl.) </strong> <span class="ajax_block_products_total price priceDisplay"> </span></div>
                                <div class="layer_cart_row"> <strong class="dark"> Total shipping&nbsp;(tax excl.) </strong> <span class="ajax_cart_shipping_cost price "> Free! </span></div>
                                <div class="layer_cart_row"> <strong class="dark">Tax</strong> <span class="price cart_block_tax_cost ajax_cart_tax_cost">$0.00</span></div>
                                <div class="layer_cart_row"> <strong class="dark"> Total (tax incl.) </strong> <span class="ajax_block_cart_total price"> </span></div>
                                <div class="button-container"> <span class="continue btn btn-default button exclusive-medium" title="Continue shopping"> <span> <i class="icon-chevron-left left"></i>Continue shopping </span> </span> <a class="btn btn-default button button-medium" href="http://alysum.promokit.eu/en/order" title="Proceed to checkout" rel="nofollow"> <span> Proceed to checkout<i class="icon-chevron-right right"></i> </span> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crossseling"></div>
            </div>
            <div class="layer_cart_overlay"></div> -->
        </div>
    </div>
</body>