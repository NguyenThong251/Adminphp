<?php
$email = " - <u>Email:</u> " . $email;
if ($tel == "") {
  $tel = " - <u>Số điện thoại:</u> Trống";
} else {
  $tel = ' - ' . $tel;
}
?>

<head>
  <link rel="stylesheet" href="../view/layout/assets/css/admin_dashboard.css" />
</head>
<div id="account">
  <h1>Bảng điều khiển</h1>
  <div class="admin__dashboard--user">
    <div class="admin__dashboard--user--avatar">
      <img src="../view/layout/assets/img/admin/<?= $img ?>" alt="avatar" />
    </div>
    <div class="admin__dashboard--user--info">
      <h3><?= $name ?><?= $email ?><?= $tel ?></h3>
      <p>Admin</p>
    </div>
  </div>
  <div class="account__admin">
    <div class="account__admin--nav">
      <ul>
        <li><a class="is_pink" href="index.php">Bảng điều khiển</a></li>
        <li><a href="index.php?page=category">Danh mục sản phẩm</a></li>
        <li><a href="index.php?page=products">Sản phẩm</a></li>
        <li><a href="index.php?page=order">Đơn hàng</a></li>
        <li><a href="index.php?page=logout">Đăng xuất</a></li>
      </ul>
    </div>
    <div class="account__order--history">
      <div class="admin__dashboard--title">
        <div class="admin__dashboard--content">
          <p>Khách Truy Cập</p>
          <h3>16.204</h3>
        </div>
        <span class="material-symbols-outlined"> visibility </span>
      </div>
      <div class="admin__dashboard--title">
        <div class="admin__dashboard--content">
          <p>Doanh Thu</p>
          <h3>10.056.900 <u>đ</u></h3>
        </div>
        <span class="material-symbols-outlined"> payments </span>
      </div>
      <div class="admin__dashboard--title">
        <div class="admin__dashboard--content">
          <p>Đơn Hàng</p>
          <h3>508</h3>
        </div>
        <span class="material-symbols-outlined"> list_alt </span>
      </div>
      <div class="admin__dashboard--title">
        <div class="admin__dashboard--content">
          <p>Sản Phẩm</p>
          <h3>18</h3>
        </div>
        <span class="material-symbols-outlined"> inventory_2 </span>
      </div>
    </div>
  </div>
  <div class="admin__dashboard--detail">
    <div class="admin__dashboard--show">
      <div class="admin__dashboard--show--title">
        <p>Chi tiết Khách truy cập</p>
      </div>
      <span class="material-symbols-outlined"> expand_more </span>
    </div>
    <div class="admin__dashboard--show">
      <div class="admin__dashboard--show--title">
        <p>Chi tiết Doanh thu</p>
      </div>
      <span class="material-symbols-outlined"> expand_more </span>
    </div>
    <div class="admin__dashboard--show">
      <div class="admin__dashboard--show--title">
        <p>Chi tiết Đơn hàng</p>
      </div>
      <span class="material-symbols-outlined"> expand_more </span>
    </div>
    <div class="admin__dashboard--show">
      <div class="admin__dashboard--show--title">
        <p>Chi tiết Sản phẩm</p>
      </div>
      <span class="material-symbols-outlined"> expand_more </span>
    </div>
  </div>
</div>