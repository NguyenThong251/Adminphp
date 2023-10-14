<?php
session_start();
ob_start();
include_once("../model/connect.php");
include_once("../model/product.php");
include_once("../model/catalog.php");
include_once("../model/global.php");
include_once("../model/user.php");

if (!isset($_SESSION['user'])) {
  header("location: login.php");
} else {
  $admin = $_SESSION['user'];
  extract($admin);
}

// header
include_once("public/header.php");

if (isset($_GET['page']) && $_GET['page'] != "") {
  $page = $_GET['page'];
  switch ($page) {
      //search danh mục
    case 'searchCata':
      if (isset($_POST['searchBtnCata'])) {
        $keyword = $_POST['keyword'];
        $allCatalog = getCatalogSearch($keyword);
        include_once("public/category.php");
      }
      // search sản phẩm
    case 'searchProd':
      if (isset($_POST['searchBtnProd'])) {
        $keyword = $_POST['keyword'];
        $allProducts = getAllProductsAndCatalogName($keyword);
        include_once("public/products.php");
      }
      break;
      // Trang danh mục
    case 'category':
      $alert = "";
      $allCatalog = getCatalog();
      include_once("public/category.php");
      break;
      // Form thêm danh mục
    case 'formAddCatalog':
      include_once("public/formaddcatalog.php");
      break;
      // Trang thêm danh mục
    case 'addCatalog':
      if (isset($_POST['addCatalog'])) {
        $name = $_POST['nameCatalog'];
        $checkName = checkNameCatalog($name);
        if ($checkName > 0) {
          $alert = "Tên danh mục đã tồn tại!";
        } else {
          addCatalog($name);
          $alert = "Thêm danh mục thành công!";
        }
      }
      $allCatalog = getCatalog();
      include_once("public/category.php");
      break;
      // Form sửa danh mục
    case 'formUpdateCatalog':
      if (isset($_GET['idCatalog']) && $_GET['idCatalog'] > 0) {
        $idCatalog = $_GET['idCatalog'];
        $catalog = getCatalogById($idCatalog);
      }
      include_once("public/formupdatecatalog.php");
      // Trang sửa danh mục
    case 'updateCatalog':
      if (isset($_POST['btnUpCata'])) {
        $id = $_POST['idCatalog'];
        $name = $_POST['nameCatalog'];
        $checkName = checkNameCatalog($name);
        if ($checkName > 0) {
          $alert = "Tên danh mục đã tồn tại!";
        } else {
          updateCatalog($id, $name);
          $alert = "Cập nhật danh mục thành công!";
        }
        $allCatalog = getCatalog();
        include_once("public/category.php");
      }
      break;
      // Xoá danh mục
    case 'deletecatalog':
      if (isset($_GET['idCatalog']) && $_GET['idCatalog'] > 0) {
        $idCatalog = $_GET['idCatalog'];
        $alert = delCatalog($idCatalog);
      }
      $allCatalog = getCatalog();
      include_once("public/category.php");
      break;
      // Trang sản phẩm
    case 'products':
      $keyword = "";
      $allProducts = getAllProductsAndCatalogName($keyword);
      include_once("public/products.php");
      break;
      // Form thêm sản phẩm
    case 'formAddProduct':
      $allCatalog = getCatalog();
      include_once("public/formaddproduct.php");
      break;
      // Trang thêm sản phẩm
    case 'addProduct':
      if (isset($_POST['addNewProduct'])) {
        $idCata = $_POST['idCata'];
        $nameProd = $_POST['nameProd'];
        $priceProd = $_POST['priceProd'];
        $mainpriceProd = $_POST['mainpriceProd'];
        $imgProd = $_FILES['imgProd']['name'];
        if ($imgProd != "") {
          $targetPath = PATH_IMG . $imgProd;
          $tmp_name = $_FILES['imgProd']['tmp_name'];
          if (move_uploaded_file($tmp_name, $targetPath)) {
            echo "Tải ảnh lên thành công. ";
          } else {
            echo "Tải ảnh lên thất bại. ";
          }
        }
      }

      $checkNameProd = checkNameProduct($idProd);
      if ($checkNameProd > 0) {
        $alert = "Sản phẩm đã tồn tại!";
      } else {
        addProduct($nameProd, $imgProd, $priceProd, $mainpriceProd, $idCata);
        $alert = "Thêm sản phẩm thành công!";
      }

      $keyword = "";
      $allProducts = getAllProductsAndCatalogName($keyword);
      include_once("public/products.php");
      break;
      // Form sửa sản phẩm
    case 'formUpdateProduct':
      if (isset($_GET['idProduct']) && $_GET['idProduct'] > 0) {
        $idProduct = $_GET['idProduct'];
        $product = getOneProductAndCatalogName($idProduct);
        $allCatalog = getCatalog();
      }
      include_once("public/formupdateproduct.php");
      break;
      // Trang sửa sản phẩm
    case 'updateProduct':
      if (isset($_POST['btnUpProd'])) {

        $idProd = $_POST['idProd'];
        $idCata = $_POST['idCata'];
        $nameProd = $_POST['nameProd'];
        $priceProd = $_POST['priceProd'];
        $mainpriceProd = $_POST['mainpriceProd'];
        $imgProd = $_FILES['imgProd']['name'];
        if ($imgProd != "") {
          $targetPath = PATH_IMG . $imgProd;
          $tmp_name = $_FILES['imgProd']['tmp_name'];
          if (move_uploaded_file($tmp_name, $targetPath)) {
            $oldImg = $_POST['oldImg'];
            $targetPath = PATH_IMG . $oldImg;
            if (file_exists($targetPath)) {
              if (unlink($targetPath)) {
                echo "Xoá file cũ thành công. ";
              } else {
                echo "Xoá file cũ thất bại. ";
              }
            } else {
              echo "Không tìm thấy file để xoá. ";
            }

            echo "Tải ảnh mới lên thành công. ";
          } else {
            echo "Tải ảnh mới lên thất bại. ";
          }
        }
      }

      $checkNameProd = checkNameProduct($idProd);
      if ($checkNameProd > 0) {
        $alert = "Sản phẩm đã tồn tại!";
      } else {
        editProduct($idProd, $nameProd, $imgProd, $priceProd, $mainpriceProd, $idCata);
        $alert = "Cập nhật sản phẩm thành công!";
      }

      $keyword = "";
      $allProducts = getAllProductsAndCatalogName($keyword);
      include_once("public/products.php");
      break;
      // Xoá sản phẩm
    case 'deleteproduct':
      if (isset($_GET['idProduct']) && $_GET['idProduct'] > 0) {
        $idProduct = $_GET['idProduct'];

        //Xoá sản phẩm trên folder
        $imgFile = PATH_IMG . getImg($idProduct);
        echo 'Source ảnh: ' . $imgFile;
        if (file_exists($imgFile)) {
          if (unlink($imgFile)) {
            $alert = " Xoá file thành công!";
          } else {
            $alert = " Xoá file thất bại!";
          }
        } else {
          $alert = " Không tồn tại file!";
        }

        // Xoá sản phẩm trên database
        deleteProduct($idProduct);
      }
      $keyword = "";
      $allProducts = getAllProductsAndCatalogName($keyword);
      include_once("public/products.php");
      break;
    case 'orders':
      include_once("orders.php");
      break;
    case 'logout':
      unset($_SESSION['user']);
      header("location: login.php");
      break;
    default:
      include_once("public/home.php");
      break;
  }
} else {
  include_once("public/home.php");
}

include_once("public/footer.php");
