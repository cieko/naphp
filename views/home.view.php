<?php require('views/partials/html-head.php'); ?>

<div>
    <main id="home">

        <!-- <section id="banner">
            <div class="embla-home">
                <div class="embla-home__viewport">
                    <div class="embla-home__container">
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">1</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">2</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">3</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">4</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">5</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">6</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">7</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">8</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">9</div>
                        </div>
                        <div class="embla-home__slide">
                            <div class="embla-home__slide__number">10</div>
                        </div>
                    </div>
                </div>
                <div class="embla-home-thumbs">
                    <div class="embla-home-thumbs__viewport">
                        <div class="embla-home-thumbs__container">
                            <div
                                class="embla-home-thumbs__slide embla-home-thumbs__slide--selected">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    1
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    2
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    3
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    4
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    5
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    6
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    7
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    8
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    9
                                </button>
                            </div>
                            <div class="embla-home-thumbs__slide">
                                <button type="button" class="embla-home-thumbs__slide__number">
                                    10
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Home Banner -->
        <section id="hero">
            <h1>Crafting Handmade Masterpiece</h1>
            <h5>Crafting Beauty, One Handmade Masterpiece at a Time!</h5>
            <button>Learn More</button>

            <div class="overlay"></div>
        </section>

        <!-- Showcase categories -->
        <section id="categories">
            <div class="category">
                <div class="show">
                    <div class="w-1/2 h-2/3 rounded-full overflow-hidden"><img src="public/images/categories/category-1.png" alt=""></div>
                    <p class="text-sm text-white">Handicraft Items</p>
                </div>
                <div class="show">
                    <div class="w-1/2 h-2/3 rounded-full overflow-hidden"><img src="public/images/categories/category-2.png" alt=""></div>
                    <p class="text-sm text-white">Water Fountains</p>
                </div>
                <div class="show">
                    <div class="w-1/2 h-2/3 rounded-full overflow-hidden"><img src="public/images/categories/category-3.png" alt=""></div>
                    <p class="text-sm text-white">Buddha Idols</p>
                </div>
                <div class="show">
                    <div class="w-1/2 h-2/3 rounded-full overflow-hidden"><img src="public/images/categories/category-4.png" alt=""></div>
                    <p class="text-sm text-white">Pendulum Clocks</p>
                </div>
                <div class="show">
                    <div class="w-1/2 h-2/3 rounded-full overflow-hidden "><img src="public/images/categories/category-5.png" alt=""></div>
                    <p class="text-sm text-white">Wall Hangings</p>
                </div>
                <div class="show">
                    <div class="w-1/2 h-2/3 rounded-full overflow-hidden"><img src="public/images/categories/category-6.png" alt=""></div>
                    <p class="text-sm text-white">Metal Crafts</p>
                </div>
            </div>
        </section>

        <!-- Handi Crafts Products -->
        <section class="products mb-12">
            <h6>Showcase</h6>
            <div class="products-name">
                <h1>Our Products</h1>
                <button><a href="/craftsaura/woodenHandicraft">View All</a></button>
            </div>
            <div class="embla">
                <div class="embla__viewport">
                    <div class="embla__container">
                        <?php
                        $recipes = [
                            ['title' => 'Madhubani Paintings', 'category' => 'Handicraft Items', 'imgSrc' => 'public/images/products/product-1.jpg'],
                            ['title' => 'Kumkum Box', 'category' => 'Metal Crafts', 'imgSrc' => 'public/images/products/product-2.jpg'],
                            ['title' => 'Mexican Casserole', 'category' => 'Handicraft Items', 'imgSrc' => 'public/images/products/product-3.jpg'],
                            ['title' => 'Banana Crunch Pancakes', 'category' => 'Wall Hangings', 'imgSrc' => 'public/images/products/product-4.jpg'],
                            ['title' => 'Minty Melon Salad', 'category' => 'Handicraft Items', 'imgSrc' => 'public/images/products/product-5.jpg']
                        ];

                        foreach ($recipes as $recipe) {
                            extract($recipe);
                        ?>
                            <div class="embla__slide">
                                <?php require('views/shared/card-carousel.php'); ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <button class="embla__button embla__button--prev" type="button">
                    <svg class="embla__button__svg" viewBox="0 0 532 532">
                        <path fill="white" d="M355.66 11.354c13.793-13.805 36.208-13.805 50.001 0 13.785 13.804 13.785 36.238 0 50.034L201.22 266l204.442 204.61c13.785 13.805 13.785 36.239 0 50.044-13.793 13.796-36.208 13.796-50.002 0a5994246.277 5994246.277 0 0 0-229.332-229.454 35.065 35.065 0 0 1-10.326-25.126c0-9.2 3.393-18.26 10.326-25.2C172.192 194.973 332.731 34.31 355.66 11.354Z"></path>
                    </svg>
                </button>

                <button class="embla__button embla__button--next" type="button">
                    <svg class="embla__button__svg" viewBox="0 0 532 532">
                        <path fill="white" d="M176.34 520.646c-13.793 13.805-36.208 13.805-50.001 0-13.785-13.804-13.785-36.238 0-50.034L330.78 266 126.34 61.391c-13.785-13.805-13.785-36.239 0-50.044 13.793-13.796 36.208-13.796 50.002 0 22.928 22.947 206.395 206.507 229.332 229.454a35.065 35.065 0 0 1 10.326 25.126c0 9.2-3.393 18.26-10.326 25.2-45.865 45.901-206.404 206.564-229.332 229.52Z"></path>
                    </svg>
                </button>
            </div>

        </section>


    </main>
</div>

<?php require('views/partials/html-foot.php'); ?>