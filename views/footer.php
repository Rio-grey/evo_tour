<footer>
  <div class="subscribe-areas">
    <div class="container">
      <div class="subscribe-area">
        <div class="subscribe-area1">
          <ul class="social">
            <li class="fb">
              <a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li class="tw">
              <a href="twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li class="yt">
              <a href="youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li class="ins">
              <a href="instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="subscribe-area2">
          <h2>ĐĂNG KÝ NHẬN TIN</h2>
          <p>Các deal du lịch giảm giá đến 60% sẽ được gửi đến bạn</p>
        </div>
        <div class="subscribe-area3">
          <form action="" class="subscribe-form" method="post">
            <div class="subscribe-email">
              <input type="text" required placeholder="Địa chỉ Email" />
              <button type="submit">Đăng ký</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="main-footer">
    <div class="container">
      <div class="footer-main">
        <div class="footer-left">
          <a href="?ctr=home" class="footer-logo">
            <img src="./layout/images/fot_logo.png" alt="" />
          </a>
          <ul class="footer-contact-info">
            <li>
              <span>Địa chỉ:</span>
              <?php foreach ($all_setting as $setting) : ?>
                <?= $setting['dia_chi'] ?>
              <?php endforeach ?>
            </li>
            <li>
              <span>Email:</span>
              <?php foreach ($all_setting as $setting) : ?>
                <a href="mailto:lequy11082003@gmail.com">
                  <?= $setting['email'] ?>
                </a>
              <?php endforeach ?>
            </li>
            <li>
              <span>Điện thoại:</span>
              <?php foreach ($all_setting as $setting) : ?>
                <a href="tel:0867717002"><?= $setting['sdt'] ?></a>
              <?php endforeach ?>
            </li>
            <li>
              <span>Zalo:</span>
              <?php foreach ($all_setting as $setting) : ?>
                <a href="https://chat.zalo.me/"><?= $setting['zalo'] ?></a>
              <?php endforeach ?>
            </li>
            <li>
              <?php foreach ($all_setting as $setting) : ?>
                <?= $setting['copyright'] ?>
              <?php endforeach ?>
            </li>
          </ul>
          <div class="footer-payment">
            <img src="./layout/images/payment_1.svg" alt="" />
            <img src="./layout/images/payment_2.svg" alt="" />
            <img src="./layout/images/payment_4.svg" alt="" />
            <img src="./layout/images/payment_5.svg" alt="" />
          </div>
        </div>
        <div class="footer-right">
          <div class="footer-right-item">
            <h3>Evo Tour</h3>
            <ul class="footer-quick-links">
              <li><a href="?ctr=home">Trang chủ</a></li>
              <li><a href="?ctr=about">Giới thiệu</a></li>
              <li><a href="?ctr=tourDL">Tour du lịch</a></li>
              <li><a href="?ctr=tourKM">Tour khuyến mãi</a></li>
              <li><a href="?ctr=news">Tin tức</a></li>
              <li><a href="?ctr=news">Kinh nghiệm du lịch</a></li>
              <li><a href="?ctr=faq">FAQ</a></li>
              <li><a href="?ctr=contact">Liên hệ</a></li>
            </ul>
          </div>
          <div class="footer-right-item">
            <h3>Tour Miền Bắc</h3>
            <ul class="footer-quick-links">
              <?php
              $mb = show_tour_mb();
              foreach ($mb as $b) {
                extract($b);
                if ($id_loai_tour == 1) {
                  echo '
                      <li ><a href="?ctr=mienbac&mb=' . $tour_cu_the . '&id_loai_tour=' . $id_loai_tour . '">' . $tour_cu_the . '</a></li>
                      ';
                }
              }
              ?>
            </ul>
          </div>
          <div class="footer-right-item">
            <h3>Tour Miền Nam</h3>
            <ul class="footer-quick-links">
              <?php
              $mb = show_tour_mb();
              foreach ($mb as $b) {
                extract($b);
                if ($id_loai_tour == 2) {

                  echo '
                    <li ><a href="?ctr=miennam&mb=' . $tour_cu_the . '&id_loai_tour=' . $id_loai_tour . '">' . $tour_cu_the . '</a></li>
                    ';
                }
              }
              ?>
            </ul>
          </div>
          <div class="footer-right-item">
            <h3>Tour Miền Trung</h3>
            <ul class="footer-quick-links">
              <?php
              $mb = show_tour_mb();
              foreach ($mb as $b) {
                extract($b);
                if ($id_loai_tour == 3) {
                  echo '
                    <li ><a href="?ctr=mientrung&mb=' . $tour_cu_the . '&id_loai_tour=' . $id_loai_tour . ' ">' . $tour_cu_the . '</a></li>
                    ';
                }
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--=============== SCROLL UP ===============-->
<a href="#" class="scrollup" id="scroll-up">
  <i class="fa-solid fa-arrow-up scrollup__icon"></i>
</a>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--=============== SCROLL REVEAL ===============-->
<script src="./layout/js/scrollreveal.min.js"></script>
<script src="./layout/js/app.js"></script>
<script src="./layout/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("#banner-date", {
    dateFormat: "d-m-Y",
  });
</script>
</body>

</html>