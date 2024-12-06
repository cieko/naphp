<div id="blog-card" data-aos="flip-left">
    <div class="image">
        <img src="<?= $imgSrc ?>" alt="">
    </div>
    <p class="view">
        <?= $created ?> <img src="public/images/icons/ellipse.svg" alt="" class="!w-1 !h-full !flex !items-center !mx-2"> <img src="public/images/icons/view.svg" alt="" class="!w-3 !mr-1 !h-full !flex !items-center "> <?= $views ?>
    </p>
    <div class="info">
        <h3 class="card-title"><?= htmlspecialchars($title); ?></h3>
        <h3 class="card-description"><?= htmlspecialchars($description); ?></h3>
    </div>
</div>