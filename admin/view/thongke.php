<div class="row2">
         <div class="row2 font_title">
          <h1>Thống kê</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng sản phẩm</th>
                <th>Đắt nhất</th>
                <th>Rẻ nhất</th>
            </tr>
            <?php foreach ($danhmuc as $dm) { 
                extract($dm);
                $soluong = loadnum_danhmuc($id);
                $giadatnhat = loadgia_datnhat($id);
                $giarenhat = loadgia_renhat($id);
                ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $soluong['soluong']?></td>
                <td><?php echo $giadatnhat['price']?></td>
                <td><?php echo $giarenhat['price']?></td>
            </tr>
        <?php } ?>
           </table>
            <button><a href="index.php?act=thongke&chart">Biểu đồ thống kê</a></button>
           </div>
          </form>
         </div>
        </div>
    </div>