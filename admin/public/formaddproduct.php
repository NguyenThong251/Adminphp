<?php
$showCata = "";
foreach ($allCatalog as $catalog) {
  extract($catalog);
  $showCata .= '<option value="' . $id . '">' . $name . '</option>';
}
?>

<head>
  <link rel="stylesheet" href="../view/layout/assets/css/updatecatalog.css" />
</head>
<div id="account">
  <h1>Quản lí danh mục</h1>
  <div class="account__admin">
    <div class="account__admin--nav">
      <ul>
        <li><a href="index.php">Bảng điều khiển</a></li>
        <li><a href="index.php?page=category">Danh mục sản phẩm</a></li>
        <li><a class="is_pink" href="index.php?page=products">Sản phẩm</a></li>
        <li><a href="index.php?page=order">Đơn hàng</a></li>
        <li><a href="index.php?page=logout">Đăng xuất</a></li>
      </ul>
    </div>
    <div class="account__order--history">
      <h3>Thêm danh mục mới</h3>
      <div class="update__product">
        <form action="index.php?page=addProduct" method="post" enctype="multipart/form-data">
          <div class="update__product--container">
            <label for="idCata">Lựa chọn danh mục:</label>
            <select name="idCata" id="idCata">
              <option selected value="default">-- Danh mục --</option>
              <?= $showCata ?>
            </select>
          </div>
          <div class="update__product--container">
            <label for="imgProd">Hình ảnh:</label>
            <input type="file" name="imgProd" id="imgProd" />
          </div>
          <div class="update__product--container">
            <label for="nameProd">Tên sản phẩm:</label>
            <input type="text" name="nameProd" id="nameProd" />
          </div>
          <div class="update__product--container">
            <label for="priceProd">Giá sản phẩm chưa giảm:</label>
            <input type="text" name="priceProd" id="priceProd" />
          </div>
          <div class="update__product--container">
            <label for="mainpriceProd">Giá sản phẩm đã giảm:</label>
            <input type="text" name="mainpriceProd" id="mainpriceProd" />
          </div>
          <div class="update__product--container">
            <input type="submit" name="addNewProduct" value="Thêm sản phẩm">
        </form>
      </div>
    </div>
  </div>
</div>