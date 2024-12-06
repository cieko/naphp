<?php require('views/partials/html-head.php'); ?>

<div>

    <main id="metal">
        <!-- BANNER -->
        <section id="banner"></section>

        <!-- CONTENT -->
        <section class="content">
            <h1 class="text-3xl">Metal Handicrafts</h1>

            <h5 class="text-base text-stone-500 mt-3 mb-10">Metal crafts involve the skillful shaping of metals into decorative and functional items. From intricate jewelry to detailed sculptures, these handcrafted pieces blend creativity and craftsmanship, offering timeless beauty and durability.</h5>

            <div class="cards">
                <?php
                $products = [
                    ['name' => 'Copper Fish Wall Decor', 'price' => '3,151 Rs.', 'imgSrc' => 'public/images/metal-crafts/product-1.webp'],
                    ['name' => 'xyz', 'price' => '5,295 Rs.', 'imgSrc' => 'public/images/metal-crafts/product-2.jpg'],
                    ['name' => 'Peacock Wall Hanging', 'price' => '2,249 Rs.', 'imgSrc' => 'public/images/metal-crafts/product-3.jpg'],
                    ['name' => 'Dokra Metal Crafts', 'price' => '2,383 Rs.', 'imgSrc' => 'public/images/metal-crafts/product-4.jpg']
                ];

                foreach ($products as $product) {
                    extract($product);
                    require('views/shared/product-card.php');
                }
                ?>
            </div>

            <div class="browse-btn">
                <div class="browse-product-btn">
                    <span>More products</span>
                    <img src="public/images/icons/arrow.svg" alt="">
                </div>
            </div>
        </section>
    </main>

</div>

<?php require('views/partials/html-foot.php'); ?>