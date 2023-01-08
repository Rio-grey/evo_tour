<?php include_once "header.php"; ?>
<link rel="stylesheet" href="./layout/css/style.css" />
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/gio_hang.css" />
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Giỏ hàng</li>
    </ul>
  </div>
</section>
<section class="shopping-cart">
  <div class="container">
    <div class="shopping-cart-emty">
      <h1 class="lbl-shopping-cart">
        Giỏ hàng <span>(<span class="count-cart"><?= count($_SESSION['bill']) ?> tour</span>)</span>
      </h1>
      <?php if ($_SESSION['bill'] == []) : ?>
        <div class="cart-empty">
          <span class="empty-icon"><i class="ico ico-cart"></i></span>
          <div class="btn-cart-empty">
            <a class="btn btn-default" href="?ctr=home" title="Tiếp tục chọn Tour">Tiếp tục chọn Tour</a>
          </div>
        </div>
      <?php endif ?>
    </div>
    <?php
    $tong = 0;
    $i = 0;
    ?>
    <div class="shopping-cart-page">
      <?php foreach ($_SESSION['bill'] as $item) : ?>
        <div class="shopping-cart-item">
          <div class="img-thumnail">
            <a href="tour_detail.html">
              <img src="./layout/images/products/<?= $item[2] ?>" alt="" />
            </a>
          </div>
          <div class="cart-content">
            <div class="box-info-product">
              <p class="name">
                <a href="tour_detail.html" target="_blank">
                  <?= $item[1] ?>
                </a>
              </p>
              <span class="product__description__property">Người Lớn: <?= $item[7] ?> </span>
              <br>
              <span class="product__description__property">Trẻ em: <?= $item[8] ?> </span>
              <p class="date-tour">Ngày đi: <?= $item[9] ?></p>
              <p class="action">
                <a href="?ctr=gio_hang&idtour=<?= $i ?>" class="btn-item-delete remove-item-cart" title="Xóa">Xóa</a>
              </p>
            </div>
            <div class="box-price">
              <p class="price pricechange"><?= number_format(($item[7] * ($item[3]-$item[4])) +  ($item[8] * (($item[3]-$item[4]) / 2))) ?>₫</p>
            </div>
          </div>
        </div>
        <?php $tong_tien = ($item[7] * ($item[3]-$item[4])) +  ($item[8] * (($item[3]-$item[4]) / 2));
        $tong += $tong_tien;
        ?>
      <?php endforeach ?>
      <?php if ($_SESSION['bill'] != []) : ?>
        <div class="cart-submit">
          <div class="btn-checkout">
            <a href="?ctr=home">Tiếp tục mua hàng</a>
          </div>
          <div class="totals-price">
            <div class="total">
              <span class="text-label">Tạm tính: </span>
              <p class="total_price"><?= number_format($tong) ?>₫</p>
            </div>
            <div class="total">
              <span class="text-label">Thành tiền: </span>
              <p class="amount"><?= number_format($tong) ?>₫</p>
            </div>
            <button type="submit" class="btn-blue"><a href="?ctr=bill" style="color: white;">Thanh toán ngay</a></button>
          </div>
        </div>
      <?php endif ?>
    </div>
  </div>
</section>
<?php include_once "footer.php"; ?>