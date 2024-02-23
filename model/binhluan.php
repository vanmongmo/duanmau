<?php
// DISPLAY COMMENTS 
function load_binhluan($id) {
    $sql = "SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM binhluan
            INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id
            INNER JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $id";
    $result = pdo_query($sql);
    return $result;
}
//  ADD COMMENTS
function insert_binhluan($idpro, $noidung,$iduser){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
        VALUES ('$noidung','$iduser','$idpro','$date');
    ";
    pdo_execute($sql);
}
// DISPLAY 1 product COMMENTS (admin)
function loadbinhluan_sanpham($id) {
    $sql = "SELECT COUNT(*) AS soluong FROM binhluan WHERE idpro = $id";
    $result = pdo_query_one($sql);
    return $result;
}
// DISPLAY the DATE of THE LAST comment
function binhluan_moinhat($id) {
    $sql = "SELECT ngaybinhluan FROM binhluan WHERE idpro = $id ORDER BY ngaybinhluan DESC LIMIT 1";
    $result = pdo_query_one($sql);
    return $result;
}
// SHOW OLDEST comments
function binhluan_cunhat($id) {
    $sql = "SELECT ngaybinhluan FROM binhluan WHERE idpro = $id ORDER BY ngaybinhluan ASC LIMIT 1";
    $result = pdo_query_one($sql);
    return $result;
}
// SHOW comment DETAILS
function chitiet_binhluan($id) {
    $sql = "SELECT binhluan.id, binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM binhluan INNER JOIN taikhoan 
    ON binhluan.iduser = taikhoan.id WHERE binhluan.idpro = $id ORDER BY binhluan.ngaybinhluan DESC";
    $result = pdo_query($sql);
    return $result;
}
// DELETE Comment
function xoa_binhluan($id) {
    $sql = "DELETE FROM binhluan WHERE id = $id";
    pdo_execute($sql);
}
?>