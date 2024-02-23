<div class="row2">
         <div class="row2 font_title">
          <h1>Danh sách người dùng</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên người dùng</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
            </tr>
            <?php 
                $stt = 0;
                foreach ($taikhoan as $tk) { 
                $stt ++;
                extract($tk);
                ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $pass; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $address; ?></td>
                    <?php if ($role == 0) {
                        $vaitro = 'Khách hàng';
                    } else {
                        $vaitro = 'Admin';
                     }
                    ?>
                    <td><?php echo $vaitro ?></td>
                    <td>
                        <button><a href="index.php?act=taikhoan&idtk=<?php echo $id ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php } ?>
           </table>
           </div>
           <div class="row mb10 ">
        <input class="mr20" type="button" value="Chọn tất cả">
        <input  class="mr20" type="button" value="Bỏ chọn tất cả">
        <a href="index.php?act=taikhoan&btn_add"> <input  class="mr20" type="button" value="Nhập thêm" ></a>
           </div>
          </form>
         </div>
        </div>
    </div>