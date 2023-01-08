<?php include_once "header.php"; ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css">
<link rel="stylesheet" href="./layout/css/tour_detail.css">
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li><?= $tour_detail['name_tour'] ?></li>
    </ul>
  </div>
</section>
<section class="detail-tour">
  <div class="container">
    <div class="detail-tour-main">
      <div class="main-content">
        <div class="slider">
          <a href="#">
            <img src="./layout/images/products/<?= $tour_detail['image'] ?>" alt="" />
          </a>
        </div>
        <div class="tour-schedule" id="tour-schedule">
          <h3 class="tour-schedule-title">CHƯƠNG TRÌNH TOUR</h3>
          <div class="rte">
            <?= $tour_detail['chuong_trinh'] ?>
          </div>
        </div>
        <div class="tour-departure" id="tour-departure">
          <h3 class="tour-schedule-title">CHÍNH SÁCH TOUR</h3>
          <div class="rte">
            <?= $tour_detail['chinh_sach'] ?>
          </div>
        </div>
        <div class="tour-departure" id="tour-departure">
          <h3 class="tour-schedule-title">ĐIỀU KHOẢN VÀ QUY ĐỊNH</h3>
          <div class="rte">
            <div class="alert alert-success"><?= $tour_detail['dieu_khoan'] ?></div>
          </div>
        </div>
        <div class="book-tour-now" id="book-tour-now">
          <h3 class="tour-schedule-title">ĐẶT TOUR</h3>
          <form action="?ctr=bill" method="post" class="book-tour-form">
            <table class="table">
              <thead>
                <tr>
                  <th>Loại khách</th>
                  <th>Số người</th>
                  <th>Đơn giá</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Người lớn</td>
                  <td>
                    <div class="quantity product-quantity">
                      <button type="button" name="btn1" class="minus">
                        <img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/evo-down-arrow.svg?1663906214480" alt="" />
                      </button>
                      <input type="number" step="1" min="1" value="1" title="Số lượng" class="qty" id="nguoilon" name="nguoi" />
                      <button type="button" value="+" name="btn" class="plus">
                        <img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/evo-up-arrow.svg?1663906214480" alt="" />
                      </button>
                    </div>
                  </td>
                  <td><?= number_format($tour_detail['price'] - $tour_detail['sale_price']) ?>₫</td>
                </tr>
                <tr>
                  <td>Trẻ em</td>
                  <td>
                    <div class="quantity product-quantity">
                      <button type="button" class="minus2">
                        <img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/evo-down-arrow.svg?1663906214480" alt="" />
                      </button>
                      <input type="number" step="1" min="0" value="0" title="Số lượng" class="qty2" id="" name="tre_em" />
                      <button type="button" value="+" class="plus2">
                        <img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/evo-up-arrow.svg?1663906214480" alt="" />
                      </button>
                    </div>
                  </td>
                  <td><?= number_format(($tour_detail['price'] - $tour_detail['sale_price']) / 2) ?>₫</td>
                </tr>
                <tr>
                </tr>
              </tbody>
            </table>
            <div class="contact_btn_group">
              <div class="book-tour-date">
                <div class="book-tour-date-img">
                  <img src="./layout/images/tag_icon_5.svg" alt="" />
                </div>
                <input type="text" name="date_go" id="banner-date" placeholder="Chọn Ngày đi" required />
              </div>
              <input type="hidden" value="<?= $tour_detail['id_tour'] ?> " name="id_tour">
              <input type="hidden" value=" <?= $tour_detail['name_tour'] ?>" name="name_tour">
              <input type="hidden" value="<?= $tour_detail['image'] ?>" name="img">
              <input type="hidden" value="<?= $tour_detail['price'] ?>" name="price">
              <input type="hidden" value="<?= $tour_detail['sale_price'] ?>" name="sale_price">
              <input type="hidden" value="<?= $tour_detail['lich_khoi_hanh'] ?>" name="lich_khoi_hanh">
              <input type="hidden" value="<?= $tour_detail['thoi_gian'] ?>" name="thoi_gian">
              <button name="dattour" type="submit"> ĐẶT TOUR</button>
            </div>
          </form>
        </div>
        <!-- bình luận -->
        <div class="tour-term" id="tour-term-regulations">
          <h3 class="tour-schedule-title">Bình Luận</h3>
          <?php if (isset($_SESSION['user'])) { ?>
            <div class="rte">
              <form action="?ctr=binhluan" id="article_comments" method="post" class="has-validation-callback">
                <input type="hidden" name="id_tour" value="<?= $tour_detail['id_tour'] ?>">
                <?php foreach ($show_bl as $item) : ?>
                  <?php if (isset($_GET['id_tour'])) {
                    $id_tour = $_GET['id_tour'];
                  }
                  ?>
                  <?php if ($id_tour == $item['id_tour']) : ?>
                    <div class="article-comment clearfix" id="6510631">
                      <div class="article-comment-user-comment">
                        <img src="./views/admin/assets/img/160x160/<?= $item['image'] ?>" alt=""> 
                        <div class="comment-right">
                          <h4 class="article-comment-name-user"><?= $item['hoten'] ?></h4>
                          <span class="article-comment-date-bull"><?= $item['ngay_bl'] ?></span>
                          <h4 class="article-comment-detail"><?= $item['noi_dung'] ?></h4>
                        </div>
                      </div>
                    </div>
                  <?php endif ?>
                <?php endforeach ?>
                <div class="form-coment margin-bottom-10 margin-top-20">
                  <h5 class="title-form-coment">VIẾT BÌNH LUẬN CỦA BẠN</h5>
                  <div class="textarea-comment">
                    <label>Nội dung<span> *</span></label>
                    <textarea aria-label="Nội dung" placeholder="Nội dung" class="" name="noidung" rows="6"></textarea>
                    <!-- <span class="help-block form-error">Không được để trống</span> -->
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-blues"name="binh_luan">Gửi bình luận</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          <?php } else { ?>
            <div class="rte">
              <?php foreach ($show_bl as $item) : ?>
                <?php if (isset($_GET['id_tour'])) {
                  $id_tour = $_GET['id_tour'];
                }
                ?>
                <?php if ($id_tour == $item['id_tour']) : ?>
                  <div class="article-comment clearfix" id="6510631">
                    <div class="article-comment-user-comment">
                      <img src="./views/admin/assets/img/160x160/<?= $item['image'] ?>" alt="">
                      <div class="comment-right">
                        <h4 class="article-comment-name-user"><?= $item['hoten'] ?></h4>
                        <span class="article-comment-date-bull"><?= $item['ngay_bl'] ?></span>
                        <h4 class="article-comment-detail"><?= $item['noi_dung'] ?></h4>
                      </div>
                    </div>
                  </div>
                <?php endif ?>
              <?php endforeach ?>
            </div>
            <div class="rte"><h1>Vui lòng <a href="?ctr=login" style="color: #000;"> đăng nhập </a>để bình luận</h1></div>
          <?php } ?>
        </div>
        <!-- end bình luận -->
      </div>
      <div class="main-content-right">
        <div class="order">
          <div class="title-head">
            <h1>
              <?= $tour_detail['name_tour'] ?>
            </h1>
            <!-- yêu thích -->
            <form action="?ctr=yeu_thich" method="post">
              <input type="hidden" value="<?= $tour_detail['id_tour'] ?> " name="id_tour">
              <input type="hidden" value="<?= $tour_detail['name_tour'] ?>" name="name_tour">
              <input type="hidden" value="<?= $tour_detail['image'] ?>" name="img">
              <input type="hidden" value="<?= $tour_detail['price'] ?>" name="price">
              <input type="hidden" value="<?= $tour_detail['sale_price'] ?>" name="sale_price">
              <input type="hidden" value="<?= $tour_detail['lich_khoi_hanh'] ?>" name="lich_khoi_hanh">
              <input type="hidden" value="<?= $tour_detail['thoi_gian'] ?>" name="thoi_gian">
              <input type="hidden" value="<?= $tour_detail['phuong_tien'] ?>" name="phuong_tien">
              <button type="submit" name="btn">
                <a href="" name="btn">
                  <ion-icon name="heart-outline"></ion-icon>
                </a>
              </button>
            </form>
            <!-- end yêu thích -->
          </div>
          <div class="price">
            <span class="old-price">
              <?php if($tour_detail['sale_price'] != 0) : ?>
                <del class="price product-price-old"> <?= number_format($tour_detail['price']) ?> </del>
              <?php endif ?>
            </span>
            <span class="special-price">Giá mới:
              <span class="price product-price"><?= number_format($tour_detail['price'] -  $tour_detail['sale_price']) ?></span>
            </span>
            <!-- Giá Khuyến mại -->
            <?php if($tour_detail['sale_price'] != 0) : ?>
              <span class="save-price">Tiết kiệm
                <span class="price product-price-save">-5%</span>
              </span>
            <?php endif ?>
            <!-- Tiết kiệm -->
          </div>
          <a target="_blank" class="orange-btn" href="#" title="In chương trình tour"><img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/printer.svg?1663906214480" alt="In chương trình tour" />
            In chương trình tour</a>
          <div class="journey">
            <span>Hành trình:</span> <?= $tour_detail['khoi_hanh_tu'] ?> - Huế
          </div>
          <ul class="ct_course_list">
            <li>
              <img src="./layout/images/<?= $tour_detail['phuong_tien'] ?>" alt="Di chuyển bằng máy bay" />
              Di chuyển:
              <span class="tag-color">Di chuyển bằng máy bay</span>
            </li>
            <li>
              <img src="./layout/images/tag_icon_4.svg" alt="Thứ 7 hằng tuần" />
              Lịch khởi hành:
              <span class="tag-color"><span id="date-khoi-hanh"><?= $tour_detail['lich_khoi_hanh'] ?></span></span>
            </li>
            <li>
              <img src="./layout/images/tag_icon_5.svg" alt="4 ngày 3 đêm" />
              Thời gian: <span class="tag-color"><?= $tour_detail['thoi_gian'] ?></span>
            </li>
          </ul>
          <div class="product-desc">
            <?= $tour_detail['description'] ?>
          </div>
          <div class="call-me-back">
            <ul class="">
              <li class="">
                <a href="#book-tour-now" class="icon-mouse-scroll">Đặt tour</a>
              </li>
              <li class="">
                <button class="btn-callmeback" type="button">
                  Yêu cầu đặt
                </button>
              </li>
            </ul>
          </div>
        </div>
        <ul class="tour-program">
          <li>
            <a href="#tour-schedule" class="scroll-content"><img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/product_tab1_icon.svg?1663906214480" alt="Chương trình Tour" />
              <span>Chương trình Tour</span></a>
          </li>
          <li>
            <a href="#tour-departure" class="scroll-content"><img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/product_tab2_icon.svg?1663906214480" alt="Chính sách Tour" />
              <span>Chính sách Tour</span></a>
          </li>
          <li>
            <a href="#tour-term-regulations" class="scroll-content"><img src="//bizweb.dktcdn.net/100/372/532/themes/744930/assets/product_tab3_icon.svg?1663906214480" alt="Điều khoản &amp; Quy định" />
              <span>Điều khoản &amp; Quy định</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="tour-last-hour">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="#">CÁC TOUR TƯƠNG TỰ</a>
    </h2>
    <div class="tour-slider">
      <?php foreach ($tour_tuong_tu as $tour) : ?>
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
            <div class="vote-box">
              <div class="meta-vote">
                <img src="./layout/images/<?= $tour['phuong_tien'] ?>" alt="" />
              </div>
              <div class="sale-off"><?= $tour['price'] ?></div>
            </div>
            <div class="date-go">
              <ul>
                <li>
                  <img src="./layout/images/tag_icon_4.svg" alt="" />
                  <div>
                    <span class="date">Lịch khởi hành:</span>
                    <span class="date-go-color">Thứ 2 hàng tuần</span>
                  </div>
                </li>
                <li>
                  <img src="./layout/images/tag_icon_5.svg" alt="" />
                  <div>
                    <span class="date">Thời gian:</span>
                    <span class="date-go-color">6 ngày 5 đêm</span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="action-box">
              <h2 class="price-box"><?= $tour['price'] - $tour['sale_price'] ?></h2>
              <a href="?ctr=tour_detail&id_tour=<?= $tour['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<br />
