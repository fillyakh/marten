       <!-- slider -->
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <div class="single-slider pt-100 pb-100 yellow-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 col-sm-7">
                                <div class="slider-content slider-animated-1 pt-114">
                                    <h3 class="animated">We keep pets for pleasure.</h3>
                                    <h1 class="animated">Food & Vitamins <br>For all Pets</h1>
                                    <div class="slider-btn">
                                        <a class="animated" href="product-details.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 col-sm-5">
                                <div class="slider-single-img slider-animated-1">
                                    <img class="animated" src="/img/slider/slider-single-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider pt-100 pb-100 yellow-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                                <div class="slider-content slider-animated-1 pt-114">
                                    <h3 class="animated">We keep pets for pleasure.</h3>
                                    <h1 class="animated">Food & Vitamins <br>For all Pets</h1>
                                    <div class="slider-btn">
                                        <a class="animated" href="product-details.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-12">
                                <div class="slider-single-img slider-animated-1">
                                    <img class="animated" src="/img/slider/slider-single-img-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main categories -->
        
            <div class="food-category food-category-col pt-100 pb-60">
                <div class="container">
                    <div class="row">
                    <?php foreach ($this->params['categories'] as $category): ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-food-category cate-padding-1 text-center mb-30">
                                <div class="single-food-hover-2">
                                    <img src="/img/category/<?= $category->img ?>" alt="">
                                </div>
                                <div class="single-food-content">
                                    <h3><?= $category->name ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
        
        <!-- product-area -->
        <div class="product-area pt-95 pb-70 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4>Most Populer</h4>
                    <h2>Recent Products</h2>
                </div>
                <div class="row">
                    <?php foreach($products as $product): ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="product-wrapper mb-10">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="/web/img/product/card/<?= $product->images[0]->name?>" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                        <a title="Add To Cart" href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="product-action-wishlist">
                                        <a title="Wishlist" href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html"><?= $product->name ?></a></h4>
                                    <div class="product-price">
                                        <span class="new">$<?= $product->price?> </span>
                                        <?php if ($product->old_price) : ?>
                                            <span class="old">$<?= $product->old_price ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- deal-area -->
        <div class="deal-area bg-img pt-95 pb-100">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h4>Best Product</h4>
                    <h2>Deal of the Week</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-img wow fadeInLeft">
                            <a href="#"><img src="../assets/img/banner/banner-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="deal-content">
                            <h3><a href="#">Name Your Product</a></h3>
                            <div class="deal-pro-price">
                                <span class="deal-old-price">$16.00 </span>
                                <span> $10.00</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo </p>
                            <div class="timer timer-style">
                                <div data-countdown="2017/10/01"></div>
                            </div>
                            <div class="discount-btn mt-35">
                                <a class="btn-style" href="#">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials -->
		<div class="testimonial-area pt-90 pb-70 bg-img" style="background-image:url(/web/img/banner/banner-1.jpg);">
		    <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <div class="testimonial-wrap">
                            <div class="testimonial-text-slider text-center">
                                <div class="sin-testiText">
                                    <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo</p>
                                </div>
                                <div class="sin-testiText">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or amro porano ja cai tomi tai go amro porano  amro porano ja cai tomi tai go  .... </p>
                                </div>
                                <div class="sin-testiText">
                                    <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo</p>
                                </div>
                                <div class="sin-testiText">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or amro porano ja cai tomi tai go amro porano  amro porano ja cai tomi tai go  .... </p>
                                </div>
                            </div>
                            <div class="testimonial-image-slider text-center">
                                <div class="sin-testiImage">
                                    <img src="/web/img/testi/3.jpg" alt="">
                                    <h3>Robiul Islam</h3>
                                    <h5>Customer</h5>
                                </div>
                                <div class="sin-testiImage">
                                    <img src="/web/img/testi/4.jpg" alt="">
                                    <h3>Robiul Islam</h3>
                                    <h5>Customer</h5>
                                </div>
                                <div class="sin-testiImage">
                                    <img src="/web/img/testi/3.jpg" alt="">
                                    <h3>F. H. Shuvo</h3>
                                    <h5>Developer</h5>
                                </div>
                                <div class="sin-testiImage">
                                    <img src="/web/img/testi/5.jpg" alt="">
                                    <h3>T. T. Rayed</h3>
                                    <h5>CEO</h5>
                                </div>
                            </div>
                            <div class="testimonial-shap">
                                <img src="../assets/img/icon-img/testi-shap.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <!-- service -->
		<div class="service-area bg-img pt-100 pb-65">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-1">
		                    <img src="/web/img/icon-img/shipping.png" alt="">
		                    <h4>FREE SHIPPING</h4>
		                    <p>Free shipping on all order </p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-2">
		                    <img src="/web/img/icon-img/support.png" alt="">
		                    <h4>ONLINE SUPPORT</h4>
		                    <p>Online support 24 hours a day</p>
		                </div>
		            </div>
		            <div class="col-lg-4 col-md-4">
		                <div class="service-content text-center mb-30 service-color-3">
		                    <img src="/web/img/icon-img/money.png" alt="">
		                    <h4>MONEY RETURN</h4>
		                    <p>Back guarantee under 5 days</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <!-- blog -->
		<div class="blog-area pb-70">
		    <div class="container">
		        <div class="section-title text-center mb-60">
                    <h4>Latest News</h4>
                    <h2>From Our Blog</h2>
                </div>
                <div class="row">
                    <?php foreach($articles as $article): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30 gray-bg">
                                <div class="blog-img hover-effect">
                                    <a href="/blog/article"><img alt="" src="/web/img/blog/<?= $article->img?>"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li>By: <span><?= $article->author?></span></li>
                                            <li><?= $article->date?></li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html"><?= $article->title?></a></h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
		    </div>
		</div>