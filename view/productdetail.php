<?php
extract($product);
?>

<head>
  <link rel="stylesheet" href="view/layout/assets/css/cart.css" />
  <link rel="stylesheet" href="view/layout/assets/css/product_detail.css" />
</head>
<div id="product__detail">
  <div class="product__detail--container">
    <div class="product__detail--img">
      <img src="view/layout/assets/img/product/<?= $img ?>" alt="product_img" />
      <div class="product__detail--list">
        <!-- <img src="view/layout/assets/img/product-detail/1.webp" alt="product_img" />
        <img src="view/layout/assets/img/product-detail/2.webp" alt="product_img" />
        <img src="view/layout/assets/img/product-detail/3.webp" alt="product_img" />
        <img src="view/layout/assets/img/product-detail/4.webp" alt="product_img" /> -->
      </div>
    </div>
    <div class="product__detail--info">
      <div class="product__detail--sitemap">
        <a href="index.php">Trang chủ</a>
        <span>/</span>
        <a href="">Chăm sóc da</a>
        <span>/</span>
        <a href="">
          <?= $name ?>
        </a>
      </div>
      <h1>
        <?= $name ?>
      </h1>
      <del><?= number_format($price, 0, ',', '.') ?><u>đ</u></del>
      <b><?= number_format($mainprice, 0, ',', '.') ?><u>đ</u></b>
      <span>& Miễn phí vận chuyển</span>
      <div class="product__detail--brand">
        <h4>Xuất xứ thương hiệu:</h4>
        <span>Việt Nam</span>
      </div>
      <div class="product__detail--ingredient">
        <h4>Thành phần:</h4>
        <p>
          Lactic Acid, Melaleuca Alternifolia Essential oil,
          Cetylpyridinium chloride, Sodium lactate, Trisodium
          Ethylenediamine Disuccinate, Glycerin, Glycereth-26,
          Propanediol, o-Cymen-5-ol, Centella Asiatica Extract, Benincasa
          cerfera extract (bí đao), Betaine, Polyglyceryl-4 Caprylate,
          Polyglyceryl-4 Laurate, Aqua
        </p>
      </div>
      <div class="product__detail--desc--short">
        <h4>Mô tả ngắn:</h4>
        <p>
          Làn da dầu và mụn rất nhạy cảm nên cần được thiết kế một loại
          nước tẩy trang phù hợp. Với công nghệ Micellar, nước tẩy trang
          bí đao Cocoon 500ml giúp làm sạch hiệu quả lớp trang điểm, bụi
          bẩn và dầu thừa, mang lại làn da sạch hoàn toàn và dịu nhẹ.
        </p>
      </div>
      <div class="product__detail--buy">
        <div class="cart__quantity">
          <a href="">
            <span class="material-symbols-outlined"> remove </span>
          </a>
          <input type="text" value="1" min="1" max="10" />
          <a href="">
            <span class="material-symbols-outlined"> add </span>
          </a>
        </div>
        <div class="product__detail--btn">
          <!-- <a href="">Thêm vào giỏ hàng</a> -->
          <form action="index.php?page=addToCart" method="post">
            <input type="hidden" name="img" value="<?= $img ?>">
            <input type="hidden" name="name" value="<?= $name ?>">
            <input type="hidden" name="mainprice" value="<?= $mainprice ?>">
            <input type="submit" name="btnAddToCart" value="Thêm vào giỏ hàng">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="product__detail--desc--long">
    <div class="product__desc--title">
      <ul>
        <li>Mô tả</li>
        <li>Đánh giá (0)</li>
      </ul>
    </div>
    <div class="product__desc--paragraph">
      <h3>Làm sạch da và loại bỏ lớp trang điểm nhẹ nhàng, hiệu quả</h3>
      <p>
        Nước tẩy trang bí đao Cocoon giúp tẩy sạch nhẹ nhàng và nhanh
        chóng bã nhờn, bụi bẩn, cặn trang điểm,… Qua đó, da mặt sẽ dễ dàng
        hấp thụ tốt các dưỡng chất ở các bước chăm sóc kế tiếp. Thành phần
        hoạt chất chính của sản phẩm bao gồm chiết xuất bí đao, chiết xuất
        rau má, tinh dầu tràm trà, chiết xuất củ cải đường,… Các thành
        phần này đều lành tính và dịu nhẹ. Bởi thế, người dùng sở hữu da
        dầu, da mụn hoặc da nhạy cảm, dễ bị kích ứng vẫn có thể yên tâm sử
        dụng.
      </p>
      <h3>Hiệu quả sử dụng nước tẩy trang bí đao Cocoon</h3>
      <p>
        Nước tẩy trang bí đao Cocoon có ưu điểm là khả năng loại bỏ hiệu
        quả lớp trang điểm, bụi bẩn, bã nhờn dư thừa tích tụ tận sâu bên
        trong lỗ chân lông. Bạn chỉ cần thấm dung dịch vào bông tẩy trang
        và lau nhẹ nhàng da mặt, làn da sẽ được làm sạch nhanh chóng mà
        không cần dùng quá nhiều lực gây tổn thương cho da. Sau khi tẩy
        trang, da mặt của bạn cũng không bị khô rát hoặc căng tức như các
        sản phẩm tẩy trang hóa chất khác.
      </p>
      <b>Độ an toàn</b>
      <ul>
        <li>Không cồn.</li>
        <li>Không sulfate.</li>
        <li>Không paraben.</li>
        <li>Không dầu khoáng.</li>
        <li>Không thử nghiệm trên động vật.</li>
      </ul>
      <h3>Ưu điểm nổi bật</h3>
      <p>
        Nước tẩy trang bí đao Cocoon 500ml mang đến các lợi ích cho làn da
        như sau:
      </p>
      <ul>
        <li>
          Ứng dụng công nghệ Micellar giúp làm sạch sâu bụi bẩn, bã nhờn
          dư thừa, cặn trang điểm,… trên làn da nhẹ nhàng, không gây bất
          kỳ tổn thương nào cho da.
        </li>
        <li>
          Thành phần chính chứa nhiều chiết xuất từ thiên nhiên, không chỉ
          giúp kháng viêm, chống khuẩn, mà còn hỗ trợ kiểm soát lượng bã
          nhờn tiết ra trên bề mặt da, trị mụn và ngăn ngừa mụn quay lại.
        </li>
        <li>
          Cung cấp độ ẩm, củng cố lớp màng mỏng tự nhiên bảo vệ da tránh
          khỏi các tác động từ bên ngoài.
        </li>
        <li>Sản phẩm có kết cấu dạng lỏng, mùi hương dễ chịu.</li>
        <li>Không hóa chất, Paraben, dầu khoáng, chất tẩy rửa.</li>
      </ul>
      <h3>Thành phần hoạt chất</h3>
      <p>
        <i>Chiết xuất bí đao:</i> Bí đao có tính hàn, giải nhiệt tốt,
        kháng viêm và chống khuẩn hiệu quả, giảm mụn trứng cá và mụn viêm
        trên bề mặt da.
      </p>
      <p>
        <i>Chiết xuất rau má:</i> Chứa nhiều vitamin và khoáng chất, trong
        đó nổi bật nhất chính là Madecassoside. Hoạt chất này có công dụng
        làm dịu vùng da bị kích ứng, dị ứng, tổn thương do mụn gây ra.
      </p>
      <p>
        <i>Tinh dầu tràm trà:</i> Sát khuẩn tốt, hỗ trợ gom còi mụn, trị
        mụn và ngăn ngừa mụn tái phát.
      </p>
      <p>
        <i>O-Cymen-5-Ol, Cetylpyridinium Chloride:</i> Tăng khả năng ngăn
        chặn các vi khuẩn có hại cho da, đồng thời giúp lỗ chân lông thông
        thoáng, tránh bị bít tắc.
      </p>
      <p>
        <i>Betaine:</i> Chứa nhiều trong củ cải đường, có công dụng chống
        oxy hóa, hạn chế tác động xấu do tia UV gây ra, tăng cường độ ẩm
        giúp da không bị khô rát, căng tức.
      </p>
      <h3>Công dụng của Nước tẩy trang Bí Đao Cocoon</h3>
      <p>
        Nước tẩy trang bí đao Cocoon 500ml giúp dễ dàng làm sạch sâu lớp
        trang điểm, bụi bẩn và bã nhờn trên bề mặt da và sâu trong lỗ chân
        lông.
      </p>
      <p>
        Kiểm soát dầu thừa, kháng khuẩn – kháng viêm, làm dịu mát da, hỗ
        trợ trong việc chăm sóc da mụn.
      </p>
      <p>
        Dưỡng ẩm da và bảo vệ da khỏi căng thẳng từ môi trường bên ngoài
        như bức xạ UV, ô nhiễm môi trường với Betaine chiết xuất từ củ cải
        đường.Kết cấu dạng lỏng tươi mát, dịu nhẹ, thông thoáng và không
        làm bí da.
      </p>
      <p></p>
      <h3>Cách dùng Nước tẩy trang Bí Đao Cocoon</h3>
      <b>Cách dùng</b>
      <p>
        Thấm đều sản phẩm lên bông tẩy trang, nhẹ nhàng lau khắp mặt để
        làm sạch lớp trang điểm và bụi bẩn. Dịu nhẹ cho vùng môi và mắt.
      </p>
      <p>Lượng dùng: Lượng vừa đủ làm ướt 1 mặt bông tẩy trang.</p>
      <p>Lượng dùng: Lượng vừa đủ làm ướt 1 mặt bông tẩy trang.</p>
      <p>Mùi hương: Mùi tinh dầu tràm trà thoang thoảng.</p>
      <b>Loại da phù hợp</b>
      <p>
        Nước tẩy trang bí đao Cocoon 500ml thích hợp sử dụng cho da dầu,
        da mụn, da hỗn hợp thiên dầu.
      </p>
      <h3>Tác dụng phụ</h3>
      <p>Chưa có thông tin về tác dụng phụ của sản phẩm.</p>
      <h3>Lưu ý</h3>
      <p>Tránh tiếp xúc với mắt và để sản phẩm dưới ánh mặt trời.</p>
      <p>Tránh xa tầm tay trẻ em.</p>
      <h3>Bảo quản</h3>
      <p>
        Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng nơi có nhiệt độ
        cao/ẩm ướt.
      </p>
      <i class="product__detail--shorten">Thu gọn...</i>
      <div class="product__detail--more">
        <span class="material-symbols-outlined">
          expand_circle_down
        </span>
      </div>
    </div>
  </div>
  <h2>Sản phẩm tương tự</h2>
  <div class="product__container">
    <?php
    $showAllProducts = '';
    foreach ($relatedProducts as $item) {
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
    <?= $showAllProducts ?>
  </div>
</div>
<script src="view/layout/assets/js/product_detail.js"></script>