<section class="tour-last-hour">
  <div class="container">
    <h2 class="tour-last-caption">
      <a href="#"> <span>TOUR GIỜ CHÓT</span> GIÁ TỐT</a>
    </h2>
    <div class="tour-slider">
      <?php foreach ($tour_cheap as $cheap) : ?>
        <div class="tour-last-item">
          <div class="tour-last-img">
            <a href="?ctr=tour_detail&id_tour=<?= $cheap['id_tour'] ?>">
              <img src="./layout/images/products/<?= $cheap['image'] ?>" alt="" />
            </a>
          </div>
          <div class="tour-last-info">
            <h3 class="info-tour-title">
              <a href="?ctr=tour_detail&id_tour=<?= $cheap['id_tour'] ?>"><?= $cheap['name_tour'] ?></a>
            </h3>
            <div class="info-bottom">
              <div class="vote-box">
                <div class="meta-vote">
                  <img src="./layout/images/<?= $cheap['phuong_tien'] ?>" alt="" />
                </div>
                <div class="sale-off"><?= $cheap['price'] ?>₫</div>
              </div>
              <div class="date-go">
                <ul>
                  <li>
                    <img src="./layout/images/tag_icon_4.svg" alt="" />
                    <div>
                      <span class="date">Lịch khởi hành:</span>
                      <span class="date-go-color"><?= $cheap['lich_khoi_hanh'] ?></span>
                    </div>
                  </li>
                  <li>
                    <img src="./layout/images/tag_icon_5.svg" alt="" />
                    <div>
                      <span class="date">Thời gian:</span>
                      <span class="date-go-color"><?= $cheap['thoi_gian'] ?></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="action-box">
                <h2 class="price-box"><?= $cheap['price'] - $cheap['sale_price'] ?>₫</h2>
                <a href="?ctr=tour_detail&id_tour=<?= $cheap['id_tour'] ?>" class="booking-box">ĐẶT TOUR</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<?php include_once "footer.php"; ?>