<head>
  <link rel="stylesheet" href="../view/layout/assets/css/updatecatalog.css" />
</head>
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
      <h3>Thêm danh mục mới</h3>
      <form action="index.php?page=addCatalog" method="post">
        <table>
          <thead>
            <tr>
              <th>Tên danh mục</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name="nameCatalog" id="" /></td>
              <td><input type="submit" value="Thêm" name="addCatalog" /></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>