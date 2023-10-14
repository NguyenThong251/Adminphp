<?php
session_start();
include_once("../model/connect.php");
include_once("../model/user.php");

if (isset($_POST['btnSubmit'])) {
  $user_admin = $_POST['account'];
  $pass_admin = $_POST['password'];

  $admin = checkUser($user_admin, $pass_admin);
  if (is_array($admin)) {
    $_SESSION['user'] = $admin;
    if ($admin['role'] == 1) {
      header("location: index.php");
    }
  } else {
    echo "<script>alert('Đăng nhập thất bại, tài khoản không tồn tại!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../view/layout/assets/css/style.css" />
  <link rel="stylesheet" href="../view/layout/assets/css/shop.css" />
  <link rel="stylesheet" href="../view/layout/assets/css/account.css" />
  <link rel="stylesheet" href="../view/layout/assets/css/admin_category.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div class="header__container">
        <div class="header__logo">
          <a href="./index.html"><img src="../view/layout/assets/img/logo.png" alt="Cosmetics" /></a>
        </div>
        <nav>
          <ul>
            <!-- <li><a href="./shop.html">Tất cả sản phẩm</a></li>
            <li><a href="./makeup.html">Trang điểm</a></li>
            <li><a href="./skincare.html">Chăm sóc da</a></li>
            <li><a href="./haircare.html">Chăm sóc tóc</a></li>
            <li><a href="#">Về chúng tôi</a></li>
            <li><a href="#">Liên hệ</a></li> -->
          </ul>
        </nav>
        <div class="header__user">
          <!-- <a href="./admin.html"><span class="icon header__user--icon material-symbols-outlined">
              person
            </span></a>
          <b>0 <u>đ</u></b> -->
          <div class="header__cart">
            <!-- <a href="./cart.html"><span class="icon header__user--icon material-symbols-outlined">
                local_mall
              </span></a>
            <span class="header__quantity">0</span> -->
          </div>
        </div>
      </div>
    </div>
    <div id="account">
      <h1>Đăng nhập</h1>
      <form class="account__form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="username">Số điện thoại hoặc Email <span>*</span></label>
        <input name="account" type="text" placeholder="Nhập số điện thoại hoặc địa chỉ Email của bạn..." required />
        <label for="password">Mật khẩu <span>*</span></label>
        <input name="password" type="password" placeholder="Nhập mật khẩu của bạn..." required />
        <div class="login__save--pass">
          <!-- <input type="checkbox" name="save_pass" id="save_pass" />
          <label for="save_pass">Ghi nhớ mật khẩu</label> -->
        </div>
        <!-- <input name="btnSubmit" type="submit" value="Đăng nhập" /> -->
        <button name="btnSubmit" type="submit">Đăng nhập</button>
        <!-- <p class="login__forget">
          <a href="#">Quên mật khẩu?</a>
          <a href="register.html">Đăng kí tài khoản</a>
        </p> -->
      </form>
    </div>
    <!-- <div id="newsletter" class="newsletter__container">
      <h3>Đăng kí nhận bản tin của chúng tôi</h3>
      <form action="">
        <input type="email" placeholder="Nhập địa chỉ Email của bạn..." />
        <input type="submit" value="Đăng kí" />
      </form>
    </div> -->
    <div id="footer">
      <div class="footer__logo">
        <a href="./index.html"><img src="../view/layout/assets/img/logo.png" alt="logo" /></a>
      </div>
      <div class="empty"></div>
      <div class="empty"></div>
      <div class="footer__nav">
        <ul>
          <!-- <li><a href="./shop.html">Tất cả sản phẩm</a></li>
          <li><a href="./makeup.html">Trang điểm</a></li>
          <li><a href="./skincare.html">Chăm sóc da</a></li>
          <li><a href="./haircare.html">Chăm sóc tóc</a></li>
          <li><a href="#">Về chúng tôi</a></li>
          <li><a href="#">Liên hệ</a></li> -->
        </ul>
      </div>
      <div class="footer__nav">
        <ul>
          <!-- <li><a href="#">Chính sách hoàn tiền</a></li>
          <li><a href="#">Điều khoản và điều kiện</a></li>
          <li><a href="#">Câu hỏi thường gặp</a></li>
          <li><a href="#">Chính sách bảo mật</a></li> -->
        </ul>
      </div>
      <div class="footer__social">
        <!-- <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-twitter"></i></a> -->
      </div>
    </div>
    <div id="copyright">
      <p>Copyright © 2023 Cosmetics | Powered by Cosmetics</p>
    </div>
  </div>
</body>

</html>