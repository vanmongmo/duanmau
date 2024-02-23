<main class="catalog  mb ">
    <div class="boxleft">
        <div style="margin:25px; font-size:25px;border:2px solid #000; padding: 10px;">
            Từ khóa tìm kiếm: <?php echo $tukhoa; ?>
        </div>
        <div class="items">
            <?php
                foreach($search_sanpham as $sp) {
                    extract($sp);
                    ?>
                        <div class="box_items">
                            <div class="box_items_img">
                                <img src="upload/<?= $img ?>" alt="">
                                <div class="add" href="">ADD TO CART</div>
                            </div>
                            <a class="item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                            <p class="price">$ <?= $price ?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
        include "boxright.php";
    ?>
</main>