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
<div class="boxright">     
        <div class="mb">
          <div class="box_title">Đăng Nhập</div>
          <?php if (!isset($_SESSION['user'])) { ?>
          <div class="box_content form_account">
              <form action="./index.php?act=dangnhap" method="POST">
                <h4>Tên Người Dùng</h4>
                <input type="text" name="user" id="">
                <h4>Mật Khẩu</h4>
                <input type="password" name="pass" id=""><br>
                <?php if(isset($mess_dangnhap)) { ?>
                <span style="color: red"><?php echo $mess_dangnhap ?></span><br>
                <?php } ?>
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản?<br>
                <input type="submit" name="dangnhap" value="Đăng nhập">
              </form>
              <li class="form_li"><a href="./index.php?act=quenmatkhau">Quên Mật Khẩu</a></li>
              <li class="form_li"><a href="./index.php?act=dangky">Tạo Tài Khoản</a></li>
          </div>
          <?php } else { ?>
              <br>
              <?php 
              $tk = load_vaitro($_SESSION['user']);
              if($tk['role'] == 1) { ?>
                <button><a href="./admin/index.php">Quản Trị</a></button>
              <?php } ?>
              <button><a href="index.php?act=dangxuat">Đăng Xuất</a></button>
        <?php } ?>
        </div>
        <div class="mb">
          <div class="box_title">DANH MỤC</div>
          <div class="box_content2 product_portfolio">
            <ul >
              <?php foreach ($dsdm as $dm) { 
                extract($dm);
                ?>
                <li><a href="index.php?act=sanpham&iddm=<?php echo $id ?>"><?php echo $name ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="boxfooter searbox">
<form action="index.php?act=sanpham" method="post">
  <input type="text" name="kyw">
  <input type="submit" name="timkiem" value="Tìm kiếm">

</form>
        </div>
        <div class="mb">
          <div class="box_title">DANH MỤC NỔI BẬT</div>
          <div class="box_content">
            <?php foreach ($dstop10 as $ds) { 
              extract($ds);
              ?>
              <div class="selling_products" style="width:100%;">
                <img src="img/<?php echo $img ?>">
                <a href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><?php echo $name ?></a>
              </div>
            <?php } ?>
            </div>
        </div>
      </div>