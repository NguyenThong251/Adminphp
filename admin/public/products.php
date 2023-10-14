<?php
echo $alert;
$showAllProducts = '<table>
                      <thead>
                        <tr>
                          <th>
                            <span class="material-symbols-outlined"> image </span>
                          </th>
                          <th>Tên</th>
                          <th>Mã</th>
                          <th>Kho</th>
                          <th>Giá</th>
                          <th>Danh mục</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>';
foreach ($allProducts as $product) {
  extract($product);
  if ($img != "") {
    $imgFile = PATH_IMG . $img;
    if (is_file($imgFile)) {
      $img = '<img src="' . $imgFile . '" alt="product" />';
    } else {
      $img = '<img src="' . PATH_IMG . "no-image.jpeg" . '" alt="product" />';
    }
  } else {
    $img = '<img src="' . PATH_IMG . "no-image.jpeg" . '" alt="product" />';
  }

  $linkEdit = "index.php?page=formUpdateProduct&idProduct=$id";
  $linkDelete = "index.php?page=deleteproduct&idProduct=$id";

  $showAllProducts .= '<tr>
                        <td>
                          ' . $img . '
                        </td>
                        <td>' . $name . '</td>
                        <td>#' . $id . '</td>
                        <td>Còn hàng</td>
                        <td>
                          <del>' . number_format($price, 0, ',', '.') . ' <u>đ</u></del>
                          <span>' . number_format($mainprice, 0, ',', '.') . ' <u>đ</u></span>
                        </td>
                        <td>' . $catalogname . '</td>
                        <td>
                          <a class="account__product" href="' . $linkEdit . '">Chỉnh sửa</a>
                          <span>Hoặc</span>
                          <a class="account__product" href="' . $linkDelete . '">Xóa</a>
                        </td>
                      </tr>';
}
$showAllProducts .= '</tbody>
                    </table>';
?>

<head>
  <link rel="stylesheet" href="../view/layout/assets/css/admin_products.css" />
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
      <form class="form__search" action="index.php?page=searchProd" method="post">
        <input type="text" placeholder="Nhập từ khoá" name="keyword" />
        <input type="submit" name="searchBtnProd" value="Tìm kiếm">
      </form>
      <?= $showAllProducts ?>
      <a href="index.php?page=formAddProduct" class="add__category add__point--css">Thêm sản phẩm mới</a>
    </div>
  </div>
</div>