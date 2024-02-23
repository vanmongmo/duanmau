<main class="catalog  mb ">
 <div class="boxleft">
    <div class="box_title">Đăng ký thành viên</div>
      <div class="box_content form_account">
        <form action="index.php?act=dangky" method="post">
          <div>
            <p>Email</p>
            <input type="email" name="email" placeholder="Email" value="<?php if (isset($email)) { echo $email; } ?>"><br>
            <?php if (isset($validate_email) && $validate_email) { ?>
                        <span style="color: red">Email không đúng định dạng</span> 
            <?php } ?>
          </div>
          <div>
            Tên đăng nhập
            <input type="text" name="user"  placeholder="User" value="<?php if (isset($user)) { echo $user; } ?>"><br>
            <?php if (isset($validate_user) && $validate_user) { ?>
                        <span style="color: red">User không đúng định dạng</span> 
            <?php } ?>
          </div>
          <div>
            Mật khẩu
            <input type="password" name="pass"  placeholder="Pass" value="<?php if (isset($pass)) { echo $pass; } ?>"><br>
            <?php if (isset($validate_pass) && $validate_pass) { ?>
                        <span style="color: red">Pass không đúng định dạng</span> 
            <?php } ?>
          </div>
          <input type="submit" value="Đăng ký" name="dangky">
          <input type="reset" value="Nhập lại">
        </form>
        <?php
        if (isset($thongbao)) {
            echo $thongbao;
        }
        ?>
      </div>
    </div>
   <?php include 'boxright.php' ?>
</main>