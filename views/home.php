<?php include_once "header.php" ?>
<section class="banners">
  <!-- Slideshow container -->
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <?php foreach($all_slide as $slide) : ?>
      <div class="mySlides fade">
        <img src="./layout/images/<?= $slide['image'] ?>" style="width: 100%" />
      </div>
    <?php endforeach ?>  
    <!-- <div class="mySlides fade">
      <img src="./layout/images/patrick-adcock-QG2ndAiyQ38-unsplash.jpg" style="width: 100%" />
    </div>
    <div class="mySlides fade">
      <img src="./layout/images/ashutosh-saraswat-CXyz3qljaH8-unsplash.jpg  " style="width: 100%" />
    </div> -->
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <div class="container">
    <div class="banner">
      <!-- <img src="./images/patrick-adcock-QG2ndAiyQ38-unsplash.jpg" alt="" /> -->
      <!-- <a href="?ctr=home_admin">Home Admin</a> -->
      <h1 class="banner-heading">Đặt Tour du lịch!</h1>
      <h3 class="banner-desc">
        Hơn 300 tours du lịch ở Việt Nam và Quốc tế
      </h3>
      <form action="?ctr=thanhpho" class="banner-form" method="post">
        <div class="banner-place">
          <img src="./layout/images/place-localizer.svg" alt="" />
          <input type="text" name="kyw" placeholder="Bạn muốn đi đâu?" />
        </div>
        <div class="banner-bottom">
          <div class="banner-date">
            <img src="./layout/images/date.svg" alt="" />
            <div class="banner-date-content">
              <p>Ngày khởi hành</p>
              <input type="date" name="kywngay" id="banner-date" placeholder="Chọn Ngày khởi hành" />
            </div>
          </div>
          <div class="banner-plane">
            <img src="./layout/images/paper-plane.svg" alt="" />
            <div class="banner-plane-content">
              <p>Khởi hành từ</p>
              <select name="list" id="" class="">
                <option value="0">Tất cả</option>
                <?php foreach ($list as $item) : ?>
                  <option value="<?= $item['khoi_hanh_tu'] ?>"><?= $item['khoi_hanh_tu'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <button type="submit" class="banner-btn" name="btn">TÌM</button>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="policys">
  <div class="container">
    <div class="policy">
      <div class="policy-item">
        <a href="#">
          <div class="policy-icon">
            <img src="./layout/images/feature_search_image_1.png" alt="" />
          </div>
          <div class="policy-content">
            <h3 class="policy-caption">Đảm bảo giá tốt nhất</h3>
            <p class="policy-desc">
              Chúng tôi đảm bảo khách hàng sẽ đặt được dịch vụ với giá tốt
              nhất, những chương trình khuyến mãi hấp dẫn nhất
            </p>
          </div>
        </a>
      </div>
      <div class="policy-item">
        <a href="#">
          <div class="policy-icon">
            <img src="./layout/images/feature_search_image_2.png" alt="" />
          </div>
          <div class="policy-content">
            <h3 class="policy-caption">
              Dịch vụ tin cậy - Giá trị đích thực
            </h3>
            <p class="policy-desc">
              Đặt lợi ích khách hàng lên trên hết, chúng tôi hỗ trợ khách
              hàng nhanh và chính xác nhất với dịch vụ tin cậy, giá trị đích
              thực.
            </p>
          </div>
        </a>
      </div>
      <div class="policy-item">
        <a href="#">
          <div class="policy-icon">
            <img src="./layout/images/feature_search_image_3.png" alt="" />
          </div>
          <div class="policy-content">
            <h3 class="policy-caption">Đảm bảo chất lượng</h3>
            <p class="policy-desc">
              Chúng tôi liên kết chặt chẽ với các đối tác, khảo sát định kỳ
              để đảm bảo chất lượng tốt nhất của dịch vụ
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="tour-last-hour">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="?ctr=show_tour_cheap"><span>TOUR GIỜ CHÓT</span> GIÁ TỐT</a>
    </h2>
    <p class="tour-last-desc">
      Cùng Evo Tour điểm qua một vài địa điểm du lịch trong nước thu hút du
      khách nhất nhé!
    </p>
    <div class="tour-last">
      <?php foreach ($tour_cheap as $tour) : ?>
        <div class="tour-last-item">
          <div class="tour-last-img">
            <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
              <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
            </a>
          </div>
          <div class="tour-last-info">
            <h3 class="info-tour-title">
              <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
            </h3>
            <div class="info-bottom">
              <div class="vote-box">
                <div class="meta-vote">
                  <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                </div>
                <div class="sale-off"><?= number_format($tour['price']) ?>₫</div>
              </div>
              <div class="date-go">
                <ul>
                  <li>
                    <img src="./layout/images/tag_icon_4.svg" alt="" />
                    <div>
                      <span class="date">Lịch khởi hành:</span>
                      <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                    </div>
                  </li>
                  <li>
                    <img src="./layout/images/tag_icon_5.svg" alt="" />
                    <div>
                      <span class="date">Thời gian:</span>
                      <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="action-box">
                <h2 class="price-box"><?= number_format($tour['price'] - $tour['sale_price']) ?>₫</h2>
                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
</section>
<section class="banners-2">
  <div class="container">
    <div class="banner-2">
      <a href="#" class="banner-2-img">
        <img src="./layout/images/feature_menu_1.png" alt="" />
      </a>
      <a href="#" class="banner-2-img">
        <img src="./layout/images/feature_menu_2.png" alt="" />
      </a>
    </div>
  </div>
</section>
<section class="tour-inbound">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="?ctr=tourDL_3mien&mien=1">TOUR MIỀN BẮC</a>
    </h2>
    <p class="tour-last-desc">
      Tour du lịch miền Bắc tại Evo Tour. Hành hương đầu xuân - Tận hưởng
      bản sắc Việt.
    </p>
    <div class="tour-last">
      <?php foreach ($all_tour as $tour)
        if ($tour['id_loai_tour'] == 1) : ?>
        <div class="tour-last-item">
          <div class="tour-last-img">
            <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
              <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
            </a>
          </div>
          <div class="tour-last-info">
            <h3 class="info-tour-title">
              <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
            </h3>
            <div class="info-bottom">
              <div class="vote-box">
                <div class="meta-vote">
                  <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                </div>
                <div class="sale-off"><?= number_format($tour['price']) ?>đ</div>
              </div>
              <div class="date-go">
                <ul>
                  <li>
                    <img src="./layout/images/tag_icon_4.svg" alt="" />
                    <div>
                      <span class="date">Lịch khởi hành:</span>
                      <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                    </div>
                  </li>
                  <li>
                    <img src="./layout/images/tag_icon_5.svg" alt="" />
                    <div>
                      <span class="date">Thời gian:</span>
                      <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="action-box">
                <h2 class="price-box"><?= number_format($tour['price'] - $tour['sale_price']) ?>₫</h2>
                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>
    <div class="tour-more">
      <a href="?ctr=tourDL_3mien&mien=1">Xem tất cả tour</a>
    </div>
  </div>
</section>
<section class="tour-inbound">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="?ctr=tourDL_3mien&mien=3">TOUR MIỀN TRUNG</a>
    </h2>
    <p class="tour-last-desc">
      Tour du lịch miền Trung tại Evo Tour. Hành hương đầu xuân - Tận hưởng
      bản sắc Việt.
    </p>
    <div class="tour-last">
      <?php foreach ($all_tour as $tour)
        if ($tour['id_loai_tour'] == 3) : ?>
        <div class="tour-last-item">
          <div class="tour-last-img">
            <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
              <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
            </a>
          </div>
          <div class="tour-last-info">
            <h3 class="info-tour-title">
              <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
            </h3>
            <div class="info-bottom">
              <div class="vote-box">
                <div class="meta-vote">
                  <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                </div>
                <div class="sale-off"><?= number_format($tour['price']) ?>đ</div>
              </div>
              <div class="date-go">
                <ul>
                  <li>
                    <img src="./layout/images/tag_icon_4.svg" alt="" />
                    <div>
                      <span class="date">Lịch khởi hành:</span>
                      <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                    </div>
                  </li>
                  <li>
                    <img src="./layout/images/tag_icon_5.svg" alt="" />
                    <div>
                      <span class="date">Thời gian:</span>
                      <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="action-box">
                <h2 class="price-box"><?= number_format($tour['price'] - $tour['sale_price']) ?>₫</h2>
                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>
    <div class="tour-more">
      <a href="?ctr=tourDL_3mien&mien=3">Xem tất cả tour</a>
    </div>
  </div>
</section>
<section class="tour-inbound">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="?ctr=tourDL_3mien&mien=2">TOUR MIỀN NAM</a>
    </h2>
    <p class="tour-last-desc">
      Tour du lịch miền Nam tại Evo Tour. Hành hương đầu xuân - Tận hưởng
      bản sắc Việt.
    </p>
    <div class="tour-last">
      <?php foreach ($all_tour as $tour)
        if ($tour['id_loai_tour'] == 2) : ?>
        <div class="tour-last-item">
          <div class="tour-last-img">
            <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>">
              <img src="./layout/images/products/<?= $tour['image'] ?>" alt="" />
            </a>
          </div>
          <div class="tour-last-info">
            <h3 class="info-tour-title">
              <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>"><?= $tour['name_tour'] ?></a>
            </h3>
            <div class="info-bottom">
              <div class="vote-box">
                <div class="meta-vote">
                  <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
                </div>
                <div class="sale-off"><?= number_format($tour['price']) ?>đ</div>
              </div>
              <div class="date-go">
                <ul>
                  <li>
                    <img src="./layout/images/tag_icon_4.svg" alt="" />
                    <div>
                      <span class="date">Lịch khởi hành:</span>
                      <span class="date-go-color"><?= $tour['lich_khoi_hanh'] ?></span>
                    </div>
                  </li>
                  <li>
                    <img src="./layout/images/tag_icon_5.svg" alt="" />
                    <div>
                      <span class="date">Thời gian:</span>
                      <span class="date-go-color"><?= $tour['thoi_gian'] ?></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="action-box">
                <h2 class="price-box"><?= number_format($tour['price'] - $tour['sale_price']) ?>₫</h2>
                <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>
    <div class="tour-more">
      <a href="?ctr=tourDL_3mien&mien=2">Xem tất cả tour</a>
    </div>
  </div>
</section>
<section class="tour-heart">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="#">ĐIỂM ĐẾN YÊU THÍCH</a>
    </h2>
    <p class="tour-last-desc">
      Các điểm đến du lịch trong nước được nhiều người lựa chọn nhất
    </p>
    <div class="tour-destination">
      <div class="tour-destination-top">
        <?php foreach ($luotxem as $tang) : ?>
          <div class="tour-destination-top-item">
            <a href="?ctr=tour_detail&id_tour=<?= $tang['id_tour'] ?>" name="btnn">
              <div class="destination-image">
                <img src="./layout/images/products/<?= $tang['image'] ?>" alt="" />
              </div>
              <div class="destination-content">
                <h2 class="destination-name"><?= $tang['name_tour'] ?></h2>
                <p class="destination-like">
                  Đã có <span><?= $tang['luot_khach'] ?></span> lượt khách
                </p>
              </div>
            </a>
          </div>
        <?php endforeach ?>

      </div>
      <div class="tour-destination-bottom">
        <?php foreach ($show_rand as $item) : ?>
          <div class="tour-destination-bottom-item">
            <a href="?ctr=alltour&name_tour=<?= $item['tour_cu_the'] ?>">
              <div class="destination-image2">
                <img src="./layout/images/products/<?= $item['image'] ?>" alt="" />
              </div>
              <div class="destination-content2">
                <h2 class="destination-name2">
                  <?= $item['tour_cu_the'] ?>
                </h2>
                <p class="destination-like2">
                  Khám phá ngay
                  <ion-icon name="chevron-forward-circle"></ion-icon>
                </p>
              </div>
            </a>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>
</section>

<section class="tour-blogs">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="#">CẢM HỨNG DU LỊCH</a>
    </h2>
    <p class="tour-last-desc">
      Thông tin về du lịch, văn hóa, ẩm thực, các sự kiện và lễ hội tại các
      điểm đến Việt nam, Đông Nam Á và Thế Giới
    </p>
    <div class="tour-blog">
      <?php foreach ($news_like as $news) : ?>
        <div class="tour-blog-item">
          <a href="?ctr=news_detail&id_news=<?= $news['id_news'] ?>">
            <div class="blog-image">
              <img src="./layout/images/products/<?= $news['image'] ?>" alt="" />
            </div>
            <div class="blog-content">
              <h2 class="blog-title">
                <?= $news['title_news'] ?>
              </h2>
              <!-- <p class="blog-desc">
                <?= $news['desc_news'] ?>
              </p> -->
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
    <div class="tour-more">
      <a href="?ctr=news">Xem tất cả tin tức</a>
    </div>
  </div>
</section>
<?php include_once "footer.php" ?>