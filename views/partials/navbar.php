<header>
    <div class="menu">
        <a href="/craftsaura/">
            <div class="logo">
                <img src="public/logo.svg" alt="">
            </div>
        </a>
    </div>
    <div class="other-links">
        <a href="/craftsaura/" class="<?= ($_SERVER['REQUEST_URI'] == '/craftsaura/' ? 'active' : '') ?>">Home</a>
        <a href="/craftsaura/about" class="<?= ($_SERVER['REQUEST_URI'] == '/craftsaura/about' ? 'active' : '') ?>">About Us</a>
        <a href="/craftsaura/woodenHandicraft" class="<?= ($_SERVER['REQUEST_URI'] == '/craftsaura/woodenHandicraft' || $_SERVER['REQUEST_URI'] == '/craftsaura/metalHandicraft' ? 'active' : '') ?>" id="products-link">Our Products</a>
        <a href="/craftsaura/contact" class="<?= ($_SERVER['REQUEST_URI'] == '/craftsaura/contact' ? 'active' : '') ?>">Contact</a>
    </div>

    <div class="side-icons">

        <div id="nav-burger"></div>
    </div>

</header>

<div class="our-products-expanded">
    <div class="content">
        <a class="category" href="/craftsaura/metalHandicraft" onclick="hideExtended()">
            <img src="public/images/metal-crafts/product-1.webp" alt="">

            <div class="text">Metal Crafts</div>
        </a>
        <a class="category" href="/craftsaura/woodenHandicraft" onclick="hideExtended()">
            <img src="public/images/wooden-crafts/product-1.png" alt="">

            <div class="text">Wooden Crafts</div>
        </a>
    </div>
</div>

<div class="side-menu">
    <div class="content">
        <div class="cross"><img src="public/images/icons/cross.svg" alt="" class="cursor-pointer" id="cross-side-menu"></div>

        <div class="links">
            <a href="/craftsaura/">Home</a>
            <a href="/craftsaura/about">About Us</a>
            <a href="/craftsaura/woodenHandicraft">Our Products</a>
            <a href="/craftsaura/contact">Contact</a>
        </div>
    </div>
</div>