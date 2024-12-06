<div id="product-card" data-aos="flip-left">
    <img src="<?= $imgSrc ?>" alt="">
    <div class="info">
        <h3 class="card-title"><?php echo htmlspecialchars($name); ?></h3>
        <!-- <h3 class="card-description"><?php echo htmlspecialchars($description); ?></h3> -->
    </div>
    <p class="card-price"><?php echo htmlspecialchars($price, 2); ?></p>
    <button class="view-card">
        <img src="public/images/icons/eye.svg" alt="">
        <span>View</span>
    </button>
</div>

<div class="modal" id="product-modal">
    <div class="modal-content">
        <button id="close-modal" class="close-modal">X</button>
        <div id="modal-image"></div>
        <h3 id="modal-title"></h3>
        <p id="modal-price"></p>
    </div>
</div>