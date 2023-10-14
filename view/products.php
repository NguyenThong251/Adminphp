<?php
$showAllProducts = '';
foreach ($allProducts as $item) {
  extract($item);
  if ($price > 0) {
    $showprice = '<del><b>' . number_format($price, 0, ',', '.') . '<u>đ</u></b></del>
                        <b>' . number_format($mainprice, 0, ',', '.') . '<u>đ</u></b>';
  } else {
    $showprice = '<b>' . number_format($mainprice, 0, ',', '.') . '<u>đ</u></b>';
  }
  if ($mainprice <= 0) {
    $mainprice = 'Đang cập nhật';
    $showprice = '<b>' . $mainprice . '<u></u></b>';
    $showAddToCart = '<input disabled="disabled" value="Thêm vào giỏ"/>';
  } else {
    $showAddToCart = '<input type="submit" name="btnAddToCart" value="Thêm vào giỏ"/>';
  }
  if ($promotion != 1) {
    $showPromotion = '<span>Sale!</span>';
  } else {
    $showPromotion = '';
  }
  $linkDetail = 'index.php?page=productdetail&idproduct=' . $id;
  $showAllProducts .= '<div class="product">
                            <div class="product__img">
                              <a href="' . $linkDetail . '"><img src="view/layout/assets/img/product/' . $img . '" alt="product" /></a>
                            </div>
                            ' . $showPromotion . '
                            <div class="product__info">
                              <div class="product__rating">
                                <span class="icon material-symbols-outlined"> star </span>
                                <span class="icon material-symbols-outlined"> star </span>
                                <span class="icon material-symbols-outlined"> star </span>
                                <span class="icon material-symbols-outlined"> star </span>
                                <span class="material-symbols-outlined"> star </span>
                              </div>
                              <a href="' . $linkDetail . '">' . $name . '</a>
                              <div class="product__price">
                                ' . $showprice . '
                              </div>
                              <form action="index.php?page=addToCart" method="post">
                                <input type="hidden" name="img" value="' . $img . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="mainprice" value="' . $mainprice . '">          
                                ' . $showAddToCart . '
                              </form>
                            </div>
                          </div>';
}
?>

<head>
  <link rel="stylesheet" href="view/layout/assets/css/shop.css" />
</head>
<div id="shop">
  <div class="shop__sitemap">
    <a href="">Trang chủ</a>
    <span>/</span>
    <a href="">Cửa hàng</a>
    <h1 class="shop__heading">Cửa hàng</h1>
  </div>
  <div class="shop__show">
    <p>Hiển thị 1-8 của 20 kết quả</p>
    <form action="">
      <select name="orderby" id="">
        <option value="menu-order">Thứ tự mặc định</option>
        <option value="popularity">Thứ tự theo mức độ phổ biến</option>
        <option value="rating">Thứ tự theo điểm đánh giá</option>
        <option value="date">Mới nhất</option>
        <option value="price">Thứ tự theo giá: Từ thấp đến cao</option>
        <option value="price-desc">
          Thứ tự theo giá: Từ cao đến thấp
        </option>
        <option value="name">Thứ tự theo tên: A-Z</option>
        <option value="name-desc">Thứ tự theo tên: Z-A</option>
      </select>
      <input type="hidden" name="orderby" value="1" />
    </form>
  </div>
  <div class="product__container">

    <?= $showAllProducts ?>
  </div>
  <div class="product__pages">
    <ul>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li>
        <a href="#"><i class="bi bi-arrow-right"></i></a>
      </li>
    </ul>
  </div>
</div>