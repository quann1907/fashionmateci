<div class="site-header">
    <p class="h-logo">
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo.png" alt="MultiShop"></a>
    </p><div class="h-shop">
        <form method="get" action="#" class="h-search" id="h-search">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="ion-search"></i></button>
        </form>
        <ul class="h-shop-links">
            <li class="h-search-btn" id="h-search-btn"><i class="ion-search"></i></li>
            <li class="h-shop-icon h-wishlist">
                <a title="Wishlist" href="wishlist.html">
                    <i class="ion-heart"></i>
                    <span>5</span>
                </a>
            </li>
            <li class="h-shop-icon h-profile">
                <a href="auth.html" title="My Account">
                    <i class="ion-android-person"></i>
                </a>
                <ul class="h-profile-links">
                    <li><a href="auth.html">Login / Registration</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="compare.html">Compare</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>
            </li>
            <li class="h-cart">
                <a class="cart-contents" href="cart.html">
                    <p class="h-cart-icon">
                        <i class="ion-android-cart"></i>
                        <span>3</span>
                    </p>
                    <p class="h-cart-total">$510.00</p>
                </a>
                <div class="widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                        <ul class="cart_list">
                            <li>
                                <a href="#" class="remove">×</a>
                                <a href="#">
                                    <img src="img/1/other/cart1.jpg" alt="">
                                    Pneumatic Coil Hose
                                </a>
                                <span class="quantity">1 × $180.00</span>
                            </li>
                            <li>
                                <a href="#" class="remove">×</a>
                                <a href="#">
                                    <img src="img/1/other/cart2.jpg" alt="">
                                    Drill Tool Kit
                                </a>
                                <span class="quantity">1 × $115.00</span>
                            </li>
                            <li>
                                <a href="#" class="remove">×</a>
                                <a href="#">
                                    <img src="img/1/other/cart3.jpg" alt="">
                                    Searchlight Portable
                                </a>
                                <span class="quantity">1 × $150.00</span>
                            </li>
                        </ul>
                        <p class="total"><b>Subtotal:</b> $510.00</p>
                        <p class="buttons">
                            <a href="cart.html" class="button">View cart</a>
                            <a href="checkout.html" class="button">Checkout</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="h-menu-btn" id="h-menu-btn">
                <i class="ion-navicon"></i> Menu
            </li>
        </ul>
    </div><div class="mainmenu">
        <nav id="h-menu" class="h-menu">
            <ul>
                <li class="active">
                    <a href="<?= base_url() ?>">Trang chủ</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="<?= base_url() ?>Product">Bộ sưu tập</a>
                    <ul class="sub-menu">
                        <?php
                            $this->load->view('frontend/category_menu');
                        ?>
                    </ul>
                </li>
                <li>
                    <a href="">Special Deal</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="about.html">Về chúng tôi</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="about.html">Bảo quản</a>
                        </li>
                        <li>
                            <a href="contacts.html">Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="gallery.html">Cửa hàng</a>
                        </li>
                        <li>
                            <a href="404.html">Về chúng tôi</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div></div>