<?php
session_start();
ob_start();

$showProductInCart = "";
if (isset($_SESSION['cart']) && ($_SESSION['cart'] != "")) {
  $cart = $_SESSION['cart'];
  $showProductInCart .= '<table>
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                              <th>Sản phẩm</th>
                              <th>Giá</th>
                              <th>Số lượng</th>
                              <th>Tạm tính</th>
                            </tr>
                          </thead>
                          <tbody class="cart__products">';
  $subTotal = 0;
  $total = 0;
  $prodNum = 0;
  foreach ($cart as $item) {
    extract($item);
    $subTotal = $mainprice * $quantity;
    $total += $subTotal;
    $linkDelete = "index.php?page=deleteProd&prodNum=" . $prodNum;
    $showProductInCart .= '<tr>
                            <td>
                              <a href="' . $linkDelete . '" class="cart__del">
                                <span class="material-symbols-outlined"> cancel </span>
                              </a>
                            </td>
                            <td>
                              <a href="">
                                <img src="view/layout/assets/img/product/' . $img . '" alt="product" />
                              </a>
                            </td>
                            <td>
                              <a href="">' . $name . '</a>
                            </td>
                            <td>
                              <span>' . number_format($mainprice, 0, ',', '.') . '<u>đ</u></span>
                            </td>
                            <td>
                              <div class="cart__quantity">
                                <a href="javascript:void(0)" class="cart__quantity--remove">
                                  <span class="material-symbols-outlined"> remove </span>
                                </a>
                                <input type="text" value="' . $quantity . '" />
                                <a href="javascript:void(0)" class="cart__quantity--add">
                                  <span class="material-symbols-outlined"> add </span>
                                </a>
                              </div>
                            </td>
                            <td>
                              <span>' . number_format($subTotal, 0, ',', '.') . '<u>đ</u></span>
                            </td>
                          </tr>';
    $prodNum++;
  }
  $showProductInCart .= '<tr>
                          <td>
                            <div class="cart__coupon">
                              <input type="text" placeholder="Nhập mã giảm giá" />
                              <input type="submit" value="Áp dụng" />
                            </div>
                            <button class="cart__update" disabled>Cập nhật giỏ hàng</button>
                          </td>
                        </tr>
                        </tbody>
                        </table>
                        <div class="cart__totals">
                          <h2>Cộng giỏ hàng</h2>
                          <table class="cart__totals--bill">
                            <tbody>
                              <tr>
                                <th>Tạm tính</th>
                                <td>' . number_format($total, 0, ',', '.') . '<u>đ</u></td>
                              </tr>
                              <tr>
                                <th>Giao hàng</th>
                                <td>
                                  <p>
                                    Đồng giá <b>30000<u>đ</u></b>
                                  </p>
                                  <p>
                                    Tuỳ chọn giao hàng sẽ được cập nhật trong quá trình thanh
                                    toán.
                                  </p>
                                  <p style="color: var(--black)">Tính phí giao hàng</p>
                                </td>
                              </tr>
                              <tr>
                                <th>Tổng cộng</th>
                                <td><b>' . number_format(($total + 30000), 0, ',', '.') . '<u>đ</u></b></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="cart__checkout">
                            <a href="">Tiến hành thanh toán</a>
                          </div>
                        </div>';
} else {
  $showProductInCart = '<div class="cart__empty">
                          <h2>Giỏ hàng của bạn trống</h2>
                          <img src="view/layout/assets/img/empty-cart.png" alt="empty-cart" />
                          <a href="index.php?page=products">Tiếp tục mua sắm</a>
                        </div>';
}
?>

<head>
  <link rel="stylesheet" href="view/layout/assets/css/shop.css" />
  <link rel="stylesheet" href="view/layout/assets/css/cart.css" />
</head>
<div id="cart">
  <div class="shop__sitemap">
    <a href="index.php">Trang chủ</a>
    <span>/</span>
    <a href="index.php?page=cart">Giỏ hàng</a>
    <h1 class="shop__heading">Giỏ hàng</h1>
  </div>

  <?= $showProductInCart ?>

</div>
<script src="view/layout/assets/js/product_quantity.js"></script>