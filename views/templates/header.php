<!-- header -->
<header class="header-area">
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="welcome-area">
                                <p>Default welcome msg! </p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="account-curr-lang-wrap f-right">
                                <ul>
                                    <li class="top-hover"><a href="#">$Doller (US) <i class="icon-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="#">Taka (BDT)</a></li>
                                            <li><a href="#">Riyal (SAR)</a></li>
                                            <li><a href="#">Rupee (INR)</a></li>
                                            <li><a href="#">Dirham (AED)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img alt="flag" src="../assets/img/icon-img/en.jpg"> English  <i class="icon-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="#"><img alt="flag" src="../assets/img/icon-img/bl.jpg">Bangla </a></li>
                                            <li><a href="#"><img alt="flag" src="../assets/img/icon-img/ar.jpg">Arabic</a></li>
                                            <li><a href="#"><img alt="flag" src="../assets/img/icon-img/in.jpg">Hindi </a></li>
                                            <li><a href="#"><img alt="flag" src="../assets/img/icon-img/sp.jpg">Spanish</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                            <div class="logo pt-39">
                                <a href="index.html"><img alt="" src="../assets/img/logo/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                           <?= $this->render('@app/views/templates/menu.php');?> 
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                            <div class="search-login-cart-wrapper">
                                <div class="header-search same-style">
                                    <button class="search-toggle">
                                        <i class="icon-magnifier s-open"></i>
                                        <i class="ti-close s-close"></i>
                                    </button>
                                    <div class="search-content">
                                        <form action="#">
                                            <input type="text" placeholder="Search">
                                            <button>
                                                <i class="icon-magnifier"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-login same-style">
                                    <a href="login-register.html"><i class="icon-user icons"></i></a>
                                </div>
                                <div class="header-cart same-style">
                                    <button class="icon-cart">
                                        <i class="icon-handbag"></i>
                                        <span class="count-style">02</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="../assets/img/cart/cart-1.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Dog Calcium Food </a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ti-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="../assets/img/cart/cart-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Dog Calcium Food</a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ti-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$20.00</span></h4>
                                            <h4>Total : <span class="shop-total">$260.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart.html">view cart</a>
                                            <a href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="#">HOME</a>
                                            <ul>
                                                <li><a href="index.html">HOME</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="about-us.html">about us</a>
                                                </li>
                                                <li>
                                                    <a href="shop-page.html">shop page</a>
                                                </li>
                                                <li>
                                                    <a href="product-details.html">product details</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">cart page</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">my account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">login / register</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Food</a>
                                            <ul>
                                                <?php foreach($this->params['categories'] as $category): ?>
                                                <li><a href="#"><?= $category->name ?></a>
                                                    <ul>
                                                        <?php foreach($category->children as $children): ?>
                                                        <li><a href="shop-page.html"><?=$children->name?></a></li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog</a>
                                            <ul>
                                                <li>
                                                    <a href="blog.html">blog page</a>
                                                </li>
                                                <li>
                                                    <a href="blog-leftsidebar.html">blog left sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.html">blog details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"> Contact us </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>