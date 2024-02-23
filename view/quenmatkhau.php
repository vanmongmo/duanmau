<main class="catalog  mb ">
    <div class="boxleft">
      <div class="box_title">Quên Mật Khẩu</div>
      <div class="box_content form_account">
        <form action="index.php?act=quenmatkhau" method="post">
          <div>
            <p>Email</p>
            <input type="email" name="email" placeholder="Email">
          </div>

          <input type="submit" value="Yêu Cầu" name="guiemail">
          <input type="reset" value="Nhập Lại">
        </form>
        <?php if (isset($mess_email)) { ?>
          <span><?php echo $mess_email ?></span>
        <?php } ?>
      </div>
    </div>
    <?php include 'boxright.php'; ?>

  </main>