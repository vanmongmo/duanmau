<div class="row2">
      <div class="row2 font_title">
      <h1>Thêm Mới Sản Phẩm</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=sanpham" method="POST" enctype="multipart/form-data">
          <div class="row2 mb10 form_content_container">
          <div class="row2 mb10">
            <label>Tên Sản Phẩm</label> <br>
            <input type="text" name="name" placeholder="Nhập Tên Sản Phẩm" required>
            <label>Giá Sản Phẩm </label> <br>
            <input type="text" name="price" placeholder="Nhập Giá Sản Phẩm" required>
            <label>Ảnh Sản Phẩm</label> 
            <input type="file" name="file_up" required>
            <label>Mô Tả Sản Phẩm</label>
            <textarea name="mota" id="" cols="170" rows="5"></textarea>
            <label for="">ID Danh Mục</label>
            <select name="iddm" id="">
                <?php foreach ($danhmuc as $dm) { 
                    extract($dm);
                    ?>        
                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                 <?php } ?>
            </select>
          </div>
          <div class="row mb10 ">
          <input class="mr20" type="submit" value="Thêm Mới Sản Phẩm" name="add_sp">
          <input  class="mr20" type="reset" value="Nhập Lại">
          <a href="index.php?act=sanpham"><input  class="mr20" type="button" value="Danh Sách Sản Phẩm"></a>
          </div>
        </form>
        
      </div>
    </div>