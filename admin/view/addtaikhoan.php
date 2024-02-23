<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<div class="row2">
      <div class="row2 font_title">
      <h1>Thêm Mới Người Dùng</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=taikhoan" method="POST" enctype="multipart/form-data">
          <div class="row2 mb10 form_content_container">
          <div class="row2 mb10">
            <label>Tên người dùng</label> <br>
            <input type="text" name="name" placeholder="Nhập tên người dùng" required>
            <label>Mật khẩu</label> <br>
            <input type="text" name="pass" placeholder="Nhập mật khẩu" required>
            <label>Email</label>
            <input type="text" name="email" placeholder="Nhập email" required>
            <label>Vai trò</label>
            <input type="radio" name="vaitro" value="" checked>Khách hàng <br>
            <input type="radio" name="vaitro" value="1">Quản trị
          <div class="row mb10 ">
          <input class="mr20" type="submit" value="Thêm tài khoản" name="add_tk">
          <input  class="mr20" type="reset" value="Nhập lại">
          <a href="index.php?act=taikhoan"><input  class="mr20" type="button" value="Danh sách"></a>
          </div>
        </form>
        
      </div>
    </div>