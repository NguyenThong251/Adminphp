<?php
//Sản phẩm hot
function getHotProducts()
{
  $sql = "SELECT * FROM products WHERE hot = 1 ORDER BY id DESC LIMIT 4";
  return getAll($sql);
}
//Sản phẩm bán chạy
function getBestProducts()
{
  $sql = "SELECT * FROM products WHERE bestseller = 1 ORDER BY id DESC LIMIT 4";
  return getAll($sql);
}
//Tất cả sản phẩm
function getAllProducts($idcatalog)
{
  $sql = "SELECT * FROM products";
  if ($idcatalog > 0) {
    $sql .= " WHERE idcatalog = " . $idcatalog;
  }
  $sql .= " ORDER BY id DESC";
  return getAll($sql);
}
// Show tất cả sản phẩm và tên catalog
function getAllProductsAndCatalogName($keyword)
{
  $sql = "SELECT p.*, c.name as catalogname FROM products p INNER JOIN catalog c ON p.idcatalog = c.id";
  if ($keyword != "") {
    $sql .= " WHERE p.name LIKE '%$keyword%'";
  }
  $sql .= " ORDER BY p.id DESC";
  return getAll($sql);
}
// Show một sản phẩm và tên catalog
function getOneProductAndCatalogName($idProduct)
{
  $sql = "SELECT p.*, c.name as catalogname FROM products p INNER JOIN catalog c ON p.idcatalog = c.id WHERE p.id = " . $idProduct;
  return getOne($sql);
}
// Lấy ID sản phẩm
function getIdProduct($idProduct)
{
  $sql = "SELECT * FROM products WHERE id = " . $idProduct;
  return getOne($sql);
}
//Lấy tên ảnh
function getImg($idProduct)
{
  $sql = "SELECT * FROM products WHERE id = " . $idProduct;
  $detail = getOne($sql);
  extract($detail);
  return $img;
}
// Lấy idcatalog từ idproduct
function getIdCatalog($idProduct)
{
  $sql = "SELECT idcatalog FROM products WHERE id = " . $idProduct;
  $getOne = getOne($sql);
  extract($getOne);
  return $idcatalog;
}
//Sản phẩm liên quan
function getRelatedProducts($idCatalog, $idProduct)
{
  $sql = "SELECT * FROM products WHERE idcatalog = " . $idCatalog . " AND id != " . $idProduct . " ORDER BY id";
  return getAll($sql);
}
//Xoá sản phẩm
function deleteProduct($idProduct)
{
  $sql = "DELETE FROM products WHERE id = " . $idProduct;
  return execDatabase($sql);
}
// Check khoá ngoại - Đếm số lượng sản phẩm trong danh mục
function checkForeignKey($idCatalog)
{
  $sql = "SELECT * FROM products WHERE idcatalog = " . $idCatalog;
  $productlist = getAll($sql);
  return count($productlist);
}
// Check tên sản phẩm
function checkNameProduct($nameProduct)
{
  $sql = "SELECT * FROM products WHERE name = '$nameProduct'";
  $productlist = getAll($sql);
  return count($productlist);
}
// Thêm sản phẩm
function addProduct($nameProd, $imgProd, $priceProd, $mainpriceProd, $idCata)
{
  $sql = "INSERT INTO products (name, img, price, mainprice, idcatalog) VALUES ('$nameProd', '$imgProd', '$priceProd', '$mainpriceProd', '$idCata')";
  return execDatabase($sql);
}
// Sửa sản phẩm
function editProduct($idProd, $nameProd, $imgProd, $priceProd, $mainpriceProd, $idCata)
{
  $sql = "UPDATE products SET name = '$nameProd', img = '$imgProd', price = '$priceProd', mainprice = '$mainpriceProd', idcatalog = '$idCata' WHERE id = " . $idProd;
  return executeDatabase($sql);
}
