<div class="row2">
      <div class="row2 font_title">
      <h1>Thêm mới danh mục</h1>
      </div>
      <div class="row2 form_content ">
        <form action="./index.php?act=danhmuc" method="POST">
          <div class="row2 mb10">
          <label>Tên danh mục </label> <br>
          <input type="text" name="tenloai" placeholder="Nhập tên danh mục" required oninvalid="setCustomValidity('Bạn không thể thêm sản phẩm nếu để trống nó')">
          </div>
          <div class="row mb10 ">
          <input class="mr20" type="submit" value="Thêm mới danh mục " name="submit">
          <input  class="mr20" type="reset" value="Nhập lại">
          <a href="index.php?act=sanpham"><input  class="mr20" type="button" value="Danh sách"></a>
          </div>
        </form>
      </div>
    </div>