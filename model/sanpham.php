<?php
// SHOW 10 LATEST products
function loadall_sanpham_home() {
    $sql = "select * from sanpham where 1 order by id desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// DISPLAY TOP 10 products with the HIGHEST VIEWS
function loadall_sanpham_top10() {
    $sql = "select * from sanpham order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
} 
// SHOW product DETAILS 
function loadone_sanpham($id) {
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
// SHOW products of THE SAME type
function loadsp_cungloai($id, $iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm and id <> $id limit 0,5";
    $result = pdo_query($sql);
    return $result;
}
// DISPLAY ALL  products in the CATEGORY
function loadall_spdm($id) {
    $sql = "SELECT * FROM sanpham WHERE iddm = $id";
    $result = pdo_query($sql);
    return $result;
}
// LOAD ALL products
function loadall_sanpham() {
    $sql = "SELECT * FROM sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// ADD products
function add_sanpham($name,$price,$img,$mota,$iddm) {
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm)
            VALUES ('$name','$price','$img','$mota','$iddm')";
    pdo_execute($sql);
}
// UPLOAD image
function upload_anh($target_f,$tmp_file) {
    $target = "../img/".$target_f;
    move_uploaded_file($tmp_file,$target);
}
// DELETE product
function xoa_sanpham($id) {
    $sql = "DELETE FROM sanpham WHERE id = '$id'";
    pdo_execute($sql);
}
// UPDATE products
function update_sanpham($id,$name,$price,$img,$mota) {
    $sql = "UPDATE sanpham SET name = '$name', price = '$price', img = '$img', mota = '$mota' WHERE id = '$id'";
    pdo_execute($sql);
}