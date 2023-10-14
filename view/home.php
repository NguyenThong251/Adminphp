<?php
$showHotProducts = '';
foreach ($hotProducts as $item) {
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
  $showHotProducts .= '<div class="product">
                        
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
$showBestProducts = '';
foreach ($bestProducts as $item) {
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
  $showBestProducts .= '<div class="product">
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
<div id="banner">
  <div class="banner__slogan">
    <h6>Thương hiệu mới nhất thành phố</h6>
    <h1>Bộ sưu tập làm đẹp mới</h1>
    <p>
      Xem bộ sưu tập mới của chúng tôi với thiết kế độc đáo và chất liệu
      tốt. Nâng tầm phong cách với thời trang và phụ kiện đầy ấn tượng.
    </p>
    <a href="#" class="button">Mua ngay</a>
  </div>
</div>
<div id="logo--brand">
  <img src="view/layout/assets/img/logobrand/logo-003.png" alt="logo_brand" />
  <img src="view/layout/assets/img/logobrand/logo-004.png" alt="logo_brand" />
  <img src="view/layout/assets/img/logobrand/logo-005.png" alt="logo_brand" />
  <img src="view/layout/assets/img/logobrand/logo-006.png" alt="logo_brand" />
  <img src="view/layout/assets/img/logobrand/logo-007.png" alt="logo_brand" />
  <img src="view/layout/assets/img/logobrand/logo-008.png" alt="logo_brand" />
</div>
<div id="trending--products">
  <div class="trending--products__description">
    <h6>Sản phẩm phổ biến</h6>
    <h2>Đang hot</h2>
  </div>
  <div class="product__container">

    <?= $showHotProducts ?>
  </div>
</div>
<div id="trending--shop">
  <div class="trending--shop__description">
    <h6>Cửa hàng</h6>
    <h2>Bán chạy nhất</h2>
  </div>
  <div class="product__container">

    <?= $showBestProducts ?>
  </div>
</div>
<div id="collections">
  <div class="collections__slogan">
    <h6>Thương hiệu mới nhất thành phố</h6>
    <h1>Bộ sưu tập làm đẹp mới</h1>
    <p>
      Xem bộ sưu tập mới của chúng tôi với thiết kế độc đáo và chất liệu
      tốt. Nâng tầm phong cách với thời trang và phụ kiện đầy ấn tượng.
    </p>
    <a href="#" class="button">Mua ngay</a>
  </div>
</div>
<div id="gifts">
  <div class="gifts__item">
    <img src="view/layout/assets/img/gift/gift1.jpeg" alt="gift" />
    <div class="gifts__description">
      <h6>Bộ sưu tập mới</h6>
      <h2>Bộ kit quà tặng trang điểm tuyệt vời</h2>
      <p>Hãy tìm kiếm phong cách riêng của bạn.</p>
      <a href="./shop.html" class="button">Mua ngay</a>
    </div>
  </div>
  <div class="gifts__item">
    <img src="view/layout/assets/img/gift/gift2.jpeg" alt="gift" />
    <div class="gifts__description">
      <h6>Bộ sưu tập mới</h6>
      <h2>Chế độ chăm sóc da hoàn hảo</h2>
      <p>Hãy tìm kiếm phong cách riêng của bạn.</p>
      <a href="./shop.html" class="button">Mua ngay</a>
    </div>
  </div>
</div>
<div id="services">
  <div class="service__item">
    <h6>Tại sao lựa chọn chúng tôi?</h6>
  </div>
  <div class="services__item">
    <span class="services__item--icon">
      <svg aria-hidden="true" class="e-font-icon-svg e-fas-shipping-fast" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
      </svg>
    </span>
    <div class="services__item--description">
      <h4>Giao hàng nhanh</h4>
      <p>
        Giao hàng nhanh, chất lượng, giá cả phải chăng. Sản phẩm đến tay
        bạn trong vài ngày.
      </p>
    </div>
  </div>
  <div class="services__item">
    <span class="services__item--icon">
      <svg aria-hidden="true" class="e-font-icon-svg e-fas-dolly" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M294.2 277.7c18 5 34.7 13.4 49.5 24.7l161.5-53.8c8.4-2.8 12.9-11.9 10.1-20.2L454.9 47.2c-2.8-8.4-11.9-12.9-20.2-10.1l-61.1 20.4 33.1 99.4L346 177l-33.1-99.4-61.6 20.5c-8.4 2.8-12.9 11.9-10.1 20.2l53 159.4zm281 48.7L565 296c-2.8-8.4-11.9-12.9-20.2-10.1l-213.5 71.2c-17.2-22-43.6-36.4-73.5-37L158.4 21.9C154 8.8 141.8 0 128 0H16C7.2 0 0 7.2 0 16v32c0 8.8 7.2 16 16 16h88.9l92.2 276.7c-26.1 20.4-41.7 53.6-36 90.5 6.1 39.4 37.9 72.3 77.3 79.2 60.2 10.7 112.3-34.8 113.4-92.6l213.3-71.2c8.3-2.8 12.9-11.8 10.1-20.2zM256 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"></path>
      </svg>
    </span>
    <div class="services__item--description">
      <h4>Miễn phí vận chuyển</h4>
      <p>
        Vận chuyển miễn phí cho mọi đơn hàng. Bạn sẽ tiết kiệm chi phí và
        thời gian.
      </p>
    </div>
  </div>
  <div class="services__item">
    <span class="services__item--icon">
      <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-left" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
      </svg>
    </span>
    <div class="services__item--description">
      <h4>Hoàn trả dễ dàng</h4>
      <p>
        Liên hệ chúng tôi trong 30 ngày, gửi lại sản phẩm nguyên vẹn.
        Chúng tôi sẽ hoàn tiền hoặc đổi hàng linh hoạt.
      </p>
    </div>
  </div>
</div>