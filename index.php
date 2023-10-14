<?php
session_start();
ob_start();

// connectDatabase();
include_once("model/connect.php");
include_once("model/product.php");
include_once("model/global.php");

// header
include_once("view/header.php");

//chỉnh sửa đường dẫn trên thanh url
// index.php?pg=productdetail&idproduct=2
if (isset($_GET['page']) && ($_GET['page'] != "")) {
  // Vào các trang con
  $page = $_GET['page'];
  switch ($page) {
      //Trang sản phẩm
    case 'products':
      if (isset($_GET['idcatalog']) && ($_GET['idcatalog'] > 0)) {
        $idCatalog = $_GET['idcatalog'];
      } else {
        $idCatalog = 0;
      }

      $allProducts = getAllProducts($idCatalog);
      include_once("view/products.php");
      break;
      // Trang chi tiết sản phẩm
    case 'productdetail':
      if (isset($_GET['idproduct']) && (is_numeric($_GET['idproduct']) > 0)) {
        $idProduct = $_GET['idproduct'];
        $idCatalog = getIdCatalog($idProduct);

        $product = getIdProduct($idProduct);
        $relatedProducts = getRelatedProducts($idCatalog, $idProduct);

        include_once("view/productdetail.php");
      } else {
        header('Location: index.php');
      }
      break;
    case 'about':
      include_once("view/about.php");
      break;
    case 'contact':
      include_once("view/contact.php");
      break;
    case 'account':
      include_once("view/account.php");
      break;
      // Trang giỏ hàng
    case 'cart':
      include_once("view/cart.php");
      break;
      // Thêm vào giỏ hàng
    case 'addToCart':
      if (isset($_POST['btnAddToCart']) && ($_POST['btnAddToCart'])) {
        $img = $_POST['img'];
        $name = $_POST['name'];
        $mainprice = $_POST['mainprice'];
        $quantity = 1;
        // Kiểm tra xem có session cart chưa
        if (isset($_SESSION['cart']) && ($_SESSION['cart'] != "")) {
          $flag = false;
          // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
          foreach ($_SESSION['cart'] as $key => $value) {
            // Nếu có rồi thì tăng số lượng lên 1
            if ($value['name'] == $name) {
              $_SESSION['cart'][$key]['quantity'] += 1;
              $flag = true;
            }
          }
          // Nếu chưa có thì thêm vào giỏ hàng
          if (!$flag) {
            $product = [
              "img" => $img,
              "name" => $name,
              "mainprice" => $mainprice,
              "quantity" => $quantity
            ];
            $_SESSION['cart'][] = $product;
          }
        }
        // Nếu chưa có session cart 
        else {
          $product = [
            "img" => $img,
            "name" => $name,
            "mainprice" => $mainprice,
            "quantity" => $quantity
          ];
          $_SESSION['cart'][] = $product;
        }
        header('Location: index.php?page=cart');
      }
      break;
      // Xoá sản phẩm trong giỏ hàng
    case 'deleteProd':
      if (isset($_GET['prodNum']) && ($_GET['prodNum'] >= 0)) {
        array_splice($_SESSION['cart'], $_GET['prodNum'], 1);
        header('Location: index.php?page=cart');
      }
      if (empty($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        // header('Location: index.php');
      }
      break;
      // Mặc định vào trang chủ
    default:
      $hotProducts = getHotProducts();
      $bestProducts = getBestProducts();
      // echo var_dump($hotProducts);
      include_once("view/home.php");
      break;
  }
} else {
  // Vào trang chủ
  $hotProducts = getHotProducts();
  $bestProducts = getBestProducts();
  // echo var_dump($hotProducts);
  include_once("view/home.php");
}

// footer
include_once("view/footer.php");
