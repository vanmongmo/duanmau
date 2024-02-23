<main class="catalog  mb">
      <div class="boxleft">           
        <div class="banner">
          <img id="banner" src="./img/anh0.jpg" alt="">
          <button class="pre" onclick="pre()">&#10094;</button>
          <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">   
          <?php foreach ($spnew as $sp) { 
            extract($sp);
            $hinh = $img_path.$img;
            ?> 
          <div class="box_items">
            <div class="box_items_img">
              <a href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><img src="<?php echo $hinh ?>"></a>
              <div class="add"><a href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>">ADD TO CART</a></div>
            </div>
            <a class="item_name" href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><?php echo $name ?></a>
            <p class="price"><?php echo $price ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    <?php include 'boxright.php' ?>
    </main>
   