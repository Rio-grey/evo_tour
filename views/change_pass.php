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
      <li>Thay đổi mật khẩu</li>
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
            <a href="?ctr=my_cart" class="menu-account_link">Đơn hàng của bạn</a>
          </li>
          <li class="menu-account_item">
            <a href="?ctr=change_pass" class="menu-account_link click">Đổi mật khẩu</a>
          </li>
        </ul>
      </aside>
      <article class="acount-detail">
        <h1 class="title-account">Đổi mật khẩu</h1>
        <form action="?ctr=edit_pass" method="post" class="account-info" enctype="multipart/form-data">
          <div class="account-info_input">
            <div class="form-group">
              <label for="exampleInputEmail1">Mật khẩu cũ</label>
              <input type="password" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted" style="color: red;"><?= isset($errors['pass']) ? $errors['renew_pass'] : "" ?></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mật khẩu mới</label>
              <input type="password" name="new_pass" class="form-control" id="exampleInputPassword1">
              <small id="emailHelp" class="form-text text-muted" style="color: red;"><?= isset($errors['new_pass']) ? $errors['renew_pass'] : "" ?></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Xác nhận lại mật khẩu mới</label>
              <input type="password" name="renew_pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted" style="color: red;"><?= isset($errors['renew_pass']) ? $errors['renew_pass'] : "" ?></small>
            </div>
          </div>
          <br>
          <small style="color: #20E3B2;"><?= isset($_COOKIE['message']) ? $_COOKIE['message'] : "" ?></small>
          <button type="submit" class="btn btn-primary">Đặt lại mật khẩu</button>
        </form>
      </article>
    </div>
  </div>    
</section>
<?php include_once "footer.php" ?>