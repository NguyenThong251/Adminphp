<?php
echo $alert;
$showCatalog = '<table>
<thead>
<tr>
<th>Tên danh mục</th>
<th>Thao tác</th>
</tr>
</thead>
<tbody>';
foreach ($allCatalog as $catalog) {
  extract($catalog);
  $linkUpdate = "index.php?page=formUpdateCatalog&idCatalog=" . $id;
  $linkDelete = "index.php?page=deletecatalog&idCatalog=" . $id;
  $showCatalog .= '<tr>
  <td>' . $name . '</td>
  <td>
  <a class="account__product" href="' . $linkUpdate . '">Chỉnh sửa</a>
  <span>Hoặc</span>
  <a class="account__product" href="' . $linkDelete . '">Xoá</a>
  </td>
  </tr>';
}
$showCatalog .= '</tbody>
</table>';
?>
<div id="account">
  <h1>Quản lí danh mục</h1>
  <div class="account__admin">
    <div class="account__admin--nav">
      <ul>
        <li><a href="index.php">Bảng điều khiển</a></li>
        <li><a class="is_pink" href="index.php?page=category">Danh mục sản phẩm</a></li>
        <li><a href="index.php?page=products">Sản phẩm</a></li>
        <li><a href="index.php?page=order">Đơn hàng</a></li>
        <li><a href="index.php?page=logout">Đăng xuất</a></li>
      </ul>
    </div>
    <div class="account__order--history">
      <form class="form__search" action="index.php?page=searchCata" method="post">
        <input type="text" placeholder="Nhập từ khoá" name="keyword" />
        <input type="submit" name="searchBtnCata" value="Tìm kiếm">
      </form>
      <?= $showCatalog ?>
      <a href="index.php?page=formAddCatalog" class="add__category">Thêm danh mục mới</a>
    </div>
  </div>
</div>