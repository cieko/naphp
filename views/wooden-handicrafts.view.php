<?php require('views/partials/html-head.php'); ?>

<div>

    <main id="wood">
        <!-- BANNER -->
        <section id="banner"></section>

        <!-- CONTENT -->
        <section class="content">
            <h1 class="text-3xl">Wooden Handicrafts</h1>

            <h5 class="text-base text-stone-500 mt-3 mb-10">Wooden handicrafts highlight the skill of artisans who transform raw wood into unique, functional, and decorative pieces. These creations combine tradition and creativity, offering timeless beauty for any space.</h5>

            <div class="cards">
                <?php
                $products = [
                    ['name' => 'Wooden Clock', 'price' => '3,151 Rs.', 'description' => 'Gran Reserva Vinegar, 200ml', 'imgSrc' => 'public/images/wooden-crafts/product-1.png'],
                    ['name' => 'Wooden Sun Face ( 18 Inch )', 'price' => '5,295 Rs.', 'description' => 'Extra Virgin Olive, 500ml', 'imgSrc' => 'public/images/wooden-crafts/product-2.jpg'],
                    ['name' => 'Animal Wooden Craft', 'price' => '2,249 Rs.', 'description' => 'Extra Virgin Olive Oil, 500ml', 'imgSrc' => 'public/images/wooden-crafts/product-3.jpg'],
                    ['name' => 'Handmade Wooden Mandala Wall Art', 'price' => '2,383 Rs.', 'description' => 'Extra Virgin Olive Oil, 500ml', 'imgSrc' => 'public/images/wooden-crafts/product-4.jpg']
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