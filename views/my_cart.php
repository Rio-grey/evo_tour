<!-- 
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/account_detail.css" />
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Thay đổi mật khẩu</li>
    </ul>
  </div>
</section>
<section class="account-details">
  <div class="container">
    <div class="account">
      <aside class="account-menu">
        <h1 class="title-account">Trang tài khoản</h1>
        <p class="name-account">Xin chào, !</p>
        <ul class="menu-account">
          <li class="menu-account_item">
            <a href="?ctr=account_detail" class="menu-account_link">Thông tin tài khoản</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=my_cart" class="menu-account_link click">Đơn hàng của bạn</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=change_pass" class="menu-account_link">Đổi mật khẩu</a>
          </li>
          <li class="menu-account_item">
            <a href="#" class="menu-account_link">Bình luận</a>
          </li>
        </ul>
      </aside>
      <article class="acount-detail">
        <h1 class="title-account">Đơn hàng của bạn</h1>
        <form action="" method="post" class="account-info" enctype="multipart/form-data">
          <table class="my_cart">
            <thead>
              <tr>
                <th>Đơn hàng</th>
                <th>Ngày</th>
                <th>Địa chỉ</th>
                <th>Giá trị đơn hàng</th>
                <th>TT thanh toán</th>
                <th>TT vận chuyển</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="color: #1ba0e2">#1064</td>
                <td>03/12/2022</td>
                <td>Phú Diễn, Bắc Từ Liêm, Hà Nội</td>
                <td>2.040.000₫</td>
                <td>Chưa thu tiền</td>
                <td>Chưa vận chuyển</td>
              </tr>
            </tbody>
          </table>
        </form>
      </article>
    </div>
  </div>    
</section>
 -->

<?php include_once "header.php" ?>
<link rel="stylesheet" href="./layout/css/tour_khuyen_mai.css" />
<link rel="stylesheet" href="./layout/css/account_detail.css" />
<section class="bread-crumb">
  <div class="container">
    <ul>
      <li>
        <a href="?ctr=home">Trang chủ</a>
      </li>
      <li class="cheo">/</li>
      <li>Quản Lý Đơn Hàng</li>
    </ul>
  </div>
</section>
<section class="account-details">
  <div class="container">
    <div class="account">
      <aside class="account-menu">
        <h1 class="title-account">Trang tài khoản</h1>
        <p class="name-account">Xin chào, <?= isset($_SESSION['user']['hoten']) ? $_SESSION['user']['hoten'] : "" ?> !</p>
        <ul class="menu-account">
          <li class="menu-account_item">
            <a href="?ctr=account_detail" class="menu-account_link">Thông tin tài khoản</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=my_cart" class="menu-account_link click">Đơn hàng của bạn</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=change_pass" class="menu-account_link">Đổi mật khẩu</a>
          </li>
        </ul>
      </aside>
      <article class="acount-detail">
        <h1 class="title-account">Đơn hàng của bạn</h1>
        <form action="?ctr=my_cart_detail" method="post" class="account-info" enctype="multipart/form-data">
          <?php if (isset($_COOKIE['message'])) : ?>
            <div class="alert alert-success" role="alert">
              <?= $_COOKIE['message'] ?>
            </div>
          <?php endif ?>
          <table class="my_cart">
            <thead>
              <tr>
                <th>Đơn hàng</th>
                <th>Ngày Đi</th>
                <th>Địa chỉ</th>
                <th>Giá trị đơn hàng</th>
                <th>PT thanh toán</th>
                <th>TT vận chuyển</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <?php if (isset($_SESSION['user'])) : ?>
                <?php foreach ($show_dh as $item) : ?>
                  <?php if ($_SESSION['user']['id_users'] == $item['id_users']) : ?>
                    <tr>
                      <td style="color: #1ba0e2"># <?= $item['ma_dh'] ?></td>
                      <td> <?= $item['ngay_di'] ?></td>
                      <td class="dia_chi"><?= $item['dia_chi'] ?></td>
                      <td> <?= number_format($item['tong_tien_tour']) ?>₫</td>
                      <td> <?= $item['pttt'] ?></td>
                      <td><?= check_trang_thai_don_hang($item['status']) ?></td>
                      <?php if ($item['status'] == 0) : ?>
                        <td><a class="btn-danger" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng không') " href="?ctr=delete_dh&id_booking_detail=<?= $item['id_booking_detail'] ?>">Hủy đơn</a></td>
                      <?php endif ?>
                    </tr>
                  <?php endif ?>
                <?php endforeach ?>
              <?php endif ?>
            </tbody>
          </table>
        </form>
      </article>
    </div>
  </div>
</section>
<?php include_once "footer.php" ?>