<div class="main-menu text-center">
    <nav>
        <ul>
            <li>
                <a href="index.html">HOME</a>
            </li>
            <li class="mega-menu-position"><a href="shop-page.html">Food</a>
                <ul class="mega-menu">
                    <?php foreach($this->params['categories'] as $category): ?>
                    <li>
                        <ul>
                            <li class="mega-menu-title"><?= $category->name ?></li>
                            <?php foreach($category->children as $children): ?>
                            <li><a href="shop-page.html"><?= $children->name ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach;?>
                    <li>
                        <ul>
                            <li><a href="shop-page.html"><img alt="" src="/web/img/banner/menu-img-4.jpg"></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blog.html">Blog</a>
            </li>
            <li><a href="about-us.html">ABOUT</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="../admin/products.html">Admin</a></li>
        </ul>
    </nav>
</div>