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
      <li>Trang khách hàng</li>
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
            <a href="?ctr=account_detail" class="menu-account_link click">Thông tin tài khoản</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=my_cart" class="menu-account_link">Đơn hàng của bạn</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=change_pass" class="menu-account_link">Đổi mật khẩu</a>
          </li>
        </ul>
      </aside>
      <article class="acount-detail">
        <h1 class="title-account">Thông tin tài khoản</h1>
        <form action="?ctr=edit-account" method="post" class="account-info" enctype="multipart/form-data">
          <input type="hidden" name="id_users" value="<?=isset($_SESSION['user']['id_users']) ? $_SESSION['user']['id_users'] : "" ?>">
          <div class="account-info_input">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên đăng nhập</label>
              <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= isset($_SESSION['user']['user_name']) ? $_SESSION['user']['user_name'] : "" ?>">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Họ và tên</label>
              <input type="text" name="hoten" class="form-control" id="exampleInputPassword1" value="<?= isset($_SESSION['user']['hoten']) ? $_SESSION['user']['hoten'] : "" ?>">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Số điện thoại</label>
              <input type="text" name="sdt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= isset($_SESSION['user']['sdt']) ? $_SESSION['user']['sdt'] : "" ?>">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Địa chỉ</label>
              <input type="text" name="diachi" class="form-control" id="exampleInputPassword1" value="<?= isset($_SESSION['user']['diachi']) ? $_SESSION['user']['diachi'] : "" ?>">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?= isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : "" ?>">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="my-input">Hình đại diện</label>
              <input type="hidden" name="image" value="<?= isset($_SESSION['user']['image']) ? $_SESSION['user']['image'] : "" ?>">
              <img src="./views/admin/assets/img/160x160/<?= isset($_SESSION['user']['image']) ? $_SESSION['user']['image'] : "" ?>" class="account-img">
              <input id="my-input" name="image" class="form-control-file" type="file">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
          </div>
          <small style="color: #20E3B2;"><?= isset($_COOKIE['message']) ? $_COOKIE['message'] : "" ?></small>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
      </article>
    </div>
  </div>
</section>
<?php include_once "footer.php" ?>