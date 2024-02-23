<?php 
include './model/pdo.php';
include './model/sanpham.php';
include './model/danhmuc.php';
include './model/binhluan.php';
include './model/taikhoan.php';
include 'global.php';
include './view/header.php';
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_top10();
$dsdm = loadall_danhmuc();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
  $act = $_GET['act'];
  switch ($act) {
    case 'chitietsanpham':
      if(isset($_POST['guibinhluan'])) {
        insert_binhluan($_POST['idpro'], $_POST['noidung'], $_POST['iduser']);
      }
      if(isset($_GET['idsp']) && $_GET['idsp'] > 0) {
        $sp = loadone_sanpham($_GET['idsp']);
        $sp_cungloai = loadsp_cungloai($_GET['idsp'], $sp['iddm']);
        $binhluan = load_binhluan($_GET['idsp']);
        include './view/chitietsanpham.php';
      } 
      break;
    case 'dangky':
      if (isset($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $validate_email = validate_email($email);
        $validate_user = validate_user($user);
        $validate_pass = validate_pass($pass);
        if (isset($email,$user,$pass)) {
          insert_taikhoan($user,$pass,$email);
          $thongbao = 'Đăng ký người dùng thành công';
        }
      }
      include './view/dangky.php';
      break;
    case 'dangnhap':
      if (isset($_POST['dangnhap'])) {
        $mess_dangnhap = confirm_dangnhap($_POST['user'],$_POST['pass']);
      }
      include './view/home.php';
      break;
    case 'quenmatkhau':
      if (isset($_POST['guiemail'])) {
        $mess_email = send_email($_POST['email']);
      }
      include './view/quenmatkhau.php';
      break;
    case 'dangxuat':
      dangxuat();
      include './view/home.php';
      break;
    case 'sanpham':
      $spnew= loadall_spdm($_GET['iddm']);
      include './view/home.php';
      break;
      
    default:
    
      break;
  }
} else {
  include './view/home.php'; 
}
  

include './view/footer.php'; 
?>