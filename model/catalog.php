<?php
// Danh mục sản phẩm
function getCatalog()
{
  $sql = "SELECT * FROM catalog ORDER BY id";
  return getAll($sql);
}
// Tìm kiếm danh mục sản phẩm
function getCatalogSearch($keyword)
{
  $sql = "SELECT * FROM catalog WHERE name LIKE '%$keyword%'";
  return getAll($sql);
}
// Kiểm tra tên danh mục có tồn tại hay không
function checkNameCatalog($name)
{
  $sql = "SELECT * FROM catalog WHERE name = '$name'";
  return getOne($sql);
}
// Thêm danh mục sản phẩm
function addCatalog($name)
{
  $sql = "INSERT INTO catalog(name) VALUES ('$name')";
  return execDatabase($sql);
}
// Lấy chi tiết danh mục sản phẩm
function getCatalogById($idCatalog)
{
  $sql = "SELECT * FROM catalog WHERE id = " . $idCatalog;
  return getOne($sql);
}
// Cập nhật danh mục sản phẩm
function updateCatalog($id, $name)
{
  $sql = "UPDATE catalog SET name = '$name' WHERE id = " . $id;
  return executeDatabase($sql);
}
// Xoá danh mục sản phẩm
function delCatalog($idCatalog)
{
  $checkForeignKey = checkForeignKey($idCatalog);
  if ($checkForeignKey > 0) {
    $alert = "Không thể xoá danh mục này vì có " . $checkForeignKey . " sản phẩm thuộc danh mục này!";
  } else {
    $sql = "DELETE FROM catalog WHERE id = " . $idCatalog;
    execDatabase($sql);
    $alert = "Xoá danh mục thành công!";
  }
  return $alert;
}
