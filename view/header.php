<?php
// liên kết file catalog.php trong model
include_once("model/catalog.php");
// lấy dữ liệu từ catalog
$catalogs = getCatalog();
// khởi tạo biến showCatalog
$showCatalog = "";
// lặp dữ liệu từ catalog
foreach ($catalogs as $catalog) {
  // giải nén dữ liệu
  extract($catalog);
  // hiển thị dữ liệu
  $showCatalog .= '<li><a href="./index.php?page=products&idcatalog=' . $id . '">' . $name . '</a></li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="view/layout/assets/css/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div class="header__container">
        <div class="header__logo">
          <a href="./index.php"><img src="view/layout/assets/img/logo.png" alt="Cosmetics" /></a>
        </div>
        <nav>
          <ul>
            <li><a href="./index.php?page=products">Tất cả sản phẩm</a></li>
            <!-- Hiển thị catalog ở vị trí này -->
            <?= $showCatalog ?>
            <!-- <li><a href="./index.php?page=makeup">Trang điểm</a></li>
            <li><a href="./index.php?page=skincare">Chăm sóc da</a></li>
            <li><a href="./index.php?page=haircare">Chăm sóc tóc</a></li> -->
            <li><a href="./index.php?page=about">Về chúng tôi</a></li>
            <li><a href="./index.php?page=contact">Liên hệ</a></li>
          </ul>
        </nav>
        <div class="header__user">
          <a href="./index.php?page=account"><span class="icon header__user--icon material-symbols-outlined">
              person
            </span></a>
          <b>0 <u>đ</u></b>
          <div class="header__cart">
            <a href="./index.php?page=cart"><span class="icon header__user--icon material-symbols-outlined">
                local_mall
              </span></a>
            <span class="header__quantity">0</span>
          </div>
        </div>
      </div>
    </div>