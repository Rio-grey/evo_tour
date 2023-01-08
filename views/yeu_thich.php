<?php include_once "header.php"; ?>
<link rel="stylesheet" href="./layout/css/style.css" />
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/yeu_thich.css" />

<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Tour yêu thích</li>
    </ul>
  </div>
</section>
<section class="heart">
  <div class="container">

    <?php if ($_SESSION['love'] == []) {
      echo '
            <h1 class="heart-tittle">TOUR YÊU THÍCH</h1>
        <div class="heart-emty-warning">
            <h3>Tour nào của chúng tôi bạn mong muốn sở hữu nhất?</h3>
            <p>Hãy thêm vào danh sách Tour yêu thích ngay nhé!</p>
        </div>
            ';
    } ?>
    <br>
    <section class="tour-last-hour">
      <div class="tour-last">
        <?php $i = 0; ?>
        <?php foreach ($_SESSION['love'] as $item) : ?>
          <div class="tour-last-item">
            <div class="tour-last-img">
              <a href="?ctr=tour_detail&id_tour=<?= isset($item[0]) ? $item[0] : "" ?>">
                <img src="./layout/images/products/<?= isset($item[2]) ? $item[2] : "" ?>" alt="" />
              </a>
              <a href="?ctr=yeu_thich_del&idtour=<?= $i ?>">
                <button type="button" class="favorites-btn js-favorites js-remove-wishlist cart-button" title="Bỏ yêu thích">
                  <ion-icon name="heart-outline"></ion-icon>
                </button>
              </a>
            </div>
            <div class="tour-last-info">
              <h3 class="info-tour-title">
                <a href="?ctr=tour_detail&id_tour=<?= isset($item[0]) ? $item[0] : "" ?>"> <?= isset($item[1]) ? $item[1] : "" ?> </a>
              </h3>
              <div class="vote-box">
                <div class="meta-vote">
                  <img src="./layout/images/<?= isset($item[7]) ? $item[7] : "" ?>" alt="" />
                </div>
                <div class="sale-off"> <?= isset($item[3]) ? number_format($item[3]) : "" ?>₫</div>
              </div>
              <div class="date-go">
                <ul>
                  <li>
                    <img src="./layout/images/tag_icon_4.svg" alt="" />
                    <div>
                      <span class="date">Lịch khởi hành:</span>
                      <span class="date-go-color"> <?= isset($item[5]) ? $item[5] : "" ?></span>
                    </div>
                  </li>
                  <li>
                    <img src="./layout/images/tag_icon_5.svg" alt="" />
                    <div>
                      <span class="date">Thời gian:</span>
                      <span class="date-go-color"> <?= isset($item[6]) ? $item[6] : "" ?></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="action-box">
                <h2 class="price-box"> <?= isset($item[3]) ? number_format($item[3] - $item[4]) : ""?></h2>
                <a href="?ctr=tour_detail&id_tour=<?= isset($item[0]) ? $item[0] : "" ?>" class="booking-box">ĐẶT TOUR</a>
              </div>
            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach ?>

      </div>
    </section>
  </div>
</section>
<?php include_once "footer.php"; ?>