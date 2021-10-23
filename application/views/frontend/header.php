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
            <li class="h-shop-icon h-profile">
                <?php if(!isset($_SESSION['customer'])){ ?>
                    <a href="<?= base_url()?>Login" title="Login">
                        <i class="ion-android-person"></i>
                    </a>
                <?php } else { ?>
                    <a href="<?= base_url()?>" title="Hồ sơ">
                        <i class="ion-android-person"></i>
                    </a>
                <?php } ?>
                <ul class="h-profile-links">
                    <?php if(!isset($_SESSION['customer'])){ ?>
                        <li><a href="<?= base_url()?>Login">Đăng nhập</a></li>
                        <li><a href="<?= base_url()?>Home/loadCart">Giỏ hàng</a></li>
                    <?php } else { ?>
                        <li><a href="">Hồ sơ cá nhân</a></li>
                        <li><a href="<?= base_url()?>Home/loadCart">Giỏ hàng</a></li>
                        <li><a href="">Lịch sử đặt hàng</a></li>
                        <li><a href="<?= base_url()?>Login/logout">Logout</a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="h-cart">
                <a class="cart-contents" href="<?= base_url()?>Home/loadCart">
                    <p class="h-cart-icon">
                        <i class="ion-android-cart"></i>
                        <span><?= $this->cart->total_items() ?></span>
                    </p>
                </a>
                <div class="widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                        <ul class="cart_list">
                            <?php foreach ($this->cart->contents() as $value): ?>
                                <li>
                                    <a href="<?= base_url()?>Product/removeProductFromCart/<?= $value['rowid']?>" class="remove">×</a>
                                    <a href="#">
                                        <img src="<?= base_url()?><?=$value['options']['image'] ?>" alt="" width="32px" height="21px">
                                        <?= $value['name'] ?>
                                    </a>
                                    <span class="quantity"><?=$value['qty']?>× <?= number_format($value['price'], 0, ',', '.')?> VNĐ</span>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <p class="total"><b>Subtotal: </b> <?= number_format($this->cart->total()) ?> VNĐ</p>
                        <p class="buttons">
                            <a href="<?= base_url()?>Home/loadCart" class="button">Giỏ hàng</a>
                            <?php if(!isset($_SESSION['customer'])){ ?>
                            <a href="<?= base_url() ?>Login" class="button">Đặt hàng</a>
                            <?php } else { ?>
                            <a href="<?= base_url() ?>Order/orderProduct" class="button">Đặt hàng</a>  
                            <?php } ?>
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
                <li class="<?=($this->uri->segment(1)==null)?'active':''?>">
                    <a href="<?= base_url() ?>">Trang chủ</a>
                </li>
                <li class="menu-item-has-children <?=($this->uri->segment(1)=='Product')?'active':''?>">
                    <a href="<?= base_url() ?>Product">Bộ sưu tập</a>
                    <ul class="sub-menu">
                        <?php
                        $this->load->view('frontend/category_menu');
                        ?>
                    </ul>
                </li>
                <li class="<?=($this->uri->segment(2)=='loadSpecialDeal')?'active':''?>">
                    <a href="<?= base_url() ?>Home/loadSpecialDeal">Special Deal</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="about.html">Về chúng tôi</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="about.html">Bảo quản</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Home/loadRecruitment">Tuyển dụng</a>
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