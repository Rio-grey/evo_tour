<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Evo Tour</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./layout/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./layout/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script src="https://kit.fontawesome.com/91fe53bdda.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./layout/css/bill.css" />
</head>

<body>
  <div class="wrapper">
    <main>
      <form action="?ctr=bill_confirm" method="post" class="bill-form">
        <div class="infos">
          <header>
            <h1 class="logo"><a href="?ctr=home">Evo Tour</a></h1>
          </header>
          <div class="info-order">
            <div class="info">
              <div class="form-title">
                <h2>Thông tin nhận hàng</h2>
                <div class="dang-nhap">
                  <?php if(!isset($_SESSION['user'])) : ?>
                    <a href="?ctr=login">
                      <i class="fa-solid fa-circle-user"></i>
                      <span>Đăng nhập</span>
                    </a>
                  <?php endif ?>    
                </div>
              </div>
              <?php
              if (isset($_SESSION['user'])) {
                $name = $_SESSION['user']['user_name'];
                $email = $_SESSION['user']['email'];
                $sdt = $_SESSION['user']['sdt'];
                $id_users = $_SESSION['user']['id_users'];
              } else {
                $name = "";
                $email = "";
                $sdt = "";
                $id_users = 1;
              }
              ?>
              <input type="hidden" name="id_users" value="<?= $id_users ?>">

              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?= $email ?>" required />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ và tên" name="name" value="<?= $name ?>" required />
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Số điện thoại" name="sdt" value="<?= $sdt ?>" required />
                <small id="emailHelp" class="form-text text-muted" style="color: red;"><?= isset($_GET['errors']) ? $_GET['errors'] : '' ?></small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Địa chỉ" name="dia_chi" required />
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <textarea id="my-textarea" class="form-control" name="" rows="3" placeholder="Ghi chú"></textarea>
              </div>
            </div>
            <div class="shipping">
              <div class="form-title">
                <h2>Vận chuyển</h2>
              </div>
              <div class="form-check">
                <div>
                  <input class="form-check-input" type="radio" id="flexRadioDefault1" value="" checked />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Giao hàng tận nơi
                  </label>
                </div>
                <span>40.000₫</span>
              </div>
              <br />
              <div class="form-title">
                <h2>Thanh toán </h2>
              </div>
              <div class="form-check">
                <div>
                  <input class="form-check-input" type="radio" id="flexRadioDefault1" value="1" name="pttt" required />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Thanh toán khi giao hàng (COD)
                  </label>
                </div>
                <i class="fa-regular fa-money-bill-1"></i>
              </div>
              <br />
              <div class="form-check">
                <div>
                  <input class="form-check-input" type="radio" id="flexRadioDefault1" value="2" name="pttt" required />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Thanh toán online (Chuyển khoản)
                  </label>
                </div>
                <i class="fa-regular fa-money-bill-1"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="order">
          <div class="sidebar-header">
            <h2 class="sidebar-title">Đơn hàng (<?= count($_SESSION['bill']) ?> sản phẩm)</h2>
          </div>
          <div class="sidebar-content">
            <?php $tong = 0; ?>
            <?php foreach ($_SESSION['bill'] as $item) : ?>
              <div class="order-summary-list">
                <table class="product-table">
                  <tbody>
                    <tr class="product">
                      <td class="product__image">
                        <div class="product-thumnail">
                          <div class="product-thumbnail__wrapper">
                            <img src="./layout/images/products/<?= $item[2] ?>" alt="" class="product-thumbnail__image" width="100" />
                          </div>
                          <!-- <span class="product-thumbnail__quantity">2</span> -->
                        </div>
                      </td>
                      <th class="product__description">
                        <span class="product__description__name">
                          <?= $item[1] ?>
                        </span>
                        <span class="product__description__property">Người Lớn: <?= $item[7] ?></span>
                        <span class="product__description__property">Trẻ em: <?= $item[8] ?></span>
                        <span class="product__description__property">
                          Ngày đi: <?= $item[9] ?>
                      </th>
                      <td class="product__price" style="text-align: right">
                        <?= number_format(($item[7] * ($item[3] - $item[4])) +  ($item[8] * (($item[3] - $item[4]) / 2))) ?>₫
                      </td>
                      <input type="hidden" value="<?= $item[10] ?>">
                    </tr>
                  </tbody>
                </table>
              </div>
              <?php $tong_tien = ($item[7] * ($item[3] - $item[4])) +  ($item[8] * (($item[3] - $item[4]) / 2));
              $tong += $tong_tien;
              ?>
            <?php endforeach ?>
            <!-- lấy dữ liệu hiển thị sang bên  bill confirm-->
            <input type="hidden" value="<?= $item[9] ?>" name="ngay_di" />
            <input type="hidden" value="<?= $item[7] ?>" name="nguoi_lon" />
            <input type="hidden" value="<?= $item[8] ?>" name="tre_em" />
            <input type="hidden" value="<?= $item[10] ?>" name="ngay_dat_hang" />
            <input type="hidden" value="<?= $tong + 40000 ?>" name="tong_tien" />
            <div class="voucher">
              <div class="form-group">
                <input type="text" class="form-control voucher-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập mã giảm giá" />
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <button type="submit" class="btn btn-primary voucher-btn">
                Áp dụng
              </button>
            </div>
            <div class="total-line">
              <div class="total-line__subtotal">
                <div class="total-line__name">Tạm tính</div>
                <div class="total-line__price"> <?= number_format($tong) ?>₫</div>
              </div>
              <div class="total-line__shipping">
                <div class="total-line__name">Phí vận chuyển</div>
                <div class="total-line__price">40.000₫</div>
              </div>
            </div>
            <div class="total-line__payment">
              <div class="total-line__payment__name">Tổng cộng</div>
              <div class="total-line__payment__price"><?= number_format($tong + 40000) ?>₫</div>
            </div>
            <div class="book-now">
              <a href="?ctr=gio_hang">
                <ion-icon name="chevron-back-outline"></ion-icon> Quay về giỏ
                hàng
              </a>
              <!-- <input type="text" name="id_booking" value=""> -->
              <button type="submit" class="btn btn-primary" name="dathang">ĐẶT HÀNG</button>
            </div>
          </div>
        </div>
      </form>
    </main>
  </div>
</body>

</html>