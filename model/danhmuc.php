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
<?php
// DISPLAY CATEGORIES
function loadall_danhmuc() {
    $sql = "SELECT * FROM danhmuc order by id ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function load_ten_dm($iddm) {
    $sql = "SELECT * FROM danhmuc WHERE id =".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
}

// ADD CATEGORIES
function add_danhmuc($name) {
    $sql = "INSERT INTO danhmuc(name) 
            VALUES ('$name')";
    // $sql = "INSERT INTO danhmuc(id,name) 
    //         VALUES ('$id','$name')";
    pdo_execute($sql);
}

// DISPLAY THE NUMBER of PRODUCTS in the CATEGORY
function loadnum_danhmuc($id) {
    $sql = "SELECT COUNT(name) AS soluong FROM sanpham WHERE iddm = $id";
    $result = pdo_query_one($sql);
    return $result;
}
// SHOW the most EXPENSIVE price
function loadgia_datnhat($id) {
    $sql = "SELECT price FROM sanpham WHERE iddm = $id ORDER BY price DESC LIMIT 1";
    $result = pdo_query_one($sql);
    return $result;
}
// SHOW CHEAPEST price
function loadgia_renhat($id) {
    $sql = "SELECT price FROM sanpham WHERE iddm = $id ORDER BY price ASC LIMIT 1";
    $result = pdo_query_one($sql);
    return $result;
}
// DISPLAY the CATEGORY and THE NUMBER of PRODUCTS
function load_bieudo($id) {
    $sql = "SELECT danhmuc.name, COUNT(sanpham.iddm) AS soluong FROM danhmuc INNER JOIN sanpham ON danhmuc.id = sanpham.iddm 
    WHERE sanpham.iddm = $id";
    $result = pdo_query_one($sql);
    return $result;
}